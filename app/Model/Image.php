<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=['product_id','image','is_main'];

    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    
}
