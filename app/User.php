<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'telefono',
        'celular',
        'domicilio',
        'img',
        'nameimg',
        'activo',
        'notificame',
        'email', 
        'password',
        'id_country',
        'id_province',
        'history',
        'id_gender',
        'created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Gender()
    {
        return $this->belongsTo('App\Gender','id_gender');
    }
    public function Country()
    {
        return $this->belongsTo('App\Country','id_country');
    }
    public function Province()
    {
        return $this->belongsTo('App\Province','id_province');
    }

    public function actividad()
    {
        Carbon::setlocale(config('app.locale'));
        $diff = Carbon::now()->diffForHumans(Carbon::createFromFormat('Y-m-d',$this->fecha_nacimiento));
        /*Cambiar Y-m-d por el formato que tengas*/
        return $diff;
    }
}
