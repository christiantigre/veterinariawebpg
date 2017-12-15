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
.galley{
  width: 100%;
  height: auto;
}

.pictures, #picture > li {

  margin: 0 -1px -1px 0;
  border: 1px solid transparent;
  overflow: hidden;
}

.pictures , #picture > li > img {
      /*width: 100%;
      cursor: -webkit-zoom-in;
      cursor: zoom-in;*/

      max-width: 100%;
      width: 100%;
      height: auto;
      margin-bottom: 1rem;
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
    
    
    .picture,#picture > li > img {
      max-width:100%;
      position: relative;
      top:0;
      -webkit-transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
      transition:         all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);   
    }
    .picture, #picture .text-category {
      display:block;
      font-size:9px;
    }
    
    /*.picture, #picture > li:hover {
      bottom:0;
    }
    .picture, #picture > li:hover img {
      top:-30px;
    } 
    */
    .gal-container{
      margin-top: 10px;
    }
    @media(max-width:320px) {
      .gal-container{
        margin-top:15px;
      }
      .picture, #picture > li:hover img {
        top:-10px;
      }
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
      <div class="col-md-12 gal-container" >
        <!--INICIO DE TAB PANEL GALERIA-->
        <div id="exTab1" class="container">
          <ul class="nav nav-pills">
            <?Php $i = 1;?>
            @foreach($categories as $category)
            @if($category->id==$catactive)
            <?Php $active='active';  ?>
            @else
            <?Php $active='';  ?>
            @endif
            <li class="{{ $active }}">
              <a  href="{{ url('gallerycategory') }}/{{ $category->id }}" class="tab-class">{{ $category->category }}</a>
            </li>
            <?Php $i++;?>
            @endforeach
          </ul>
          <div class="tab-content clearfix">

            <div class="tab-pane active" id="">
              <!--  galeria  -->
              <div class="work" style="margin-top: 5px; height: auto;">
                <div id="exTab1" class="container">
                  <ul class="nav nav-pills">
                    @foreach($albuns as $alb) 
                    @if($alb->id==$albunvar)
                    <?Php $activesub='active';  ?>
                    @else
                    <?Php $activesub='';  ?>
                    @endif
                    <li class="{{ $activesub }}">
                      <a href="{{ url('galleryalbun') }}/{{$alb->id}}" class="tab-class">{{ $alb->namealbun }}</a>
                    </li>
                    @endforeach
                  </ul>
                  <div class="sixteen columns" style="background: #ffffff;color: #999999;">
                    @if(!empty($detall))
                    {{ $detall }}
                    @endif
                  </div>
                </div>
              </div>

              <div id="portfolio" style="margin-top: -60px; height: auto;">
                <center>
                  <div id="galley" style="">
                    <ul class="picture" id="picture">
                      @foreach($images as $img)
                      <li>         
                        <img data-original="{{ asset($img->file_path) }}" src="{{ asset($img->file_path) }}" alt="" />
                        <div class="label">
                          <div class="label-text">
                            <a href="{{url('DetallGalleryItemAlbun', ['id' => $img->id])}}" class="text-title">{{ $img->title }}</a>
                            <span class="text-category" style="color: #999999;">{{ str_limit($img->intro,60) }}</span>
                          </div>
                          <div class="label-bg"></div>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </center>
              <!--  fin galeria  -->
            </div>
          </div>
        </div>

        <!--INICIO DE TAB PANEL GALERIA-->
      </div>
    </div>
  </div>


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
