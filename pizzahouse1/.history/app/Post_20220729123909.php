<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends \Illuminate\Database\Eloquent\Model
{
    //
    use softDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable= [
        'title',
        'content',
        'is_admin'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }


}
