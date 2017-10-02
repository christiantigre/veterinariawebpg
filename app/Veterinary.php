<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinary extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'veterinaries';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address', 'tlf1', 'tlf2', 'cel1', 'cel2', 'mail', 'linkweb', 'prop', 'gerent', 'area', 'description', 'logo', 'datestart', 'ruc', 'razonsocial'
    ,'fb','tw','in','yt','gg','latitude','longitud'
];

    
}
