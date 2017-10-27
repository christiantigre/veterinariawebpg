<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscribir extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'suscribirs';

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
        'nombres', 
        'apellidos', 
        'correo', 
        'celular', 
        'telefono', 
        'comprobante', 
        'name_comprobante', 
        'numero_control', 
        'nombre_depositante', 
        'valor_depositado', 
        'precio_teorico', 
        'precio_practico', 
        'total', 
        'fecha_deposito', 
        'fecha_suscripcion', 
        'orden_cupo', 
        'tipesuscription_id', 
        'curso_id',
        'user_id'
    ];

    public function Typesuscription()
    {
        return $this->belongsTo('App\Typesuscription');
    }

    public function Course()
    {
        return $this->belongsTo('App\Course','curso_id');
    }
    
}
