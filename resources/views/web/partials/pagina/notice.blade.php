<div class="container-fluid fondo-cuart">
  <div class="sixteen columns">
    <div class="sub-text link-svgline">
        @if(count($secciones)>0)
        @foreach($secciones as $sec)
        @if(($sec->section)=='noticias')

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
<div class="row" style="position: relative;top: -90px;">
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
                            {{ str_limit($notice->month,4) }}
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
                <!--<li>
                    <time datetime="2014-07-20 0000">
                        <span class="day">
                            8
                        </span>
                        <span class="month">
                            Jul
                        </span>
                        <span class="year">
                            2014
                        </span>
                        <span class="time">
                            12:00 AM
                        </span>
                    </time>
                    <div class="info">
                        <h2 class="title">
                            One Piece Unlimited World Red
                        </h2>
                        <p class="desc">
                            PS Vita
                        </p>
                        <ul>
                            <li style="width:50%;">
                                <a href="#website">
                                    <span class="fa fa-globe">
                                    </span>
                                    Website
                                </a>
                            </li>
                            <li style="width:50%;">
                                <span class="fa fa-money">
                                </span>
                                $39.99
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
                <li>
                    <time datetime="2014-07-20 2000">
                        <span class="day">
                            20
                        </span>
                        <span class="month">
                            Jan
                        </span>
                        <span class="year">
                            2014
                        </span>
                        <span class="time">
                            8:00 PM
                        </span>
                    </time>
                    <img alt="My 24th Birthday!" src="theme/images/notice/not2.jpg"/>
                    <div class="info">
                        <h2 class="title">
                            Mouse0270's 24th Birthday!
                        </h2>
                        <p class="desc">
                            Bar Hopping in Erie, Pa.
                        </p>
                        <ul>
                            <li style="width:33%;">
                                1
                                <span class="glyphicon glyphicon-ok">
                                </span>
                            </li>
                            <li style="width:34%;">
                                3
                                <span class="fa fa-question">
                                </span>
                            </li>
                            <li style="width:33%;">
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
                <li>
                    <time datetime="2014-07-31 1600">
                        <span class="day">
                            31
                        </span>
                        <span class="month">
                            Jan
                        </span>
                        <span class="year">
                            2014
                        </span>
                        <span class="time">
                            4:00 PM
                        </span>
                    </time>
                    <img alt="Disney Junior Live On Tour!" src="theme/images/notice/not3.jpg"/>
                    <div class="info">
                        <h2 class="title">
                            Disney Junior Live On Tour!
                        </h2>
                        <p class="desc">
                            Pirate and Princess Adventure
                        </p>
                        <ul>
                            <li style="width:33%;">
                                $49.99
                                <span class="fa fa-male">
                                </span>
                            </li>
                            <li style="width:34%;">
                                $29.99
                                <span class="fa fa-child">
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
                </li>-->
            </ul>
        </div>
    </div>

</div>

</div>
</div>