<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrderAddress extends Model
{
    use HasFactory;

    protected $fillable=['first_name','last_name','email','phone','province','country','city','zip_code','address1','address2','order_id'];
    public function order()
    {
        return $this->belongsTo(ServiceOrder::class, 'order_id', 'id');
    }

}
