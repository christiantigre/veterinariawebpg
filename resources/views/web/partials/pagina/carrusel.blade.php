<div class="col-md-10 hidden-xs">
    <div class="body">
        @if(count($slider)>0)
        <div class="slider-container" id="slider-container">
            <div class="slider-outer clearfix" id="slider-outer">

                @foreach($slider as $slide)
                <div class="slide clearfix">
                    <div class="slide-thump">
                        <img src="{{ asset($slide->img) }}"/>
                        <div class="overlay">
                        </div>
                    </div>
                    <div class="slide-details">
                        <div class="header">
                            <h2>
                                {{$slide->title}}
                            </h2>
                        </div>
                        <p>
                            {{ str_limit( $slide->content,120) }}
                        </p>

                        @if(!empty($slide->linkweb))
                        <a href="{{ $slide->linkweb }}">
                            <button>
                                MAS INFO
                            </button>
                        </a>
                        @else
                        <a href="{{url('DetallSlider', ['id' => $slide->id])}}">
                            <button>
                                MAS INFO
                            </button>
                        </a>
                        @endif

                    </div>
                </div>

                @endforeach
            </div>
            <div class="slide-controls">
                <div class="left">
                    ‹
                </div>
                <div class="right">
                    ›
                </div>
            </div>
        </div>
        @else
        Slider no configurado
        @endif
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center clearfix">
        @if(count($secciones)>0)
        @foreach($secciones as $sec)
        @if(($sec->section)=='slider')

        <div class="sixteen columns">
            <div class="sub-text link-svgline">
                {{ $sec->title }}
            </div>
        </div>

        <p>{{ $sec->subtitle }}</p>
        
        @endif
        @endforeach
        @else
        No configurado
        @endif
        
    </div>
</div>