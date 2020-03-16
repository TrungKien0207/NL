<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
    //quan hệ giữa table category và product
    //idCategory là khóa ngoại và id là khóa chính
    public function getType() {
    	return $this->hasMany('App\product','idProduct','id');
    }

}
