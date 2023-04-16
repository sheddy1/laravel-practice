<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    Public function posts(){
        return $this->hasManyThrough('App\Post', 'App\User');
    }
}
