<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    Category::create( [
'id'=>1,
'category'=>'Eventos',
'description'=>NULL,
'visible'=>0,
'created_at'=>'2017-09-29 02:53:09',
'updated_at'=>'2017-09-29 20:53:14'
] );

			

Category::create( [
'id'=>2,
'category'=>'Entretenimiento',
'description'=>NULL,
'visible'=>0,
'created_at'=>'2017-09-29 02:53:14',
'updated_at'=>'2017-09-29 20:53:18'
] );

			

Category::create( [
'id'=>3,
'category'=>'Fotografía',
'description'=>NULL,
'visible'=>0,
'created_at'=>'2017-09-29 02:53:19',
'updated_at'=>'2017-09-29 20:53:22'
] );

			

Category::create( [
'id'=>4,
'category'=>'Mascotas',
'description'=>NULL,
'visible'=>0,
'created_at'=>'2017-09-29 02:53:27',
'updated_at'=>'2017-09-29 20:53:27'
] );

			

Category::create( [
'id'=>5,
'category'=>'Medicina',
'description'=>NULL,
'visible'=>0,
'created_at'=>'2017-09-29 02:53:34',
'updated_at'=>'2017-09-29 20:53:33'
] );

			

Category::create( [
'id'=>6,
'category'=>'Nutrición',
'description'=>NULL,
'visible'=>0,
'created_at'=>'2017-09-29 02:53:40',
'updated_at'=>'2017-09-29 20:53:39'
] );

			

Category::create( [
'id'=>7,
'category'=>'city',
'description'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-29 20:52:30',
'updated_at'=>'2017-09-29 20:52:30'
] );

			

Category::create( [
'id'=>8,
'category'=>'nature',
'description'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-29 20:52:37',
'updated_at'=>'2017-09-29 20:52:37'
] );

			

Category::create( [
'id'=>9,
'category'=>'food',
'description'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-29 20:52:44',
'updated_at'=>'2017-09-29 20:52:44'
] );

			

Category::create( [
'id'=>10,
'category'=>'sports',
'description'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-29 20:52:50',
'updated_at'=>'2017-09-29 20:53:07'
] );

			

Category::create( [
'id'=>11,
'category'=>'people',
'description'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-29 20:53:00',
'updated_at'=>'2017-09-29 20:53:00'
] );


    }
}
