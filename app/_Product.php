<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug',
        'locale_id',
    ];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
    
    public function master() {
    	return $this->belongsTo('App\Product', 'product_id');
    }
}
