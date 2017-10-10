<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeproduct extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'typeproducts';

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
    protected $fillable = ['typeproduct', 'is_active'];

    
}
