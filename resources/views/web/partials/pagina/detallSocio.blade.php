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

    <div class="row espacio">
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4 text-center">
        
           
    <img src="{{ asset($card->img) }}"/>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-8 text-center ">
  
            <h2>{{ $card->name }} {{ $card->lastname }}</h2>
            <p>{{ $card->abrevTitulo }}. {{ $card->especialitation }}</p>
            <div class="col-md-12">{!! $card->description !!}</div>


                            <div class="col-md-12">
                                <ul class="social-network social-circle">
                                    @if(!empty($card->lk))
                                    <li>
                                        <a class="icoLinkedin" href="{{ $card->lk }}" title="LikedIn">
                                            <i class="fa fa-linkedin">
                                            </i>
                                        </a>
                                    </li>
                                    @endif
                                    @if(!empty($card->fb))
                                    <li>
                                        <a class="icoFacebook" href="{{ $card->fb }}" title="Facebook">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    @endif
                                    @if(!empty($card->tw))
                                    <li>
                                        <a class="icoTwitter" href="{{ $card->tw }}" title="Twitter">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    @endif
                                    @if(!empty($card->gg))
                                    <li>
                                        <a class="icoGoogle" href="{{ $card->gg }}" title="Google +">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                    @endif
                                    @if(!empty($card->in))
                                    <li>
                                        <a class="icoRss" href="{{ $card->in }}" title="Instagram">
                                            <i class="fa fa-instagram">
                                            </i>
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
    
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



