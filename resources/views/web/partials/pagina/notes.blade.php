<div class="container-fluid ">
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
    <div class="row" style="position: relative;top: -90px;">
        @if(count($notes)>0)
            @foreach($notes as $nota)
                <div class="col-md-4">
                    <blockquote class="quote-box">
                        <p class="quotation-mark">
                            “
                        </p>
                        <p class="quote-text">
                            @if(($nota->intro)=="")
                            {!! str_limit($nota->description,60) !!}
                            @else
                            {!! str_limit($nota->intro,60) !!}
                            @endif
                        </p>
                        
                            <a href="{{url('DetallTopic', ['id' => $nota->id])}}">{{ $nota->title }}</a>
                        <hr>
                        <div class="blog-post-actions">
                            <p class="blog-post-bottom pull-left">
                            {{ $nota->Admin->name }}
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