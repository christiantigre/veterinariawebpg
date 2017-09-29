<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

Gallery::create( [
'id'=>1,
'title'=>'Esterilización',
'content'=>'city',
'img'=>'uploads/galery/aseo.jpg',
'link'=>NULL,
'visible'=>1,
'category_id'=>8,
'created_at'=>'2017-09-29 19:10:43',
'updated_at'=>'2017-09-29 21:39:10'
] );

			

Gallery::create( [
'id'=>2,
'title'=>'Evento de Adopcion canica',
'content'=>'nature',
'img'=>'uploads/galery/perros-en-adopcion-02.jpg',
'link'=>NULL,
'visible'=>1,
'category_id'=>10,
'created_at'=>'2017-09-29 19:11:41',
'updated_at'=>'2017-09-29 21:39:17'
] );

			

Gallery::create( [
'id'=>3,
'title'=>'Medicación',
'content'=>'food',
'img'=>'uploads/galery/medicacion.jpeg',
'link'=>NULL,
'visible'=>1,
'category_id'=>9,
'created_at'=>'2017-09-29 19:14:01',
'updated_at'=>'2017-09-29 21:39:27'
] );

			

Gallery::create( [
'id'=>4,
'title'=>'Aseo mascotas',
'content'=>NULL,
'img'=>'uploads/galery/aseo.jpg',
'link'=>NULL,
'visible'=>1,
'category_id'=>8,
'created_at'=>'2017-09-29 19:14:29',
'updated_at'=>'2017-09-29 21:01:13'
] );

			

Gallery::create( [
'id'=>5,
'title'=>'Peluqueria',
'content'=>NULL,
'img'=>'uploads/galery/peluqueria-canina-spa-canino_1.png',
'link'=>NULL,
'visible'=>1,
'category_id'=>4,
'created_at'=>'2017-09-29 19:14:55',
'updated_at'=>'2017-09-29 20:33:35'
] );

			

Gallery::create( [
'id'=>6,
'title'=>'Atencion Domicilio',
'content'=>NULL,
'img'=>'uploads/galery/atencion.jpeg',
'link'=>NULL,
'visible'=>1,
'category_id'=>7,
'created_at'=>'2017-09-29 19:16:27',
'updated_at'=>'2017-09-29 21:01:21'
] );

			

Gallery::create( [
'id'=>7,
'title'=>'Hospitalización',
'content'=>NULL,
'img'=>'uploads/galery/hospitalizacion.jpg',
'link'=>NULL,
'visible'=>1,
'category_id'=>11,
'created_at'=>'2017-09-29 19:17:03',
'updated_at'=>'2017-09-29 21:01:31'
] );

			

Gallery::create( [
'id'=>8,
'title'=>'people 2',
'content'=>'datos de prueba',
'img'=>'uploads/galery/aseo.jpg',
'link'=>NULL,
'visible'=>1,
'category_id'=>11,
'created_at'=>'2017-09-29 22:11:34',
'updated_at'=>'2017-09-29 22:11:34'
] );

			

Gallery::create( [
'id'=>9,
'title'=>'Visita a domicilio',
'content'=>'test food',
'img'=>'uploads/galery/peluqueria-canina-spa-canino_1.png',
'link'=>NULL,
'visible'=>1,
'category_id'=>9,
'created_at'=>'2017-09-29 22:12:25',
'updated_at'=>'2017-09-29 22:12:25'
] );

			


    }
}
