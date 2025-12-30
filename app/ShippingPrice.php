<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingPrice extends Model
{
    use HasFactory;

    protected $fillable = ["shipping_media_id", "weight_id", "price", "status"];

    public function weight(){
        return $this->belongsTo(Weight::class, 'weight_id');
    }

    public function medium(){
        return $this->belongsTo(ShippingMedium::class, 'shipping_media_id');
    }
}
