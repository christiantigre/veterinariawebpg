<div class="container-fluid fondo-second">
    <div class="row">
        <div class="col-xs-12 text-center clearfix">
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
            <p>
                This is my attempt to make a wonderful snippet posted by
                <a href="" target="_blank">
                    maridlcrmn
                </a>
                a little more responsive. You can find the orginal
                <a href="" target="_parent">
                    here
                </a>
            </p>
        </div>
    </div>
    <div class="row">
    @if(count($socios)>0)
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center" role="tabpanel">
                <div class="col-xs-4 col-sm-12">
                    <!-- Nav tabs -->
                    <!--imagenes de 300x300-->
                    <ul class="nav nav-justified" id="nav-tabs" role="tablist">
                        @foreach($socios as $socio)
                            <li class="" role="presentation">
                                <a aria-controls="{{ $socio->id }}" data-toggle="tab" href="#{{ $socio->id }}" role="tab">
                                    <img class="img-circle" src="{{ asset($socio->img) }}"/>
                                    <span class="quote">
                                        <i class="fa fa-quote-left">
                                        </i>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="col-xs-8 col-sm-12">
                    <div class="tab-content" id="tabs-collapse">
                        <!--inicio panel-->
                        <?php $active='in active'; ?>
                        @foreach($socios as $socio)
                        @if(($socio->id)=='1')
                            <div class="tab-pane fade in active" id="{{ $socio->id }}" role="tabpanel">
                        @else
                            <div class="tab-pane fade" id="{{ $socio->id }}" role="tabpanel">
                        @endif                        
                            <div class="tab-inner">
                                <p class="lead">
                                   {{ $socio->description }}
                                </p>
                                <hr>
                                <p>
                                    <strong class="text-uppercase">
                                        {{ $socio->name }} {{ $socio->lastname }}
                                    </strong>
                                </p>
                                <p>
                                    <em class="text-capitalize">
                                        {{ $socio->especialitation }}
                                    </em>
                                    at
                                    <a href="{{ $socio->workplacelink }}">
                                        {{ $socio->workplace }}
                                    </a>
                                </p>
                            </hr>
                            </div>
                            <div class="col-md-12">
                                <ul class="social-network social-circle">
                                    <li>
                                        <a class="icoLinkedin" href="{{ $socio->lk }}" title="LikedIn">
                                            <i class="fa fa-linkedin">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icoFacebook" href="{{ $socio->fb }}" title="Facebook">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icoTwitter" href="{{ $socio->tw }}" title="Twitter">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icoGoogle" href="{{ $socio->gg }}" title="Google +">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icoRss" href="{{ $socio->in }}" title="Instagram">
                                            <i class="fa fa-instagram">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        <!--fin panel-->
                    </div>
                </div>
</div>
            
    @else
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center" role="tabpanel">
        No se ha configurado sección de socios
    </div>
    @endif
</div>
</div>