<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $table = "type";

    public function type() {
    	return $this->hasMany('App\type','idType','id');
    }
}
