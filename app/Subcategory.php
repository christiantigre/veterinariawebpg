<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subcategories';

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
    protected $fillable = ['content', 'subcategory', 'visible', 'category_id'];

    public function Category()
	{
		return $this->belongsTo('App\Category', 'category_id');
	}
	
}
