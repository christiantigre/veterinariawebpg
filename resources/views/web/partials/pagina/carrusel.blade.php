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