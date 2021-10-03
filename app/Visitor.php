<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'ip_address','date_visit'
    ];
    protected $primaryKey = 'visitors_id';
    protected $table = 'tbl_visitors';
 

}
