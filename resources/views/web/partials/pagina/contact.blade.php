@extends('web.index')
@section('content')
  <div class="container " style="background: #ffffff;">
    <div class="row">
      <div class="col-md-12">
    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
          @foreach($veterinary as $veterinari)
    <h2>   Contacto {{ $veterinari->name }}  </h2>
    @endforeach
    <div class="row espacio" style="background: #ffffff;">
      <div class="col-md-6" style="background: #ffffff;">
        <div class="infoform" style="background: #ffffff;">
         <div class="mbottom" style="background: #ffffff;">

          @if(count($secciones)>0)
            @foreach($secciones as $sec)
        @if(($sec->section)=='contacto')
          <h2>   {!! $sec->title !!}  </h2>
          
          <p>  {!! $sec->subtitle !!}  </p>
            @endif
        @endforeach
        @else
        No configurado
          @endif
        </div>
        
        {!! Form::open(['url' => '/contact', 'class' => 'form-horizontal', 'files' => true]) !!}
                        {{ csrf_field() }}
          <div class="form-group">
         <div class="row">
          <div class="col-md-6">
           <input type="text" class="form-control input-lg" placeholder="Nombre" required="" name="name" id="name" value="">
         </div>
         <div class="col-md-6">
           <input type="text" class="form-control input-lg" placeholder="Teléfono" required="" name="phone" id="phone" value="">
         </div>
       </div>
     </div><div class="form-group">
       <div class="row">
        <div class="col-md-6">
         <input type="email" name="mail" placeholder="Correo electrónico" required="" class="form-control input-lg" id="mail" value="">
       </div>
       <div class="col-md-6">
         <input type="text" name="subject" placeholder="Asunto" required="" class="form-control input-lg" id="tel" value="">
       </div>
     </div>
   </div><div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <textarea name="message" class="form-control" rows="8" cols="80" placeholder="El contenido de tu mensaje será:"></textarea>
      </div>
    </div>
  </div>
  <!--<input type="submit" name="enviar" value="Enviar" class="btn btn-success btn-lg">-->
  <div class="animat-button">
           <button class="hoverable-css" name="enviar" ><span class="anim"></span>ENVIAR</button>
       </div>
       
 {!! Form::close() !!}
</div>
</div>
<div class="col-md-1 text-center aralik1 hidden-xs" style="background: #ffffff;">
  <!--<img class="img-responsive" src="http://erkankaratas.com.tr/wp-content/themes/drerkan/resimler/aralik1.png" alt="">-->
</div>
<div class="col-md-5 iletisimbilgi" style="background: #ffffff;">
  <h2>   Encuentranos   </h2>
  @foreach($veterinary as $veterinari)
  <table class="mtop">
    <tbody><tr>
      <td><strong>    Dirección :      </strong></td>
        <td> {{ $veterinari->address }}.
      </td>
    </tr>
    <tr>
      <td><strong>   Teléfono :    </strong></td>
      <td>+{{ $veterinari->tlf1 }}<br>+{{ $veterinari->tlf1 }}<br>+{{ $veterinari->cel1 }}<br>+{{ $veterinari->tlf2 }}</td>
    </tr>
    <tr>
      <td><strong>E-Mail: </strong></td>
      <td>{{ $veterinari->mail }}<br>{{ $veterinari->name }}</td>
    </tr>    
    <tr>
      <td><strong>Fax: </strong></td>
      <td>+{{ $veterinari->fax }}</td>
    </tr>
  </tbody>
</table>
@endforeach
</div>
</div>
</div>
</div>
</div>
<!--<div class="container-fluid">
  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d127514.27370095742!2d-78.95987267870962!3d-2.8679573954641517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m5!1s0x91cd1814f5dd2e37%3A0x24d0538029abc941!2sPelucan%2C+Juan+Jaramillo+4-22+y+Vargas+Machuca+(sector+Universidad+Catolica)%2C+Juan+Jaramillo+4-22%2C+Vargas+Machuca%2C+Cuenca!3m2!1d-2.90084!2d-79.00067299999999!4m3!3m2!1d-2.8550914!2d-78.778645!5e0!3m2!1ses!2sec!4v1506739690977" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d799145.858158566!2d37.63311325804977!3d38.51847076974884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407636bd3c77fee3%3A0xb4f07b511f605ac1!2sMalatya!5e0!3m2!1str!2str!4v1480479127130" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>-->
 <!-- </div>
</div>-->
@stop