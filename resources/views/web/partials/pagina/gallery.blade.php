@extends('web.index')
@section('content')



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('theme/pluging/galery/dist/viewer.css') }}">
  <style>
    .pictures, #picture {
      margin: 0;
      padding: 0;
      list-style: none;
      max-width: 30rem;
    }

    .pictures, #picture > li {
      float: left;
      width: 33.3%;
      height: 33.3%;
      margin: 0 -1px -1px 0;
      border: 1px solid transparent;
      overflow: hidden;
    }

    .pictures , #picture > li > img {
      width: 100%;
      cursor: -webkit-zoom-in;
      cursor: zoom-in;
    }

    .viewer-download {
      color: #fff;
      font-family: FontAwesome;
      font-size: .75rem;
      line-height: 1.5rem;
      text-align: center;
    }

    .viewer-download::before {
      content: "\f019";
    }
  </style>


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
      <!--INICIO DE TAB PANEL GALERIA-->
      <div id="exTab1" class="container">
        <ul  class="nav nav-pills">
          <?Php $i = 1;?>
          @foreach($categories as $category)
          @if($i=='1')
          <li class="active">
            <a  href="{{ url('gallerycategory') }}/{{ $category->id }}" class="tab-class">{{ $category->category }}</a>
          </li>
          @else
          <li>
            <a href="{{ url('gallerycategory') }}/{{ $category->id }}" class="tab-class">{{ $category->category }}</a>
          </li>
          @endif
          <?Php $i++;?>
          @endforeach
        </ul>
        <div class="tab-content clearfix">
          @foreach($categories as $cat)
          <?php 
          $contpanel = 1;
          ?>
          <div class="tab-pane active" id="{{ $cat->id }}">
            <!--  galeria  -->
            <div class="work" style="margin-top: 5px; height: auto;">
              <div class="category-buttons">
                <div class="toolbar mb2 mt2">
                  @foreach($albuns as $alb)
                  @if(($alb->category_id)==($cat->id))
                  <a class="btn-albun fil-cat" href="" data-rel="{{ $alb->id }}">
                    {{ $alb->namealbun }}
                  </a>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div id="portfolio" style="margin-top: -60px; height: auto;">

              <div id="galley">
                <ul class="picture" id="picture">
              @foreach($images as $img)
                  <li>                    
                  <img data-original="{{ asset($img->file_path) }}" src="{{ asset($img->file_path) }}" alt="" />
                  </li>
              @endforeach
                </ul>
              </div>
            </div>
            <!--  fin galeria  -->
          </div>
          <?Php $contpanel++;?>
          @endforeach
        </div>
      </div>

      <!--INICIO DE TAB PANEL GALERIA-->
    </div>
  </div>
</div>

<!--<div id="galley">
      <ul class="pictures">
        <li><img data-original="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" src="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" alt="Cuo Na Lake"></li>
        <li><img data-original="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" src="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" alt="Tibetan Plateau"></li>
        <li><img data-original="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" src="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" alt="Jokhang Temple"></li>
        <li><img data-original="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" src="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" alt="Potala Palace 1"></li>
        <li><img data-original="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" src="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" alt="Potala Palace 2"></li>
        <li><img data-original="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" src="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" alt="Potala Palace 3"></li>
        <li><img data-original="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" src="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" alt="Lhasa River"></li>
        <li><img data-original="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" src="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" alt="Namtso 1"></li>
        <li><img data-original="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" src="{{ asset('uploads/galery/9-10-5a25fa6bd4cfcprogramador.jpg') }}" alt="Namtso 2"></li>
      </ul>
    </div>-->


<link rel="stylesheet" href="{{ asset('theme/pluging/galery/css/style.css') }}">

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

<script  src="{{ asset('theme/pluging/galery/js/index.js') }}"></script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('theme/pluging/galery/dist/viewer.js') }}"></script>
  <script>
    window.addEventListener('DOMContentLoaded', function () {
      var galley = document.getElementById('galley');
      var viewer = new Viewer(galley, {
        url: 'data-original',
        toolbar: {
          oneToOne: true,
          prev: function() {
            viewer.prev(true);
          },
          play: true,
          next: function() {
            viewer.next(true);
          },
          download: function() {
            const a = document.createElement('a');

            a.href = viewer.image.src;
            a.download = viewer.image.alt;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
          },
        },
      });
    });
  </script>


@stop
