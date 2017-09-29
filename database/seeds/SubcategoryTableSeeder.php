<?php

use Illuminate\Database\Seeder;
use App\Subcategory;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

Subcategory::create( [
'id'=>1,
'subcategory'=>'Caninos',
'content'=>NULL,
'visible'=>1,
'category_id'=>2,
'created_at'=>'2017-09-28 22:56:43',
'updated_at'=>'2017-09-28 23:39:11'
] );

			

Subcategory::create( [
'id'=>2,
'subcategory'=>'gatos',
'content'=>NULL,
'visible'=>1,
'category_id'=>6,
'created_at'=>'2017-09-29 00:20:49',
'updated_at'=>'2017-09-29 00:20:49'
] );

			


    }
}
