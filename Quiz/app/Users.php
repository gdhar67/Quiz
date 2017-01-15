<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Users extends Model implements Authenticatable
{
    
    use \Illuminate\Auth\Authenticatable;
    
    public function posts()
    {
    	return $this->hasMany('App\Post');
    }

    public function anss()
    {
    	return $this->hasMany('App\Ans');
    }


}
