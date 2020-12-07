<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
	protected $table = 'contractors';

	public function user()
    {
    	return $this->belongsTo('App\User');
    }
    
    public function category()
    {
    	return $this->belongsToMany('App\Category');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
