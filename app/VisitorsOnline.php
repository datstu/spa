<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorsOnline extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'total_count','date'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_count_visitors_online';
}
