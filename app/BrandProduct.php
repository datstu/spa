<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'brand_name','brand_desc','brand_status','brand_image'
    ];
    protected $primaryKey = 'brand_id';
    protected $table = 'tbl_brand_product';
}
