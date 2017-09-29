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
		'visible'=>1,
		'created_at'=>'2017-09-28 21:53:09',
		'updated_at'=>'2017-09-28 21:53:09'
	] );

			

	Category::create( [
		'id'=>2,
		'category'=>'Entretenimiento',
		'description'=>NULL,
		'visible'=>1,
		'created_at'=>'2017-09-28 21:53:14',
		'updated_at'=>'2017-09-28 21:53:14'
	] );

			

	Category::create( [
		'id'=>3,
		'category'=>'Fotografía',
		'description'=>NULL,
		'visible'=>1,
		'created_at'=>'2017-09-28 21:53:19',
		'updated_at'=>'2017-09-28 21:53:19'
	] );

			

	Category::create( [
		'id'=>4,
		'category'=>'Mascotas',
		'description'=>NULL,
		'visible'=>1,
		'created_at'=>'2017-09-28 21:53:27',
		'updated_at'=>'2017-09-28 21:53:27'
	] );

			

	Category::create( [
		'id'=>5,
		'category'=>'Medicina',
		'description'=>NULL,
		'visible'=>1,
		'created_at'=>'2017-09-28 21:53:34',
		'updated_at'=>'2017-09-28 21:53:34'
	] );

			

	Category::create( [
		'id'=>6,
		'category'=>'Nutrición',
		'description'=>NULL,
		'visible'=>1,
		'created_at'=>'2017-09-28 21:53:40',
		'updated_at'=>'2017-09-28 21:53:40'
	] );


    }
}
