<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Locale;

class _Category extends Model {

    protected $fillable = [
        'name',
        'slug',
        'locale_id',
        'category_id',
    ];

    public function master()
    {
        return $this->belongsTo('App\Category' , 'category_id');
    }

    public function locale()
    {
        return $this->belongsTo('App\Locale','locale_id');
    }

}
