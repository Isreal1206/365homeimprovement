<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketCategory extends Model
{
    protected $table = 'market_categories';

    public function user()
    {
    	return $this->belongsToMany('App\User');
    }

    public function marketer()
    {
    	return $this->belongsToMany('App\Marketer');
    }
}
