<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        



Gallery::create( [
'id'=>1,
'title'=>'Insiminisación bovinos.',
'intro'=>'Curso de Inseminación artificial',
'content'=>'<p>Aenean vitae pretium ligula. Nulla ultrices odio non sapien tincidunt, 
   sed viverra diam commodo. Morbi malesuada massa viverra, vestibulum est in, 
   molestie purus. Ut auctor maximus augue, quis sodales eros cursus nec. 
   Sed a vulputate magna. Cras id erat est. Nunc molestie purus porttitor dolor sagittis porttitor. 
   Donec mollis rhoncus fringilla. Quisque imperdiet pulvinar posuere. 
   Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
   per inceptos himenaeos. Pellentesque risus ex, consequat vel ipsum sed, vehicula luctus metus.
   </p>\r\n<p><img src="/photos/shares/20170322_092533.jpg" alt="imagen" width="150" height="150" /> 
   <img src="/photos/shares/20170323_094728.jpg" alt="imagen 2" width="150" height="150" /></p>',
'img'=>'uploads/galery/20170322_092512.jpg',
'link'=>NULL,
'visible'=>1,
'category_id'=>11,
'created_at'=>'2017-10-15 03:52:11',
'updated_at'=>'2017-10-15 03:54:40'
] );


			



			


    }
}
