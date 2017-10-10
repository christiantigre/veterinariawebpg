<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoursesFiles extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'files_courses';

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
        'filename', 
        'ruta', 
        'course_id'
     ];


    public function Course()
    {
        return $this->belongsTo('App\Course', 'id');
    }


}
