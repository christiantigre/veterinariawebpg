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
                            {{ str_limit($nota->description,120) }}
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