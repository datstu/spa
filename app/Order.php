<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_user','id_shipping','id_payment','total_order','status_order','date_order','increment_id','created_at'
    ];
    protected $primaryKey = 'id_order';
    protected $table = 'tbl_order';
    public function shipping(){
        return $this->belongsTo('App\Shipping','id_shipping');
    }
    

}
