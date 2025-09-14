<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;

    protected $table='service_orders';

    protected $fillable = [
        'user_id','service_id','notes','price','subtotal','tax','discount','discount_id','grand_total','status','order_track'
    ];
}
