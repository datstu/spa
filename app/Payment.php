<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'status_payment','date_payment','method_payment'
    ];
    protected $primaryKey = 'id_payment';
    protected $table = 'tbl_payment';
}
