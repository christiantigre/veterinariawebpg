<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Service extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services';

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
        'service', 
        'slug', 
        'description', 
        'precio_venta', 
        'porcent_descuento', 
        'img', 
        'nameimg',
        'visible_slider', 
        'promocion', 
        'nuevo', 
        'oferta', 
        'is_active',
        'admins_id',
        'created_at'
    ];

    public function actividad()
    {
        Carbon::setlocale(config('app.locale'));
        $diff = Carbon::now()->diffForHumans(Carbon::createFromFormat('Y-m-d H:i:s',$this->created_at));
        /*Cambiar Y-m-d por el formato que tengas*/
        return $diff;
    }

    
}
