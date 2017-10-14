@extends('web.index')
@section('content')

<div class="container-fluid fondo-quint" style="background: #ffffff;">
    <div class="sixteen columns" style="background: #ffffff;">
        <div class="sub-text link-svgline">

            @if(count($secciones)>0)
        @foreach($secciones as $sec)
        @if(($sec->section)=='galeria')

                {!! $sec->title !!}

        {!! $sec->subtitle !!}

        @endif
        @endforeach
        @else
        No configurado
        @endif
        </div>
    </div>
    <div class="row " style="position: relative;top: -90px; background: #ffffff;">
        <div class="col-md-12 gal-container" style="margin-top:0px;">
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
                            <p>{{ str_limit($galery->intro,50) }}</p> {{ $galery->Category->category }}
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
                              <a href="{{url('DetallGalleryItem', ['id' => $galery->id])}}">
                                @if(empty($gallery->intro))
                                <p><h4>{{  str_limit($galery->title,60)  }}</h4></p>
                                @else
                                <p><h4>{{  str_limit($galery->intro,60)  }}</h4></p>
                                @endif
                              </a>
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
