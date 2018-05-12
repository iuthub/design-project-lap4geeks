<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categoryRel(){
    	return $this->belongsTo('App\Category');
    }
}
