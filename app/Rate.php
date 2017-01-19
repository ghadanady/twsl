<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table="ratings";

     public function Product()
    {
        return $this->belongsTo('App\Product' ,'id');
    }
}
