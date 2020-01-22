<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function Pets(){
        return $this->hasMany('App\Pet');
    }

    
}
