<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courses';

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
        'title', 
        'subtitle', 
        'content',
        'description',
        'duration',
        'hours',
        'hourdesde',
        'hourhasta',
        'dais',
         'img', 
         'nameimg', 
         'video', 
         'link', 
         'visible', 
         'clasification_id'
     ];

    public function TypeCourse()
	{
		return $this->belongsTo('App\TypeCourse');
	}
	
    public function ClasificationCourse()
    {
        return $this->belongsTo('App\ClasificationCourse', 'clasification_id');
    }
    public function CoursesFiles()
    {
        return $this->hasMany('App\CoursesFiles', 'course_id');
    }

}
