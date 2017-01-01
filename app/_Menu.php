<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _Menu extends Model
{

	protected $fillable = ['name' , 'locale_id'];
    //
    public function master() {
    	return $this->belongsTo('App\Menu', 'menu_id');
    }

}
