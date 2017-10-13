<?php

use Illuminate\Database\Seeder;
use App\SectionTitle as Sectiontitle;

class TitleSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

Sectiontitle::create( [
'id'=>1,
'section'=>'slider',
'title'=>'ESTAMOS PARA AYUDARTE CON NUESTROS SERVICIOS PROFESIONALES GARANTIZANDO TU COMODIDAD',
'subtitle'=>NULL,
'color'=>NULL,
'visible'=>1,
'created_at'=>'2017-10-13 20:40:24',
'updated_at'=>'2017-10-13 22:05:09'
] );

			

Sectiontitle::create( [
'id'=>2,
'section'=>'cursos carrusel',
'title'=>'Nuestros cursos son muy reconocidos en el mercado nacional por nuestro profesionalismo',
'subtitle'=>'Los cursos mas destacados y novedosos te los mostramos en este sitio web',
'color'=>NULL,
'visible'=>1,
'created_at'=>'2017-10-13 20:43:24',
'updated_at'=>'2017-10-13 20:58:26'
] );

			

Sectiontitle::create( [
'id'=>3,
'section'=>'notas',
'title'=>'ALGUNOS TEMAS NOVEDOSOS DE LA ACTUALIDAD QUE TE PUEDEN INTERESAR',
'subtitle'=>'Temas de salud y cuidado de mi mascota y ganaderia',
'color'=>NULL,
'visible'=>1,
'created_at'=>'2017-10-13 20:48:24',
'updated_at'=>'2017-10-13 22:12:32'
] );

			

Sectiontitle::create( [
'id'=>4,
'section'=>'noticias',
'title'=>'MANTENTE ACTUALIZADO DE NUESTROS EVENTOS, CURSOS, SEMINARIOS, CAPACITACIONES Y MUCHAS NOVEDADES MAS',
'subtitle'=>NULL,
'color'=>NULL,
'visible'=>1,
'created_at'=>'2017-10-13 20:53:29',
'updated_at'=>'2017-10-13 20:53:29'
] );

			

Sectiontitle::create( [
'id'=>5,
'section'=>'galeria',
'title'=>'

RECOPILACIÓN DE FOTOGRAFÍAS DE NUESTROS EVENTOS, EQUIPOS, MASCOTAS Y NOVEDADES.
',
'subtitle'=>'

texto de prueba
',
'color'=>NULL,
'visible'=>1,
'created_at'=>'2017-10-13 20:54:47',
'updated_at'=>'2017-10-13 22:20:37'
] );


			

Sectiontitle::create( [
'id'=>6,
'section'=>'equipo',
'title'=>'EL MEJOR EQUIPO HUMANO A SU SERVICIO',
'subtitle'=>'Tenemos una convicción firme de que nuestro equipo debe de tener experiencia, ambición, y un afán increíble por la medicina veterinaria en pos de darle el mejor diagnóstico posible a su mascota. A continuación puede leer un poco acerca de nuestro grupo de trabajo.',
'color'=>NULL,
'visible'=>1,
'created_at'=>'2017-10-13 20:57:26',
'updated_at'=>'2017-10-13 20:57:26'
] );

			

Sectiontitle::create( [
'id'=>7,
'section'=>'pagina cursos',
'title'=>'ELIJE TU CURSO',
'subtitle'=>NULL,
'color'=>NULL,
'visible'=>1,
'created_at'=>'2017-10-13 20:59:26',
'updated_at'=>'2017-10-13 20:59:26'
] );

			

Sectiontitle::create( [
'id'=>8,
'section'=>'contacto',
'title'=>'Agradecemos tu visita',
'subtitle'=>'Nos gustaría saber sobre tus dudas o sugerencias. gracias por visitarnos..',
'color'=>NULL,
'visible'=>1,
'created_at'=>'2017-10-13 21:00:47',
'updated_at'=>'2017-10-13 21:00:47'
] );

			


    }
}
