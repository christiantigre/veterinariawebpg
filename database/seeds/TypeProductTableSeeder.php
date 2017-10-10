<?php

use App\Typeproduct;
use Illuminate\Database\Seeder;

class TypeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

Typeproduct::create( [
'id'=>1,
'typeproduct'=>'Implementos veterinarios',
'is_active'=>1,
'created_at'=>'2017-10-10 06:37:06',
'updated_at'=>'2017-10-10 06:37:06'
] );

			

Typeproduct::create( [
'id'=>2,
'typeproduct'=>'Equipos de Inseminación artificial para bovinos y porcinos',
'is_active'=>1,
'created_at'=>'2017-10-10 06:39:34',
'updated_at'=>'2017-10-10 06:39:34'
] );

			

Typeproduct::create( [
'id'=>3,
'typeproduct'=>'Semen de bovinos y porcinos',
'is_active'=>1,
'created_at'=>'2017-10-10 06:39:49',
'updated_at'=>'2017-10-10 06:39:49'
] );

			


    }
}
