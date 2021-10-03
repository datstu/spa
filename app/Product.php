<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'productName','catID','brandID','product_desc',
        'type','price','price_old','image',
        'ghiChu','moTaNgan','meta_keyswords','tags'
    ];
    protected $primaryKey = 'productID';
    protected $table = 'tbl_product';
}
