<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function users()
    {
    	return $this->belongsTo('App\Users');
    }

    public function anss()
    {
    	return $this->hasMany('App\Ans');
    }

}
