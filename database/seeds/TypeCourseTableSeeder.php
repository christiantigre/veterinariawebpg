<?php

use App\TypeCourse as Typecourse;
use Illuminate\Database\Seeder;

class TypeCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Typecourse::create( [
'id'=>1,
'type'=>'Curso',
'slug'=>NULL,
'is_active'=>1,
'created_at'=>'2017-10-10 06:48:38',
'updated_at'=>'2017-10-10 06:48:38'
] );

			

Typecourse::create( [
'id'=>2,
'type'=>'Seminario',
'slug'=>NULL,
'is_active'=>1,
'created_at'=>'2017-10-10 06:50:20',
'updated_at'=>'2017-10-10 06:50:20'
] );

			

Typecourse::create( [
'id'=>3,
'type'=>'Capacitación',
'slug'=>NULL,
'is_active'=>1,
'created_at'=>'2017-10-10 06:50:26',
'updated_at'=>'2017-10-10 06:50:26'
] );

			

Typecourse::create( [
'id'=>4,
'type'=>'Taller',
'slug'=>NULL,
'is_active'=>1,
'created_at'=>'2017-10-10 06:50:30',
'updated_at'=>'2017-10-10 06:50:30'
] );
    }
}
