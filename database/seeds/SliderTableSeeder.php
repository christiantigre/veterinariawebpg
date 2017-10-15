<?php

use App\Slider;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create( [
'id'=>1,
'img'=>'uploads/slider/catdog.jpg',
'title'=>'Slider 1',
'intro'=>'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto deerew',
'linkinfo'=>NULL,
'created_at'=>'2017-09-27 20:31:58',
'updated_at'=>'2017-09-27 20:50:58'
] );

			

Slider::create( [
'id'=>2,
'img'=>'uploads/slider/granja.jpg',
'title'=>'Slider 2',
'intro'=>'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto deerew',
'linkinfo'=>NULL,
'created_at'=>'2017-09-27 20:32:21',
'updated_at'=>'2017-09-27 20:32:21'
] );

			

Slider::create( [
'id'=>3,
'img'=>'uploads/slider/loro.jpg',
'title'=>'Slider 3',
'intro'=>'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto deerew',
'linkinfo'=>NULL,
'created_at'=>'2017-09-27 20:32:33',
'updated_at'=>'2017-09-27 20:32:33'
] );

			

Slider::create( [
'id'=>4,
'img'=>'uploads/slider/medic.jpg',
'title'=>'Slider 4',
'intro'=>'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto deerew',
'linkinfo'=>NULL,
'created_at'=>'2017-09-27 20:32:44',
'updated_at'=>'2017-09-27 20:32:44'
] );

			

Slider::create( [
'id'=>5,
'img'=>'uploads/slider/varios2.jpg',
'title'=>'Slider 5',
'intro'=>'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto deerew',
'linkinfo'=>NULL,
'created_at'=>'2017-09-27 20:32:58',
'updated_at'=>'2017-09-27 20:32:58'
] );

			

Slider::create( [
'id'=>6,
'img'=>'uploads/slider/variosanimales.jpg',
'title'=>'Slider 6',
'intro'=>'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto deerew',
'linkinfo'=>NULL,
'created_at'=>'2017-09-27 20:33:07',
'updated_at'=>'2017-09-27 20:33:07'
] );

			

Slider::create( [
'id'=>7,
'img'=>'uploads/slider/log.png',
'title'=>'Slider 7',
'intro'=>'https://www.google.es/',
'linkinfo'=>'https://www.google.es/',
'created_at'=>'2017-09-27 20:52:57',
'updated_at'=>'2017-09-27 20:52:57'
] );
    }
}
