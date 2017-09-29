<?php

use App\Notice;
use Illuminate\Database\Seeder;

class NoticeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notice::create( [
'id'=>1,
'title'=>'Evento de Adopcion canica',
'content'=>'El evento se realizará en el parque de la madres. no olvides traer tus documentos personales.',
'link'=>'odopta.com',
'img'=>'uploads/notices/perros-en-adopcion-02.jpg',
'day'=>'30',
'month'=>'September',
'compfb'=>NULL,
'comptw'=>NULL,
'compgg'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-28 19:00:29',
'updated_at'=>'2017-09-28 19:00:29'
] );

			

Notice::create( [
'id'=>2,
'title'=>'Esterilización',
'content'=>'Evento de esterilización a mascotas en general gratuita.',
'link'=>'esterilizar.ec',
'img'=>'uploads/notices/esteriliza.png',
'day'=>'31',
'month'=>'September',
'compfb'=>NULL,
'comptw'=>NULL,
'compgg'=>NULL,
'visible'=>1,
'created_at'=>'2017-09-28 19:02:16',
'updated_at'=>'2017-09-28 19:02:16'
] );

    }
}
