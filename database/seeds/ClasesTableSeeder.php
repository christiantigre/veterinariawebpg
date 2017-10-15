<?php

use App\ClasificationCourse as Clasificationcourse;
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
'clasification'=>'Pastos y forrajes',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-15 03:31:14',
'updated_at'=>'2017-10-15 03:31:14'
] );

            

Clasificationcourse::create( [
'id'=>2,
'clasification'=>'Reproducción animal',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-15 03:31:34',
'updated_at'=>'2017-10-15 03:31:34'
] );

            

Clasificationcourse::create( [
'id'=>3,
'clasification'=>'Sanidad animal',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-15 03:31:44',
'updated_at'=>'2017-10-15 03:31:44'
] );

            

Clasificationcourse::create( [
'id'=>4,
'clasification'=>'Proyectos agropecuarios',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-15 03:31:57',
'updated_at'=>'2017-10-15 03:31:57'
] );

            

Clasificationcourse::create( [
'id'=>5,
'clasification'=>'Porcinos',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-15 03:33:08',
'updated_at'=>'2017-10-15 03:33:08'
] );

            

Clasificationcourse::create( [
'id'=>6,
'clasification'=>'Ovinos',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-15 03:33:16',
'updated_at'=>'2017-10-15 03:33:16'
] );

            

Clasificationcourse::create( [
'id'=>7,
'clasification'=>'Aves',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-15 03:33:23',
'updated_at'=>'2017-10-15 03:33:23'
] );

            

Clasificationcourse::create( [
'id'=>8,
'clasification'=>'Caprinos',
'body'=>NULL,
'slug'=>NULL,
'visible'=>1,
'typecourse_id'=>1,
'created_at'=>'2017-10-15 03:33:32',
'updated_at'=>'2017-10-15 03:33:32'
] );
            }
}
