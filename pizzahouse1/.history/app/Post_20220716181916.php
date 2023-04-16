<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends \Illuminate\Database\Eloquent\Model
{
    //

    protected $fillable= [
        'title',
        'content'
    ]
}
