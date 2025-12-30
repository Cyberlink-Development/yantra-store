<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BrandDiscount extends Model
{
    protected $fillable = [
        'brand_id',
        'discount_type',
        'discount_value',
        'starts_at',
        'ends_at',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
