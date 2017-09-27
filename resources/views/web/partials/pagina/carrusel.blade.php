<div class="col-md-10 hidden-xs">
            <div class="body">
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
                                    {{$slide->content}}
                                </p>
                                
                                    @if(!empty($slide->linkweb))
                                    <a href="{{ $slide->linkweb }}">
                                    <button>
                                        MAS INFO
                                    </button>
                                    </a>
                                    @else
                                    <a href="#">
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
            </div>
        </div>