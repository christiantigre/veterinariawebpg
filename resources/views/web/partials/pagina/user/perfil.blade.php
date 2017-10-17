@extends('web.index')
@section('content')

<div class="container profile">
  @if(!empty($user))
  <div class="row">
    <div class="span12">

      <div class="well clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center clearfix">


          <div class="col-md-4 text-center">
            @if(empty($user->img))
              <img class="pull-right" src="{{ asset('uploads/statics/user.png') }}" width="150px"/>
            @else
              <img class="pull-right" src="{{ asset($user->img) }}" width="150px"/>
            @endif
         </div>

         <div class="span4 col-md-4 text-center">
           <h2>{{ $user->name }}</h2> 
           <ul class="unstyled">
            <li><i class="fa fa-user"></i> {{ $user->nombres }} {{ $user->apellidos }}</li>
            <li><i class="fa fa-phone"></i> {{ $user->telefono }} {{ $user->celular }}</li>
            <li><i class="fa fa-envelope"></i> {{ $user->email }} </li>
            <li><i class="fa fa-map-markere"></i> {{ $user->direccion }} </li>
            <li><i class="fa fa-map-male"></i> {{ $user->genero }} </li>
            <li><i class="fa fa-map-birthday-cake"></i> {{ $user->fecha_nacimiento }} </li>
            <a href="{{ url('/perfil/' . $user->id . '/edit') }}" title="Editar Perfil"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
          </ul>
        </div>

        <div class="span6 col-md-4 text-center">
          <ul class="inline stats">
           <li>
             <span>275</span>
             Friends
           </li>
           <li>
             <span>354</span>
             Followers
           </li>
           <li>
             <span>186</span>
             Photos
           </li>
         </ul>
         <div><!--/span6-->
         </div><!--/row-->
       </div>

     </div>
   </div>
 </div>
</div>
@endif
</div>

<!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">-->

  <style type="text/css">
  
  .stats {
    text-align:center;
    text-shadow:1px 1px 0px #fff;
    margin-top:25px;  

  }
  .stats li{
    width:125px; 
  }
  .stats span{
    font-family:Helvetica;
    font-weight:bold;
    text-shadow:1px 1px 0px #fff;
    font-size:4em;

    display:block;
    line-height:1em;
  }

  /* Large desktop */
  @media (min-width: 1200px) { 
  }

  /* Portrait tablet to landscape and desktop */
  @media (min-width: 768px) and (max-width: 979px) { 
  }

  /* Landscape phone to portrait tablet */
  @media (max-width: 767px) { 
    .profile img{
      width:75px;
    }
    .profile h2{
      font-size:1.7em;
    }
    .stats span{
      font-size: 2em;
    }
  }
</style>


@stop