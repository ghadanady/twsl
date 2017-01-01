<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model {

    //
    protected $table = 'contact_details';

    public function master() {
        return $this->belongsTo('App\ContactMaster', 'master_id');
    }

}
