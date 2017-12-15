<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

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
    protected $fillable = ['category', 'description', 'visible'];

    public function Subcategory()
    {
        return $this->hasMany('App\Subcategory', 'id');
    }

    public function Albun()
    {
        return $this->hasMany('App\Albun', 'id');
    }

    public function albuns()
    {
        return $this->hasMany('App\Albun');
    }
    
}
