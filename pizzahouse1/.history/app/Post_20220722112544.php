<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\sodtDeletes;

class Post extends \Illuminate\Database\Eloquent\Model
{
    //
    use softDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable= [
        'title',
        'content'
    ];
}
