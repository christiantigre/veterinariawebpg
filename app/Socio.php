<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'socios';

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
        'img', 
        'description', 
        'name', 
        'lastname', 
        'fb', 
        'tw', 
        'in', 
        'gg', 
        'lk', 
        'especialitation',
         'blog', 
    'workplace',
    'workplacelink',
    'abrevTitulo',
    'is_active'
];

    
}
