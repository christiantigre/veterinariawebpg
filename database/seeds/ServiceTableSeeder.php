<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create( [
'id'=>1,
'service'=>'Capacitaciones, cursos y seminarios',
'is_active'=>1,
'created_at'=>'2017-10-10 06:17:28',
'updated_at'=>'2017-10-10 06:17:28'
] );

			

Service::create( [
'id'=>2,
'service'=>'Asesoramiento técnico Veterinario',
'is_active'=>1,
'created_at'=>'2017-10-10 06:23:45',
'updated_at'=>'2017-10-10 06:23:45'
] );

			

Service::create( [
'id'=>3,
'service'=>'Inseminación artificial en bovinos y porcinos',
'is_active'=>1,
'created_at'=>'2017-10-10 06:24:11',
'updated_at'=>'2017-10-10 06:24:11'
] );

			

Service::create( [
'id'=>4,
'service'=>'Lavado y transferencia de embriones bovinos',
'is_active'=>1,
'created_at'=>'2017-10-10 06:24:19',
'updated_at'=>'2017-10-10 06:24:19'
] );

			

Service::create( [
'id'=>5,
'service'=>'Implementación de programas sanitarios en hatos',
'is_active'=>1,
'created_at'=>'2017-10-10 06:24:27',
'updated_at'=>'2017-10-10 06:24:27'
] );

			

Service::create( [
'id'=>6,
'service'=>'Elaboración de Proyectos Agropecuarios',
'is_active'=>1,
'created_at'=>'2017-10-10 06:24:37',
'updated_at'=>'2017-10-10 06:24:37'
] );
    }
}
