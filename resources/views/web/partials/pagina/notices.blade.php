@extends('web.index')
@section('content')

<div class="container-fluid fondo-cuart">
  <div class="sixteen columns">
    <div class="sub-text link-svgline">
        <a data-gal="m_PageScroll2id" data-ps2id-offset="65" href="#about">
            We believe
            <svg class="link-svgline">
                <use xlink:href="#svg_line">
                </use>
            </svg>
        </a>
        in coming up with original ideas and turning them into digital work that is both
        <a data-gal="m_PageScroll2id" data-ps2id-offset="65" href="#services">
            innovative and measurable.
            <svg class="link-svgline">
                <use xlink:href="#svg_line">
                </use>
            </svg>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">

     <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-8">
            <ul class="event-list">
                @if(count($notices)>0)
                @foreach($notices as $notice)
                <li>
                    <time datetime="2014-07-20">
                        <span class="day">
                            {{ $notice->day }}
                        </span>
                        <span class="month">
                            {{ $notice->month }}
                        </span>
                        <span class="year">
                            2014
                        </span>
                        <span class="time">
                            ALL DAY
                        </span>
                    </time>
                    <img alt="Independence Day" src="{{ asset($notice->img) }}"/>
                    <div class="info">
                        <h2 class="title">
                            {{ $notice->title }}
                        </h2>
                        <p class="desc">
                            {{ $notice->content }}
                        </p>
                        <ul>
                            <li style="width:20%;">
                                <a href="{{ $notice->link }}">
                                    <span class="fa fa-globe">
                                    </span>
                                    Website
                                </a>
                            </li>
                            <li style="width:20%;">
                                <span class="fa fa-money">
                                </span>
                                $39.99
                            </li>
                            <li style="width:20%;">
                                1
                                <span class="glyphicon glyphicon-ok">
                                </span>
                            </li>
                            <li style="width:20%;">
                                3
                                <span class="fa fa-question">
                                </span>
                            </li>
                            <li style="width:20%;">
                                103
                                <span class="fa fa-envelope">
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li class="facebook" style="width:33%;">
                                <a href="#facebook">
                                    <span class="fa fa-facebook">
                                    </span>
                                </a>
                            </li>
                            <li class="twitter" style="width:34%;">
                                <a href="#twitter">
                                    <span class="fa fa-twitter">
                                    </span>
                                </a>
                            </li>
                            <li class="google-plus" style="width:33%;">
                                <a href="#google-plus">
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
<div class="container-fluid fondo-first">
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
</div>




<!--*****************************TARJETAS**********************************-->


<div class="container-fluid fondo-third">
    <div class="sixteen columns">
        <div class="sub-text link-svgline">
            <a data-gal="m_PageScroll2id" data-ps2id-offset="65" href="#about">
                We believe
                <svg class="link-svgline">
                    <use xlink:href="#svg_line">
                    </use>
                </svg>
            </a>
            in coming up with original ideas and turning them into digital work that is both
            <a data-gal="m_PageScroll2id" data-ps2id-offset="65" href="#services">
                innovative and measurable.
                <svg class="link-svgline">
                    <use xlink:href="#svg_line">
                    </use>
                </svg>
            </a>
        </div>
    </div>
    <div class="row">
        @if(count($notes)>0)
            @foreach($notes as $nota)
                <div class="col-md-4">
                    <blockquote class="quote-box">
                        <p class="quotation-mark">
                            “
                        </p>
                        <p class="quote-text">
                            {{ $nota->description }}
                        </p>
                        
                            <a href="{{ $nota->link }}">{{ $nota->title }}</a>
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