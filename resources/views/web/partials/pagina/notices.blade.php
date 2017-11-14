@extends('web.index')
@section('content')

<div class="container-fluid fondo-cuart">
  <div class="sixteen columns">
    <div class="sub-text link-svgline">
           
            @if(count($secciones)>0)
        @foreach($secciones as $sec)
        @if(($sec->section)=='noticias')

                {!! $sec->title !!}

        {!! $sec->subtitle !!}
        
        @endif
        @endforeach
        @else
        No configurado
        @endif
        </div>
</div>
<div class="row" style="position: relative;top: -50px;">
    <div class="col-md-12">

     <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-8">
            <ul class="event-list">
                @if(count($notices)>0)
                @foreach($notices as $notice)
                <li>
                    <time datetime="2014-07-20" style="background-color: {!! $notice->backgroud  !!};color: {!! $notice->colortext  !!};">
                        <span class="day" style="">
                            {{ $notice->day }}
                        </span>
                        <span class="month">
                            {{ str_limit($notice->month,4) }}
                        </span>
                        <span class="year">
                            2014
                        </span>
                        <span class="time">
                            ALL DAY
                        </span>
                    </time>
                    <img alt="Noticia" src="{{ asset($notice->img) }}"/>
                    <div class="info">
                        <h2 class="title">
                            {{ $notice->title }}
                        </h2>
                        <p class="desc">
                            {!! str_limit($notice->intro,120) !!}
                        </p>
                        <ul>
                            <li style="width:20%;">
                                <a href="{{url('DetallNotice', ['id' => $notice->id])}}">
                                    <span class="fa fa-globe">
                                    </span>
                                    Detalles
                                </a>
                            </li>
                            @if(!empty($notice->precio))
                            <li style="width:20%;">
                                <span class="fa fa-money">
                                </span>
                                ${{ $notice->precio }}
                            </li>
                            @endif
                            <li style="width:20%;">
                                Asistirán
                                <span class="glyphicon glyphicon-ok">
                                </span>
                            </li>
                            <li style="width:20%;">
                                Visitas
                                <span class="fa fa-eye">
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li class="facebook" style="width:33%;">
                                <a href="{{ $notice->compfb }}" title="ENLACE">
                                    <span class="fa fa-facebook">
                                    </span>
                                </a>
                            </li>
                            <li class="twitter" style="width:34%;">
                                <a href="{{ $notice->comptw }}" title="ENLACE">
                                    <span class="fa fa-twitter">
                                    </span>
                                </a>
                            </li>
                            <li class="google-plus" style="width:33%;">
                                <a href="{{ $notice->compgg }}" title="ENLACE">
                                    <span class="fa fa-google-plus">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endforeach
                @else
                <li>
                    No se a configurado la sección de noticias
                </li>
                @endif
                
            </ul>
        </div>
    </div>

</div>

</div>
</div>



<!--***************************LO NUEVO*****************************-->
<!--<div class="container-fluid fondo-first">
    <div class="text-center col-md-12">
        <h1>
            LO NUEVO
        </h1>
    </div>
    <div class="row noPadding">
        <div class="col-md-12 noPadding box">
            

                @if(count($cards)>0)
                    @foreach($cards as $card)
                    <div class="col-md-4 first ">

                <div class="cours2 textbox" style="overflow:hidden;">
                    <h2 class="none">
                        {{ $card->title }}
                    </h2>
                    <hr>
                    <p class="">
                        {{ $card->paragraph }}
                    </p>
                    </hr>
                    <div class="cours3">
                        <h2 style="text-align:center;margin-top:-1px;color:rgb(237,78,110);">
                           {{ $card->subtitle }}
                        </h2>
                        <h5 style="text-align:center;">
                           {{ str_limit($card->subtitle2, 90) }}
                        </h5>
                        <h6 style="text-align:center;">
                             {{ str_limit($card->subtitle3, 90) }}
                        </h6>
                    </div>
                    <div class="cours4 text-center">
                        <button class="cou" style="border:1px solid transparent;padding:5px 10px ;font-size:16px;border-radius:10%;background-color:rgb(237,78,110);color:white;">
                            VER MAS
                        </button>
                    </div>
                </div>

                </div>
                    @endforeach
                @else
                    Temas nuevos no configurado
                @endif

            
        </div>
    </div>
</div>-->




<!--*****************************TARJETAS**********************************-->


<div class="container-fluid fondo-third" style="background: #ffffff;">
    <div class="sixteen columns">
        <div class="sub-text link-svgline">
            @if(count($secciones)>0)
        @foreach($secciones as $sec)
        @if(($sec->section)=='notas')

        <div class="sixteen columns">
            <div class="sub-text link-svgline">
                {!! $sec->title !!}
            </div>
        </div>

        <p>{!! $sec->subtitle !!}</p>
        
        @endif
        @endforeach
        @else
        No configurado
        @endif
        </div>
    </div>
    <div class="row">
        @if(count($notes)>0)
            @foreach($notes as $nota)
                <div class="col-md-4">
                    <blockquote class="quote-box" style="background-color: {!! $nota->backgroud  !!};color: {!! $nota->colortext  !!};" >
                        <p class="quotation-mark">
                            “
                        </p>
                        <p class="quote-text">
                            {!! str_limit($nota->description,60) !!}
                        </p>
                        
                            <a href="{{url('DetallTopic', ['id' => $nota->id])}}">{{ $nota->title }}</a>
                        <hr>
                        <div class="blog-post-actions">
                            <p class="blog-post-bottom pull-left">
                            {{ $nota->name }}
                            </p>
                            <p class="blog-post-bottom pull-right">
                                <span class="badge quote-badge">
                                    896
                                </span>
                                ❤
                            </p>
                        </div>
                    </hr>
                    </blockquote>
                </div>
            @endforeach
        @else
        <div class="col-md-12">
            No se ha configurado la sección de notas
        </div>
        @endif
    </div>
</div>

@stop