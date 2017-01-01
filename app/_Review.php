<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class _Review extends Model {

    protected $fillable = [
        'review',
        'locale_id',
    ];

    public function master()
    {
        return $this->belongsTo('App\Review');
    }

    public function locale()
    {
        return $this->belongsTo('App\Locale','locale_id');
    }

}
