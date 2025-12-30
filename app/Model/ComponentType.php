<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentType extends Model
{
    use HasFactory;

    protected $table = 'component_types';
    
    protected $fillable=['name','status','level'];

    public function products()
    {
        return $this->hasMany(Product::class, 'component_type', 'id') ->where('price', '>', 0);
    }

}
