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
'img'=>'uploads/slider/fondo-1-final.png',
'title'=>'Nuestra Empresa',
'subtittle'=>'Nuestra empresa',
'intro'=>'Biotecnología y servicios veterinarios. \r\n"soluciones técnicas mejores resultados".',
'body'=>'<p style="margin-bottom: 0.28cm; line-height: 108%;" align="justify"><span style="color: #222222;">
   <span style="background: #ffffff;">Austrogen, Es una Asociaci&oacute;n de Medico Veterinarios encaminados 
   a satisfacer las necesidades del sector agropecuario mediante la implementaci&oacute;n de programas de 
   mejoramiento y mantenimiento de biodiversidad gen&eacute;tica, prevenci&oacute;n de enfermedades 
   implementaci&oacute;n y ejecuci&oacute;n de proyectos agropecuarios, capacitaci&oacute;n e innovaci&oacute;n 
   de tecnolog&iacute;as. Orientados a mantener el bienestar animal, preservando el medio ambiente y dinamizando 
   la producci&oacute;n que garantice el buen vivir</span></span></p>',
'linkinfo'=>'http://localhost:8000/courses',
'visible_slider'=>1,
'activo'=>1,
'created_at'=>'2017-09-28 01:31:58',
'updated_at'=>'2017-10-15 04:38:29'
] );

            

Slider::create( [
'id'=>2,
'img'=>'uploads/slider/slider1.jpg',
'title'=>'Cursos',
'subtittle'=>'Curso de inseminisacion Artificial',
'intro'=>'Inseminación artificial en bovinos.',
'body'=>'<p>Capacitaci&oacute;nes t&eacute;cnicas continuas impulsando el desarrollo del sector ganadero mediante el mejoramiento 
   genetico atravez de la inseminicacion artificial.</p>',
'linkinfo'=>'',
'visible_slider'=>1,
'activo'=>1,
'created_at'=>'2017-09-28 01:32:21',
'updated_at'=>'2017-10-15 04:42:12'
] );

            

Slider::create( [
'id'=>3,
'img'=>'uploads/slider/sldier3.jpg',
'title'=>'Equipo de trabajo',
'subtittle'=>'',
'intro'=>'Personal Técnico especializados en las diferentes áreas de veterinaria.',
'body'=>'<p>Personal T&eacute;cnico especializados en las diferentes &aacute;reas de veterinaria.</p>',
'linkinfo'=>'http://localhost:8000/DetallCourses/1',
'visible_slider'=>1,
'activo'=>1,
'created_at'=>'2017-09-28 01:32:33',
'updated_at'=>'2017-10-15 04:47:30'
] );

            

Slider::create( [
'id'=>4,
'img'=>'uploads/slider/ventasSemenPorcino.jpg',
'title'=>'Semen Porcino',
'subtittle'=>'',
'intro'=>'Realizamos la venta de semen porcino.',
'body'=>'<p>Realizamos la venta de semen porcino e Inseminicacion Artificial.</p>',
'linkinfo'=>'',
'visible_slider'=>1,
'activo'=>1,
'created_at'=>'2017-10-15 04:50:24',
'updated_at'=>'2017-10-15 04:55:56'
] );
    }
}
