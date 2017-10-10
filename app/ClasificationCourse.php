<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasificationCourse extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clasification_courses';

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
    protected $fillable = ['clasification', 'body', 'slug', 'typecourse_id', 'visible'];

    
}
