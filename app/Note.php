<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notes';

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
        'intro',
        'description',
         'link',
          'name',
         'imgHeader',
         'nameimg',
          'visible',
          'webvisible',
          'visit',
          'backgroud',
          'colortext',
          'like',
          'share',
          'tag_id',
          'admins_id'
      ];



    public function Tag()
    {
        return $this->belongsTo('App\Tag', 'tag_id');
    }

    public function Admin()
    {
        return $this->belongsTo('App\Admin', 'admins_id');
    }
    
}
