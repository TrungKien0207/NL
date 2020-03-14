<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";
    
    //Product of type
    public function type() {
    	return $this->belongsTo('App\type', 'idType', 'id');
    }

    public function category() {
    	return $this->hasMany('App\category','idCategory','id');
    }
}
