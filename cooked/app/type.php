<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $table = "type";
    protected $guard = [''];

    public function getType() {
    	return $this->hasMany('App\product','idType','id');
    }

// public function getType() {
//     	return $this->belongsTo('App\type', 'idType', 'id');
//     }
}
