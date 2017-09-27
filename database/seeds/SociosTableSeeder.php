<?php

use Illuminate\Database\Seeder;
use App\Socio;

class SociosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

Socio::create( [
'id'=>1,
'img'=>'uploads/socios/soc1.jpeg',
'description'=>'Medico veterinario especializado en la Univercidad de Cliveland - California. 2025- 2016',
'name'=>'Fulano',
'lastname'=>'Mengano',
'fb'=>'facebook',
'tw'=>'twitter',
'in'=>'Instagram',
'gg'=>'google plus',
'lk'=>'liked In',
'especialitation'=>'Medicina veterinaria',
'blog'=>NULL,
'workplacelink'=>'#',
'workplace'=>'ClinicaBiblian',
'created_at'=>'2017-09-27 23:57:42',
'updated_at'=>'2017-09-28 02:00:45'
] );

			

Socio::create( [
'id'=>2,
'img'=>'uploads/socios/soc2.jpeg',
'description'=>'Medico veterinario especializado en la Univercidad de Cliveland - California. 2025- 2016',
'name'=>'Fulano 2',
'lastname'=>'Mengano 2',
'fb'=>'#',
'tw'=>'#',
'in'=>'#',
'gg'=>'#',
'lk'=>'#',
'especialitation'=>'Medicina veterinaria',
'blog'=>NULL,
'workplacelink'=>'#',
'workplace'=>'ClinicaBiblian',
'created_at'=>'2017-09-27 23:59:13',
'updated_at'=>'2017-09-27 23:59:13'
] );

			

Socio::create( [
'id'=>3,
'img'=>'uploads/socios/soc3.jpeg',
'description'=>'Medico veterinario especializado en la Univercidad de Cliveland - California. 2025- 2016',
'name'=>'Fulano 3',
'lastname'=>'Mengano 3',
'fb'=>'#',
'tw'=>'#',
'in'=>'#',
'gg'=>'#',
'lk'=>'#',
'especialitation'=>'Medicina veterinaria',
'blog'=>NULL,
'workplacelink'=>'#',
'workplace'=>'ClinicaBiblian',
'created_at'=>'2017-09-27 23:59:51',
'updated_at'=>'2017-09-27 23:59:51'
] );

			

Socio::create( [
'id'=>4,
'img'=>'uploads/socios/soc4.png',
'description'=>'Medico veterinario especializado en la Univercidad de Cliveland - California. 2025- 2016',
'name'=>'Fulano 4',
'lastname'=>'Mengano 4',
'fb'=>'#',
'tw'=>'#',
'in'=>'#',
'gg'=>'#',
'lk'=>'#',
'especialitation'=>'Medicina veterinaria',
'blog'=>NULL,
'workplacelink'=>'#',
'workplace'=>'ClinicaBiblian',
'created_at'=>'2017-09-28 00:00:27',
'updated_at'=>'2017-09-28 00:00:27'
] );

			

Socio::create( [
'id'=>5,
'img'=>'uploads/socios/soc5.jpg',
'description'=>'Medico veterinario especializado en la Univercidad de Cliveland - California. 2025- 2016',
'name'=>'Fulano 5',
'lastname'=>'Mengano 5',
'fb'=>'#',
'tw'=>'#',
'in'=>'#',
'gg'=>'#',
'lk'=>'#',
'especialitation'=>'Medicina veterinaria',
'blog'=>NULL,
'workplacelink'=>'#',
'workplace'=>'ClinicaBiblian',
'created_at'=>'2017-09-28 00:00:55',
'updated_at'=>'2017-09-28 00:00:55'
] );

			


    }
}
