<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable=['shipping_location','shipping_price','status','zip_code'];
}
