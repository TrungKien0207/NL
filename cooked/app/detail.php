<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table = "detail";

    public function product() {
    	return $this->belongsTo('App\product', 'idproduct', 'id');
    }
}
