<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'cl_posts';
    protected $fillable = [
        'post_title','sub_title','template','post_content','post_excerpt','uri','page_key','post_type','post_parent','post_order','thumbnail','banner','meta_keyword','meta_description','associated_title','external_link','status'
    ];
}
