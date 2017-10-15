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
    		'category'=>'Sanidad animal',
    		'description'=>NULL,
    		'visible'=>0,
    		'created_at'=>'2017-09-29 12:53:09',
    		'updated_at'=>'2017-10-15 06:32:45'
    	] );

    	

    	Category::create( [
    		'id'=>2,
    		'category'=>'Entretenimiento',
    		'description'=>NULL,
    		'visible'=>0,
    		'created_at'=>'2017-09-29 12:53:14',
    		'updated_at'=>'2017-09-30 06:53:18'
    	] );

    	

    	Category::create( [
    		'id'=>3,
    		'category'=>'Fotografía',
    		'description'=>NULL,
    		'visible'=>0,
    		'created_at'=>'2017-09-29 12:53:19',
    		'updated_at'=>'2017-09-30 06:53:22'
    	] );

    	

    	Category::create( [
    		'id'=>4,
    		'category'=>'Reproducción animal',
    		'description'=>NULL,
    		'visible'=>1,
    		'created_at'=>'2017-09-29 12:53:27',
    		'updated_at'=>'2017-10-15 05:53:40'
    	] );

    	

    	Category::create( [
    		'id'=>5,
    		'category'=>'Medicina',
    		'description'=>NULL,
    		'visible'=>0,
    		'created_at'=>'2017-09-29 12:53:34',
    		'updated_at'=>'2017-09-30 06:53:33'
    	] );

    	

    	Category::create( [
    		'id'=>6,
    		'category'=>'Nutrición',
    		'description'=>NULL,
    		'visible'=>0,
    		'created_at'=>'2017-09-29 12:53:40',
    		'updated_at'=>'2017-09-30 06:53:39'
    	] );

    	

    	Category::create( [
    		'id'=>7,
    		'category'=>'Equipos de trabajo',
    		'description'=>NULL,
    		'visible'=>1,
    		'created_at'=>'2017-09-30 06:52:30',
    		'updated_at'=>'2017-10-15 05:55:17'
    	] );

    	

    	Category::create( [
    		'id'=>8,
    		'category'=>'Medicina',
    		'description'=>NULL,
    		'visible'=>1,
    		'created_at'=>'2017-09-30 06:52:37',
    		'updated_at'=>'2017-10-14 00:49:35'
    	] );

    	

    	Category::create( [
    		'id'=>9,
    		'category'=>'Mascotas',
    		'description'=>NULL,
    		'visible'=>0,
    		'created_at'=>'2017-09-30 06:52:44',
    		'updated_at'=>'2017-10-15 06:33:01'
    	] );

    	

    	Category::create( [
    		'id'=>10,
    		'category'=>'Eventos',
    		'description'=>NULL,
    		'visible'=>1,
    		'created_at'=>'2017-09-30 06:52:50',
    		'updated_at'=>'2017-10-14 00:49:17'
    	] );

    	

    	Category::create( [
    		'id'=>11,
    		'category'=>'Cursos',
    		'description'=>NULL,
    		'visible'=>1,
    		'created_at'=>'2017-09-30 06:53:00',
    		'updated_at'=>'2017-10-14 00:49:08'
    	] );

    	

    	Category::create( [
    		'id'=>12,
    		'category'=>'Ventas',
    		'description'=>NULL,
    		'visible'=>1,
    		'created_at'=>'2017-10-15 05:51:33',
    		'updated_at'=>'2017-10-15 05:51:33'
    	] );

    	

    	Category::create( [
    		'id'=>13,
    		'category'=>'Acesoría técnica',
    		'description'=>NULL,
    		'visible'=>1,
    		'created_at'=>'2017-10-15 05:54:33',
    		'updated_at'=>'2017-10-15 05:54:33'
    	] );

    	

    	Category::create( [
    		'id'=>14,
    		'category'=>'Varios',
    		'description'=>NULL,
    		'visible'=>1,
    		'created_at'=>'2017-10-15 05:55:43',
    		'updated_at'=>'2017-10-15 05:55:43'
    	] );

    }
}
