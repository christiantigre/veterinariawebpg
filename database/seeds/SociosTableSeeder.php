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
'img'=>'uploads/socios/SocioManuelGuachun.jpg',
'description'=>'<p>Medico Veterinario y zootecnista especialista en reproducci&oacute;n porcina. Master en reproducci&oacute;n animal. se pueden contactar al correo electr&oacute;nico <a href="mailto:manuelhgy@gmail.com">manuelhgy@gmail.com</a> contactos 0993463289 domicilio 3014693</p>',
'abrevTitulo'=>'Mg.Sc. Mvz',
'name'=>'Manuel Humberto',
'lastname'=>'Guachún Yanza',
'fb'=>'https://www.facebook.com/manuelhumberto.guachunyanza',
'tw'=>NULL,
'in'=>NULL,
'gg'=>NULL,
'lk'=>NULL,
'especialitation'=>'Especialista en reproducción porcina',
'blog'=>NULL,
'workplacelink'=>NULL,
'workplace'=>'MG-Genética',
'is_active'=>1,
'created_at'=>'2017-09-28 05:00:55',
'updated_at'=>'2017-10-15 05:34:21'
] );

            

Socio::create( [
'id'=>2,
'img'=>'uploads/socios/22522191_10210369867752130_797641926_o.jpg',
'description'=>'<p>Medico Veterinario y Zootecnista. Magister en reproducci&oacute;n animal y especialista en sanidad animal. para contactos por correo <a href="mailto:matianmg777@hotmail.com">matianmg777@hotmail.com</a> y a los numeros de celular 0984271836.</p>',
'abrevTitulo'=>'Mvz.Mg.Sc.',
'name'=>'Segundo Matias',
'lastname'=>'Mainato Guamán',
'fb'=>'https://www.facebook.com/profile.php?id=1505743735',
'tw'=>'https://twitter.com/matiasmainatog',
'in'=>'https://www.instagram.com/mathias_mainato/',
'gg'=>NULL,
'lk'=>'https://www.linkedin.com/in/segundo-matias-mainato-guam%C3%A1n-a8699912a',
'especialitation'=>'Especialista en sanidad animal',
'blog'=>NULL,
'workplacelink'=>NULL,
'workplace'=>'Austrogen',
'is_active'=>1,
'created_at'=>'2017-10-15 05:23:41',
'updated_at'=>'2017-10-15 05:39:33'
] );

            

Socio::create( [
'id'=>3,
'img'=>'uploads/socios/victorlema.jpg',
'description'=>'<p>Medico Veterinario y Zootecnista. Magister en reproducci&oacute;n animal y&nbsp;especializado en&nbsp;cirug&iacute;a e ecograf&iacute;a para contactos por correo vicole_1020@yahoo.com y&nbsp;a los n&uacute;meros de celular <span class="_5yl5">0998360974 y domicilio 2232134</span>.</p>\r\n<p><span class="_5yl5">Domicilio Cant&oacute;n Bibli&aacute;n<br /></span></p>',
'abrevTitulo'=>'Mvz.Mg.Sc.',
'name'=>'Victor Manuel',
'lastname'=>'Lema Guaman',
'fb'=>'https://www.facebook.com/victor.lemaguaman',
'tw'=>NULL,
'in'=>NULL,
'gg'=>NULL,
'lk'=>NULL,
'especialitation'=>'Especialista en Cirugía y Ecografia',
'blog'=>NULL,
'workplacelink'=>NULL,
'workplace'=>'Austrogen',
'is_active'=>1,
'created_at'=>'2017-10-15 05:44:44',
'updated_at'=>'2017-10-15 05:49:59'
] );

            



			


    }
}
