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
    		'name'=>'TuClinica',
    		'address'=>'Jaime roldos Y Manuel moreno',
    		'tlf1'=>'2203-584',
    		'tlf2'=>'2203.485',
    		'cel1'=>'0992702599',
    		'cel2'=>'0979262364',
    		'mail'=>'andrescondo17@gmail.com',
    		'linkweb'=>'http:://www.veterinariaweb.com',
    		'prop'=>'Fulano Mengano',
    		'gerent'=>'Fulano Mengano',
    		'area'=>'Veterinaria',
    		'description'=>'LA MEJOR CLÍNICA VETERINARIA DE ECUADOR. En Clínica Veterinaria TuClinica contamos con un laboratorio integrado el cual permite correr pruebas como química sanguínea seca, lo que facilita la obtención de datos a cualquier hora y en cuestión de minutos, hemograma (biometría hemática), coproparasitología, prueba que ayuda a la detección de parásitos o huevos de los mismos en heces fecales y serología, una técnica que ayuda a detectar enfermedades como parvovirus canino.',
    		'logo'=>'uploads/logo/log.png',
    		'datestart'=>NULL,
    		'ruc'=>NULL,
    		'razonsocial'=>NULL,
    		'fb'=>'#',
    		'tw'=>'#',
    		'in'=>'#',
    		'yt'=>'#',
    		'gg'=>'#',
            'latitud'=>'-2.8563269',
            'longitud'=>'-78.7848586',
    		'created_at'=>'2017-09-27 00:55:57',
    		'updated_at'=>'2017-09-27 01:28:16'
    	] );
    }
}
