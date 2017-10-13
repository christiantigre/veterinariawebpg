@extends('web.index')
@section('content')

@foreach($veterinary as $veterinaria)
@foreach($cards as $card)
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center ">
            <p>
                <h2>
                El mejor equipo humano a su servicio
                </h2>
                <small>
                    Tenemos una convicción firme de que nuestro equipo debe de tener experiencia, ambición, y un afán increíble por la medicina veterinaria en pos de darle el mejor diagnóstico posible a su mascota. A continuación puede leer un poco acerca de nuestro grupo de trabajo.
                </small>
            </p>
        </div>
    </div>

    <div class="row">
    <div class="col-xs-8 col-sm-12 col-md-12 col-lg-12">
        
           
    <img src="{{ asset($card->img) }}"/>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  
            <h2>{{ $card->name }} {{ $card->lastname }}</h2>
            <p>{{ $card->abrevTitulo }}. {{ $card->especialitation }}</p>
            <div class="col-md-12">{!! $card->description !!}</div>
    
    </div>
    </div>


    
</div> <!-- /container -->  
@endforeach
@endforeach

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">

        </div>
    </div>
</div>
<style type="text/css">





</style>
@stop



