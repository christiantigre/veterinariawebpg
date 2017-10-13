<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTitle extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'section_titles';

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
    protected $fillable = ['section','title', 'subtitle', 'color', 'visible'];

    
}
