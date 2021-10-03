<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name_user','password','phone_number'
    ];
    protected $primaryKey = 'id_user';
    protected $table = 'tbl_user';
}
