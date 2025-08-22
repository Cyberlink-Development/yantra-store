<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Review extends Model
{
    protected $fillable = ['name','email','rating','message','show','product_id','user_id'];
    protected $casts = [
        'rating' => 'float', // To make the rating return as float instead of string when fetched
    ];
    public function scopeActive($query){
        return $query->where('show','1');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
