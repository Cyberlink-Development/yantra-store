<?php

namespace App\Model\Tag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'uri','description','icon','color','status','in_home','order'];

    public function scopeActive($query){
        return $query->where('status','1');
    }
    public function scopeHome($query){
        return $query->where('in_home','1');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
