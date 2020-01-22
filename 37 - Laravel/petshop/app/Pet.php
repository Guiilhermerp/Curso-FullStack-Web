<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function Owner(){
        return $this->belongsTo('App\Owner', 'owner_id', 'id');
    }

    
}
