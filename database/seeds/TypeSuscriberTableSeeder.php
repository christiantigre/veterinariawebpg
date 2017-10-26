<?php

use Illuminate\Database\Seeder;
use App\Typesuscription;

class TypeSuscriberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Typesuscription::create( [
'id'=>1,
'tipo'=>'Solicitando cupo',
'estado'=>1,
'created_at'=>'2017-10-24 23:33:10',
'updated_at'=>'2017-10-24 23:33:10'
] );

			

Typesuscription::create( [
'id'=>2,
'tipo'=>'Aprobado',
'estado'=>1,
'created_at'=>'2017-10-24 23:33:28',
'updated_at'=>'2017-10-24 23:33:28'
] );

Typesuscription::create( [
'id'=>3,
'tipo'=>'Finalizado',
'estado'=>1,
'created_at'=>'2017-10-24 23:33:28',
'updated_at'=>'2017-10-24 23:33:28'
] );

    }
}
