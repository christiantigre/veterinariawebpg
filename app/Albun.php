<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albun extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'albuns';

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
    protected $fillable = ['namealbun', 'description', 'active', 'category_id'];

    /*public function Category()
	{
		return $this->belongsTo('App\Category');
	}*/

    public function Category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

	
}
