<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";
        protected $guard = [''];

    public function category() {
    	return $this->hasMany('App\category','idCategory','id');
    }
    
}
