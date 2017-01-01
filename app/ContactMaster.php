<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMaster extends Model {

    //
    protected $table = 'contact_master';

    public function details() {
        return $this->hasMany('App\ContactDetails', 'master_id');
    }

}
