<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';

    public function user()
    {
    	return $this->belongsToMany('App\User');
    }

    public function contractor()
    {
    	return $this->belongsToMany('App\Contractor');
    }

    public function trainer()
    {
    	return $this->belongsToMany('App\Trainer');
    }
}
