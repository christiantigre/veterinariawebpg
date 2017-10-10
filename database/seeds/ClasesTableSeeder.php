<?php

use App\ClasificationCourse;
use Illuminate\Database\Seeder;

class ClasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clasificationcourse::create( [
'id'=>1,
'clasification'=>'Curso de Manejo Animal',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-10 19:27:06',
'updated_at'=>'2017-10-10 19:27:06'
] );

			

Clasificationcourse::create( [
'id'=>2,
'clasification'=>'Curso Internacional de Peluquería y Estética Canina',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-10 19:27:12',
'updated_at'=>'2017-10-10 19:27:12'
] );

			

Clasificationcourse::create( [
'id'=>3,
'clasification'=>'Curso internacionál de Adiestramiento Canino',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-10 19:27:18',
'updated_at'=>'2017-10-10 19:27:18'
] );

			

Clasificationcourse::create( [
'id'=>4,
'clasification'=>'Con el Curso Internacional de Asistente de Clínica Veterinaria',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-10 19:27:31',
'updated_at'=>'2017-10-10 19:27:31'
] );
            }
}
