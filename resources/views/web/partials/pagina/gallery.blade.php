@extends('web.index')
@section('content')

<div class="container-fluid fondo-quint">
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
    <div class="row ">
        <div class="col-md-12 gal-container">
            <div class="work">
                <div class="category-buttons">
                    @if(count($categories)>0)
                            <a class="active all" data-group="all" href="#">
                                Todas
                            </a>
                    @foreach($categories as $category)                       
                            <a data-group="{{ $category->category }}" href="#">
                                {{ $category->category }}
                            </a>
                    @endforeach
                    @else
                        No configurado la sección de categorias
                    @endif
                </div>
                <div class="grid gal-item" id="grid">
                    @if(count($galleries)>0)
                    @foreach($galleries as $galery)                       

                    <a class="card" data-groups="{{ $galery->Category->category }}," href="#" data-toggle="modal" data-target="#{{ $galery->Category->category }}">
                        <img class="example-image" src="{{ asset($galery->img) }}"/>
                        <div class="title">
                            {{ $galery->content }} {{ $galery->Category->category }}
                        </div>
                    </a> 
                    <!-- Modal -->
                      <div class="modal fade" id="{{ $galery->Category->category }}" role="dialog">
                        <div class="modal-dialog">                        
                          <!-- Modal content-->
                          <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              <div class="modal-body">
                                <img src="{{ asset($galery->img) }}" style="width: 100%; height: auto;">
                              </div>
                                <div class="col-md-12 description">
                                  <h4>{{ $galery->content }}</h4>
                                </div>
                            </div>                          
                        </div>
                      </div>   
                      <!--fin modal-->

                    @endforeach
                    @else
                        No configurado la sección de galegia
                    @endif


                    <div class="guide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop