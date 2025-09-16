<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffersModel extends Model
{
    use HasFactory;

    protected $table = 'offers';
    protected $fillable = ['title','sub_title', 'type' ,'discount','status'];

}
