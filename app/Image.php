<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';

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
    protected $fillable = ['file_name', 'file_size', 'file_mime', 'file_path', 'category_id', 'albun_id','destacada','title','intro','content','img','nameimg'
];

    public function Albun()
	{
		return $this->belongsTo('App\Albun');
	}
	
}
