<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeOwner extends Model
{
	protected $table = 'homeowners';

	public function user()
    {
    	return $this->belongsTo('App\User');
    }
    
    public function category()
    {
    	return $this->belongsToMany('App\Category');
    }
}
