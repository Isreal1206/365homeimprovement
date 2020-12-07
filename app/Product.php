<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function marketer(){
    	return $this->belongsTo('App\Marketer');
    }

     public function user(){
    	return $this->belongsTo('App\User');
    }
}
