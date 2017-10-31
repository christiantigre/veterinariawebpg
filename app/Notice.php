<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notices';

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
    protected $fillable = [
        'title', 'intro','content', 'link', 'img', 'nameimg','day', 
        'month', 'compfb', 'comptw', 'compgg', 
        'visible','precio','asistire','preg','mens','fechainit','admins_id'
];

    
}
