<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create( [
'id'=>1,
'tag'=>'Salud',
'description'=>'description',
'visible'=>1,
'created_at'=>'2017-09-30 04:03:31',
'updated_at'=>'2017-09-30 04:05:58'
] );

			

Tag::create( [
'id'=>2,
'tag'=>'Medicaion',
'description'=>'description',
'visible'=>1,
'created_at'=>'2017-09-30 04:03:43',
'updated_at'=>'2017-09-30 04:05:51'
] );

			

Tag::create( [
'id'=>3,
'tag'=>'Peluqueria',
'description'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-30 04:04:17',
'updated_at'=>'2017-09-30 04:04:17'
] );

			

Tag::create( [
'id'=>4,
'tag'=>'Fotografia',
'description'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-30 04:06:07',
'updated_at'=>'2017-09-30 04:06:07'
] );

			

Tag::create( [
'id'=>5,
'tag'=>'Tips',
'description'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-30 04:06:12',
'updated_at'=>'2017-09-30 04:06:12'
] );

			

Tag::create( [
'id'=>6,
'tag'=>'Novedades',
'description'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-30 04:06:17',
'updated_at'=>'2017-09-30 04:06:17'
] );
    }
}
