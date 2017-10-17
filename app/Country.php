<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['country'];
	
    public function User()
    {
        return $this->hasMany('App\User', 'id');
    }
}
