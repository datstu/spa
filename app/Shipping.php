<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name_shipping','phone_shipping','address_shipping','id_user','fee_ship'
    ];
    protected $primaryKey = 'id_shipping';
    protected $table = 'tbl_shipping';
}
