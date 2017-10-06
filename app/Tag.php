<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags';

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
    protected $fillable = ['id','tag', 'description', 'visible'];

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }




    
public function Note()
    {
        return $this->hasMany('App\Note', 'id');
    }

    
}
