<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = ['genero'];

    public function User()
    {
        return $this->hasMany('App\User', 'id');
    }
}
