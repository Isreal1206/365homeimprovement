<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costguide extends Model
{
    protected $table = 'costguides';

	public function user()
    {
    	return $this->belongsTo('App\User');
    }
    
    public function category()
    {
    	return $this->belongsToMany('App\Category');
    }
}
