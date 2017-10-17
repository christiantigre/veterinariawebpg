<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['province'];
	
    public function User()
    {
        return $this->hasMany('App\User', 'id');
    }
}
