<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function order_list()
    {
    	return $this->belongsTo('App\Order');
    }
}
