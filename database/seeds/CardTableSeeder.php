<?php
use App\Card;
use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::create( [
'id'=>1,
'title'=>'Peluqueria',
'paragraph'=>'Realizamos el corte de lana de tus mascotas al estilo que tu quieras.',
'subtitle'=>'Estilo canino',
'subtitle2'=>'Medicación para tus mascotas. Esterilización Medicación para tus mascotas, esterilización',
'subtitle3'=>'Los cortes de la actualidad',
'linkcard'=>NULL,
'img'=>NULL,
'created_at'=>'2017-09-27 22:20:48',
'updated_at'=>'2017-09-27 23:10:32'
] );

			

Card::create( [
'id'=>2,
'title'=>'Medicación',
'paragraph'=>'Medicación para tus mascotas.',
'subtitle'=>'Salud',
'subtitle2'=>'Medicación para tus mascotas. Esterilización Medicación para tus mascotas, esterilización',
'subtitle3'=>'Medicación para tus mascotas.',
'linkcard'=>NULL,
'img'=>NULL,
'created_at'=>'2017-09-27 22:21:40',
'updated_at'=>'2017-09-27 23:10:24'
] );

			

Card::create( [
'id'=>3,
'title'=>'Esterilización',
'paragraph'=>'Realizamos la esterilización de toda mascota',
'subtitle'=>'Esterilización',
'subtitle2'=>'Medicación para tus mascotas. Esterilización Medicación para tus mascotas, esterilización',
'subtitle3'=>NULL,
'linkcard'=>NULL,
'img'=>NULL,
'created_at'=>'2017-09-27 22:22:20',
'updated_at'=>'2017-09-27 22:57:30'
] );

    }
}
