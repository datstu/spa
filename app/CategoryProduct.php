<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'category_name','category_desc','category_status','category_image','meta_keywords'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category_product';
}
