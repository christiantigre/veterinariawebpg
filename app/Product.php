<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

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
    protected $fillable = ['name', 'slug', 'cod', 'description', 'precio_compra', 'precio_venta', 'porcent_descuento', 'stock', 'img', 'visible', 'visible_slider', 'promocion', 'nuevo', 'tipeproduct_id','vendidos','oferta',
        'created_at','admins_id'];

    public function Typeproduct()
	{
		return $this->belongsTo('App\Typeproduct');
	}

    public function actividad()
    {
        Carbon::setlocale(config('app.locale'));
        $diff = Carbon::now()->diffForHumans(Carbon::createFromFormat('Y-m-d H:i:s',$this->created_at));
        /*Cambiar Y-m-d por el formato que tengas*/
        return $diff;
    }
	
}
