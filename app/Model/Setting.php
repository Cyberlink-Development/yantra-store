<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table='cl_settings';
    protected $fillable=['logo','title','phone1','phone2','address','email_primary','email_secondary','twitter_link','instagram_link','facebook_link','meta_title','meta_description'];
}
