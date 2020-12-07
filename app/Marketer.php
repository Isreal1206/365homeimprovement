<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
	protected $table = 'marketers';

	public function user()
    {
    	return $this->belongsTo('App\User');
    }
    
    public function category()
    {
    	return $this->belongsToMany('App\Category');
    }
}
