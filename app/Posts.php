<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'post_desc','post_content','post_image','post_author','create_at','update_at','post_title','catID','display'
    ];
    protected $primaryKey = 'post_id';
    protected $table = 'tbl_posts';
}
