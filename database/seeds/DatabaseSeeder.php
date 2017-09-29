<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(MenusTableSeeder::class);
         $this->call(VeterinaryTableSeeder::class);
         $this->call(AdminTableSeeder::class);
         $this->call(SliderTableSeeder::class);
         $this->call(CardTableSeeder::class);
         $this->call(SociosTableSeeder::class);
         $this->call(NotasTableSeeder::class);
         $this->call(NoticeTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(SubcategoryTableSeeder::class);
    }
}
