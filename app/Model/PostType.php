<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    use HasFactory;
    protected $table = 'cl_post_type';
    protected $fillable = ['post_type','uri','template','caption','banner','posttype_content','ordering','status','is_header','is_footer'];
}
