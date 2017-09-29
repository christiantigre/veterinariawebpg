<?php

use App\Note;
use Illuminate\Database\Seeder;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::create( [
'id'=>1,
'title'=>'Salud mi mascota',
'description'=>'cuida la salud de tu mascota con estos tips que te comparto.',
'link'=>'tipssalud.com',
'name'=>'Richard Maldonado',
'visible'=>1,
'created_at'=>'2017-09-28 02:35:47',
'updated_at'=>'2017-09-28 02:50:52'
] );

			

Note::create( [
'id'=>2,
'title'=>'Medicación',
'description'=>'La medicación adecuada para tu masota la encuentras aqui.',
'link'=>'medicacion.com',
'name'=>'Abram lincol',
'visible'=>1,
'created_at'=>'2017-09-28 02:36:39',
'updated_at'=>'2017-09-28 02:36:39'
] );

			

Note::create( [
'id'=>3,
'title'=>'Peluqueria',
'description'=>'La peluqueria que puedes realizar a tu mascota te recomendamos alguna aqui en el enlace.',
'link'=>'peluqueriaweb.om',
'name'=>'Fabian Mendoza',
'visible'=>1,
'created_at'=>'2017-09-28 02:37:33',
'updated_at'=>'2017-09-28 02:37:33'
] );
    }
}
