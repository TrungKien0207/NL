<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
     protected $table = "level";

     public function product() {
    	return $this->belongsTo('App\product', 'idPDuct', 'id');
    }
}
