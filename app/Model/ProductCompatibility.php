<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCompatibility extends Model
{
    use HasFactory;
    protected $table = 'product_compatibilities';

    protected $fillable = [
        'product_id',
        'compatible_product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function compatibleProduct()
    {
        return $this->belongsTo(Product::class, 'compatible_product_id');
    }
}
