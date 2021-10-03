<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultiImage extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'imgName','productID'
    ];
    protected $primaryKey = 'imgID';
    protected $table = 'tbl_images';
}
