 <div class="container-fluid espacio">
  
  <div class="row">
    


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center clearfix">
      @if(count($secciones)>0)


      @foreach($secciones as $sec)
      @if(($sec->section)=='cursos carrusel')

      <div class="sixteen columns">
        <div class="sub-text link-svgline">
          {!! $sec->title !!}
        </div>
      </div>

      <p>{!! $sec->subtitle !!}</p>
      <a href="{{ url('/courses') }}" >
        click aqui para ver
      </a>

      @endif
      @endforeach
      @else
      No configurado
      @endif


    </div>

  </div>
  <div class="row" style="position: relative;top: -0px;">
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     @if(count($cursos)>0)
     <marquee style="  scrollamount="6" scrolldelay="90" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
      <a target="_blank">
        <ul class="list-inline list-unstyled r">
          @foreach($cursos as $curso)
          <li class="productbox">
            <img src="{{ asset($curso->img) }}" class="img-responsive">
            <a href="{{ url('DetallCourses', ['id' => $curso->id])}}">
              @if(($curso->nameslider)=="")
              <div class="producttitle"> {{ $curso->title }}</div> 
              @else
              <div class="producttitle"> {{ $curso->nameslider }}</div> 
              @endif
            </a>
          </li> 
          @endforeach
        </ul></a><br>
      </marquee>

      @endif


    </div>
  </div>
</div>



<style type="text/css">
marquee>a, marquee>a:hover{color:#000; text-decoration:none;}
.productbox {
  width:250px;
  height:auto;
  background-color:#ffffff;
  padding:10px;
  margin-bottom:10px;
  padding: 10px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background-color: #fff;
  border: solid 1px #cbcbcb;
  transition: all .20s ease-in-out;
}
.productbox img{
  width:235px;
  height:214px;
}
.producttitle {
  font-weight:bold;
  padding:5px 0 5px 0; 
  width: 235px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;

}
.producttitle a{
 color:#000;
 text-decoration:none;
}
.producttitle .btn{
  background-color:#EDEEF0;
}

</style>