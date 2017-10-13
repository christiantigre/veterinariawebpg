<div class="container-fluid fondo-quint">
    <div class="sixteen columns">
        <div class="sub-text link-svgline">
            @if(count($secciones)>0)
        @foreach($secciones as $sec)
        @if(($sec->section)=='galeria')

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
    <div class="row " style="position: relative;top: -90px;">
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
                            {{ str_limit($galery->content,120) }} {{ $galery->Category->category }}
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
                                  <h4>{{ str_limit($galery->content,20) }}</h4>
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