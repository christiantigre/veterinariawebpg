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
         $this->call(GenderTableSeeder::class);
         $this->call(CountryTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(SubcategoryTableSeeder::class);
         $this->call(VeterinaryTableSeeder::class);
         $this->call(AdminTableSeeder::class);
         $this->call(SliderTableSeeder::class);
         $this->call(CardTableSeeder::class);
         $this->call(SociosTableSeeder::class);
         $this->call(TagTableSeeder::class);
         $this->call(NotasTableSeeder::class);
         $this->call(NoticeTableSeeder::class);
         $this->call(GalleryTableSeeder::class);
         $this->call(ServiceTableSeeder::class);
         $this->call(TypeProductTableSeeder::class);
         $this->call(TypeCourseTableSeeder::class);
         $this->call(ClasesTableSeeder::class);
         $this->call(TitleSectionsTableSeeder::class);
         $this->call(TypeSuscriberTableSeeder::class);
    }
}
