<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_order','id_product','name_product','price_product','sales_qty','sub_total'
    ];
    protected $primaryKey = 'id_order_details';
    protected $table = 'tbl_order_detail';
}
