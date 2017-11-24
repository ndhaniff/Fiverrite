<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function author(){
        $this->belongsTo('App\User');
    }
}
