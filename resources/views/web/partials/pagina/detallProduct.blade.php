@extends('web.index')
@section('content')


<div class="container" style="margin-top: 20px">
  @if(!empty($productos))
  <div class="row">

   <div class="col-md-2">
    <div class="support-menu">
      <nav class="vertical_active">
        <ul class="menu_active">
          <li>
            <a href="{{ url('/product') }}">
              Productos
            </a>
            <ul>
              @if(count($typeproducts)>0)
              @foreach($typeproducts as $typeproduct)
              <li>
                <a href="{{ url('view_prod', ['id' => $typeproduct->id])}}">
                  {{ $typeproduct->typeproduct }}
                </a>
              </li>
              @endforeach
              @else
              <li>
                <a href="#">
                  No hay clasificación
                </a>
              </li>
              @endif
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="col-md-10">
    {!! Form::open(['method' => 'GET', 'url' => '/producto_search', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
    <div class="input-group">
      <input type="text" class="form-control" name="search" placeholder="Buscar...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="fa fa-search"></i>
        </button>
      </span>
    </div>
    {!! Form::close() !!}

    <br/>
    <br/>
  </div>

  <div class="col-md-10">

<div class="row">
  @foreach($cards as $card)
  @foreach($veterinary as $veterinaria)
               <div class="col-xs-5 item-photo">
                    <img style="max-width:100%;" src="{{ asset($card->img) }}" />
                </div>
                <div class="col-xs-7" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{ $card->name }}</h3>    
                    <h5 style="color:#337ab7">vendido por <a href="{{ $veterinaria->linkweb }}">{{ $veterinaria->name }}</a> · <small style="color:#337ab7">({{ $card->vendidos }} ventas)</small></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>PRECIO 
                      @if(($card->oferta)=='1')
                        OFERTA
                      @endif
                  </small></h6>
                    <h3 style="margin-top:0px;">U$ {{ $card->precio_venta }}</h3>
        
                    <!-- Detalles especificos del producto -->
                    <div class="section">
                      <h5 style="color:#337ab7"><small style="color:#337ab7">{{ $card->slug }} </small></h5>
                        <!--<h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>                    
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>-->
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>Stock</small></h6>                    
                        <div>
                            <div class="attr2">{{ $card->stock }}</div>
                        </div>
                    </div>   
                                                      
                </div>    
                @endforeach                          
        
                <div class="col-xs-12">
                    <ul class="menu-items">
                        <li class="active">Detalle del producto</li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>
                            {!! $card->description !!}
                            </small>
                        </p>
                    </div>
                </div>    
                @endforeach
            </div>

        </div>






      </div>
      <div class="clearfix"></div>
      @else
      <div class="row">
        No Hay Productos Disponibles por el momento      
      </div>
      @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>


    @stop
