<?php

use Illuminate\Database\Seeder;
use App\Veterinary;

class VeterinaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Veterinary::create( [
'id'=>1,
'name'=>'Austrogen',
'address'=>'Biblián | Ecuador',
'tlf1'=>NULL,
'tlf2'=>NULL,
'cel1'=>'098 427 1836',
'cel2'=>NULL,
'mail'=>'austrogen.sv@gmail.com',
'linkweb'=>NULL,
'prop'=>NULL,
'gerent'=>NULL,
'area'=>'Empresa de biotecnología',
'description'=>'AUSTROGEN, es una Asociación de técnicos encaminados a satisfacer las necesidades del sector agropecuario mediante la implementación de programas de mejoramiento y mantenimiento de la biodiversidad genética, prevención de enfermedades, elaboración y ejecución de proyectos agropecuarios, capacitaciones e innovación de tecnologías. Orientando a mantener el bienestar animal, preservando el medio ambiente y dinamizando la producción que garantice el buen vivir.',
'logo'=>'uploads/logos/fondo-1-final.png',
'namelogo'=>'fondo-1-final.png',
'datestart'=>NULL,
'ruc'=>NULL,
'razonsocial'=>NULL,
'fb'=>'https://www.facebook.com/Austrogen/',
'tw'=>NULL,
'in'=>NULL,
'yt'=>NULL,
'gg'=>NULL,
'latitud'=>NULL,
'longitud'=>NULL,
'created_at'=>'2017-10-10 06:22:53',
'updated_at'=>'2017-10-10 06:22:53'
] );
    }
}
