<?php

use Illuminate\Database\Seeder;
use App\Veterinary;

class VeterinaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Veterinary::create( [
'id'=>1,
'name'=>'Austrogen',
'address'=>'Calle Bolívar Montero (Barrio San Roque) Biblián – Ecuador',
'tlf1'=>'072231610',
'tlf2'=>'073014693',
'cel1'=>'0993463289',
'cel2'=>'0984271836',
'mail'=>'andrescondo17@gmail.com',
'linkweb'=>'',
'prop'=>'Austrogen',
'gerent'=>'Dr. Manuel Humberto Guachún Yanza',
'area'=>'BIOTECNOLOGÍA  Y SERVICIOS VETERINARIOS “Soluciones técnicas, mejores resultados”',
'description'=>'<p align="justify">Austrogen, Es una Asociaci&oacute;n de Medico Veterinarios encaminados a satisfacer las necesidades del sector agropecuario mediante la implementaci&oacute;n de programas de mejoramiento y mantenimiento de biodiversidad gen&eacute;tica, prevenci&oacute;n de enfermedades implementaci&oacute;n y ejecuci&oacute;n de proyectos agropecuarios, capacitaci&oacute;n e innovaci&oacute;n de tecnolog&iacute;as. Orientados a mantener el bienestar animal, preservando el medio ambiente y dinamizando la producci&oacute;n que garantice el buen vivir.</p>
',
'logo'=>'uploads/logos/fondo-1-final.png',
'namelogo'=>'fondo-1-final.png',
'datestart'=>'2017-01-27',
'ruc'=>'',
'razonsocial'=>'Austrogen',
'fb'=>'https://www.facebook.com/Austrogen/',
'tw'=>'https://twitter.com/Austrogen1?lang=es',
'in'=>'https://www.instagram.com/austrogen.sv/?hl=es',
'yt'=>'https://www.youtube.com/channel/UChbGGIIVpR3jaXM1sljPqfA',
'gg'=>'https://www.youtube.com/channel/UChbGGIIVpR3jaXM1sljPqfA',
'latitud'=>'',
'longitud'=>'',
'mision'=>'<p style="margin-bottom: 0.28cm; line-height: 108%;" align="justify">
   <span style="font-size: medium;">Desarrollar servicios biotecnol&oacute;gicos 
   y soluciones veterinarias de alta calidad para impulsar la sostenibilidad del sector ganadero</span></p>',
'vision'=>'<p style="margin-bottom: 0.28cm; line-height: 108%;" align="justify"><span style="font-size: medium;">
   Ser l&iacute;der en brindar en servicios biotecnol&oacute;gicos en la regi&oacute;n, de manera eficaz
    y oportuna, en conjunto con las organizaciones p&uacute;blicas y privadas.</span></p>\r\n
    <p style="margin-bottom: 0.28cm; line-height: 108%;" align="justify">
    <span style="font-size: medium;">Valores</span></p>\r\n<ol>\r\n
    <li style="margin-bottom: 0.28cm; line-height: 108%;">
    <span style="font-size: medium;">Responsabilidad</span>
    </li>\r\n<li style="margin-bottom: 0.28cm; line-height: 108%;">
    <span style="font-size: medium;">Honestidad</span></li>\r\n
    <li style="margin-bottom: 0.28cm; line-height: 108%;"><span style="font-size: medium;">Compromiso</span></li>
    \r\n<li style="margin-bottom: 0.28cm; line-height: 108%;"><span style="font-size: medium;">Inclusivo</span></li>\r\n</ol>',
'fax'=>NULL,
'created_at'=>'2017-10-10 11:22:53',
'updated_at'=>'2017-10-15 04:58:21'
] );
    }
}
