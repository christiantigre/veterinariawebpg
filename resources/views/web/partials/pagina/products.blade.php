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


    @foreach($cards as $product)
    <div class="col-md-4">
      <div class="column"> 
        <!-- Post-->
        <div class="post-module"> 
          <!-- Thumbnail-->
          <div class="thumbnail">

            <img src="{{ asset($product->img) }}" class="img-responsive" alt=""> </div>
            <!-- Post Content-->
            <div class="post-content">
              <div class="category">{{ $product->slug }}</div>
              <a href="{{ url('detall_prod', ['id' => $product->id])}}">  <h2 class="title">{{ $product->name }}</h2> </a>
              <h2 class="sub_title">{{ $product->slug }}</h2>
              <p class="description">{{ $product->description }}</p>
              <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> {{ $product->actividad() }}</span><span class="comments"><i class="fa fa-plus"></i><a href="{{ url('detall_prod', ['id' => $product->id])}}"> ver detalles</a></span></div>
            </div>
          </div>
        </div>
      </div>
      @endforeach



          <div class="pagination-wrapper"> {!! $cards->appends(['search' => Request::get('search')])->render() !!} </div>


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
