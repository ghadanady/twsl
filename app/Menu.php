<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{



    public function categories()
    {
        return $this->belongsToMany('App\Category','menu_category', 'menu_id', 'category_id');
    }

    public function isShape($value)
    {
        return $this->shape_id === $value;
    }

    public function translated($locale = null)
    {
        return $this->details()->where('locale_id' , Locale::where('name',$locale ?: app()->getLocale())->first()->id)->first();
    }

    public function details()
    {
        return $this->hasMany('App\_Menu');
    }

}
