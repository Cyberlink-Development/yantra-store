<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['user_id','subtotal','tax','discount','grand_total','status','order_track','shipping_id', 'order_note', 'courier_id', 'weight'];

    public function shippingInfo(){
        return $this->belongsTo('App\ShippingPrice','courier_id');
    }

    public function shippings()
    {
        return $this->belongsTo('App\Model\Shipping','shipping_id');
    }
    public function details()
    {
        return $this->hasMany(OrderDetail::class,'order_id');
    }
    public function addresses()
    {
        return $this->hasMany(OrderAddress::class,'order_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getOrderDataForModal()
    {
        $productsArray = $this->details->map(function($detail) {
            $product = $detail->products;
            $mainImage = $product->images->where('is_main', 1)->first();
            return [
                'name' => $product->product_name ?? 'N/A',
                'brand' => get_brand_name($product->brand_id) ?? null,
                'model' => $product->model_name ?? null,
                'image' => $mainImage ? $mainImage->image : null,
                'size' => $detail->size ?? null,
                'color' => $detail->color ?? null,
                'price' => $detail->price ?? 0,
                'quantity' => $detail->quantity ?? 1,
                'subtotal' => $detail->total ?? ($detail->price * $detail->quantity),
                'slug' => $product->slug,
            ];
        })->toArray();
        $calculatedSubtotal = collect($productsArray)->sum('subtotal');

        $orderSummary = [
            'subtotal' => $calculatedSubtotal,
            'shipping' => $this->shipping_cost ?? 0,
            'tax' => $this->tax ?? 0,
            'total' => $calculatedSubtotal + ($this->shipping_cost ?? 0) + ($this->tax ?? 0),
        ];

        return [
            'order_track' => $this->order_track,
            'products' => $productsArray,
            'summary' => $orderSummary,
        ];
    }
}
