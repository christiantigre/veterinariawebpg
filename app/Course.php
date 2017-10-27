<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        'precio', 
        'precio_teorico', 
        'precio_practico', 
        'disponibles', 
        'fechainit',
        'video', 
        'link', 
        'visible', 
        'visibleslider', 
        'nameslider', 
        'clasification_id',
        'admin_id',
        'created_at'
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

    public function actividad()
    {
        Carbon::setlocale(config('app.locale'));
        $diff = Carbon::now()->diffForHumans(Carbon::createFromFormat('Y-m-d H:i:s',$this->created_at));
        /*Cambiar Y-m-d por el formato que tengas*/
        return $diff;
    }

    public function Admin()
    {
        return $this->belongsTo('App\Admin', 'admin_id');
    }

    public function Suscribir()
    {
        return $this->hasMany('App\Suscribir', 'id');
    }

    

}
