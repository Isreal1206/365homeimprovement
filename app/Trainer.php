<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //use Notifiable;

    protected $table = 'trainers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function category()
    {
        return $this->belongsToMany('App\Category');
    }

}