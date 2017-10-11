@extends('web.index')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<center>
				<h1 class="page-header">
					<small>  Elije tu curso </small><!--small>Statistics Overview</small-->
				</h1>
			</center>                       
     <ul id="myTab" class="nav nav-tabs">
      <li class="active">
       <a href="#init" data-toggle="tab">
        Todos
      </a>
    </li>
    @if(count($tipocources)>0)                      
    @foreach($tipocources as $tipo)
    <li><a href="#{{ $tipo->id }}" data-toggle="tab">{{ $tipo->type }}</a></li>
    @endforeach
    @else
    No configurado los tipos de cursos
    @endif

  </ul>
  <div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="init">
    <div class="content_accordion">
     <div class="panel-group" id="accordion">
      <?Php $j=1; ?>
      @foreach($todos as $todo)
      <div class="panel panel-default">
       <div class="panel-heading">
        <h4 class="panel-title">
         <a data-toggle="collapse" data-parent="#accordion" href="#{{ $todo->id }}-{{ $todo->id }}"><?Php echo $j; ?>. ({{ $todo->TypeCourse->type }}) {{ $todo->clasification }}</a>
       </h4>
     </div>
     @if($j==1)
     <!--<div id="{{ $todo->id }}-{{ $todo->id }}" class="panel-collapse collapse in">-->
     <div id="{{ $todo->id }}-{{ $todo->id }}" class="panel-collapse collapse">
      @else
      <div id="{{ $todo->id }}-{{ $todo->id }}" class="panel-collapse collapse">
        @endif
        <div class="panel-body">
         <p>{{ $todo->body }} <a href="" target="_blank"></a></p>


         <div class="row">
          @foreach($cursos as $curso)
            @if(($curso->clasification_id)==($todo->id))
          <div class="col-sm-6 col-md-6">
            <div class="column"> 

              <!-- Post-->
              <div class="post-module"> 
                <!-- Thumbnail-->
                <div class="thumbnail">

                  <img src="{{ asset($curso->img) }}" class="img-responsive" alt=""> </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category">Catagories</div>
                    <a href="{{ url('DetallCourses', ['id' => $curso->id])}}">  <h2 class="title">{{ $curso->title }}</h2> </a>
                    <h2 class="sub_title">{{ $curso->subtitle }}</h2>
                    <p class="description">{{ $curso->content }}.</p>
                    <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> {{ $curso->actividad() }}</span><span class="comments"><i class="fa fa-plus"></i><a href="{{ url('DetallCourses', ['id' => $curso->id])}}"> ver detalles</a></span></div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          @endforeach

            </div>



          </div>
        </div>
      </div>
      <?Php $j++; ?>
      @endforeach



    </div>
  </div>
  <!--accordion end-->
</div>

@foreach($tipocources as $tipo)                          
<div class="tab-pane fade" id="{{ $tipo->id }}">
 <div class="content_accordion">
  <div class="panel-group" id="{{ $tipo->id }}{{ $tipo->type }}">
    <?Php $i=1; ?>
    @foreach($clases as $clase)
    @if(($tipo->id)==($clase->typecourse_id))
    <div class="panel panel-default">
      <div class="panel-heading">
       <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#{{ $clase->typecourse_id }}{{ $clase->TypeCourse->type }}" href="#{{ $clase->id }}-{{ $clase->TypeCourse->type }}"> - . {{ $clase->clasification }} </a>
      </h4>
    </div>
    @if($i=='1')
    <div id="{{ $clase->id }}-{{ $clase->TypeCourse->type }}" class="panel-collapse collapse">
    <!--<div id="{{ $clase->id }}-{{ $clase->TypeCourse->type }}" class="panel-collapse collapse in">-->
      @else
      <div id="{{ $clase->id }}-{{ $clase->TypeCourse->type }}" class="panel-collapse collapse">
        @endif
        <div class="panel-body">
          <p>{{ $clase->body }}. <a href="" target="_blank"></a></p>

          <div class="row">
          @foreach($cursos as $curso)
            @if(($curso->clasification_id)==($clase->id))
          <div class="col-sm-6 col-md-6">
            <div class="column"> 

              <!-- Post-->
              <div class="post-module"> 
                <!-- Thumbnail-->
                <div class="thumbnail">

                  <img src="{{ asset($curso->img) }}" class="img-responsive" alt=""> </div>
                  <!-- Post Content-->
                  <div class="post-content">
                    <div class="category">Catagories</div>
                    <a href="{{ url('DetallCourses', ['id' => $curso->id])}}">  <h2 class="title">{{ $curso->title }}</h2> </a>
                    <h2 class="sub_title">{{ $curso->subtitle }}</h2>
                    <p class="description">{{ $curso->content }}.</p>
                    <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> {{ $curso->actividad() }}</span><span class="comments"><i class="fa fa-plus"></i><a href="{{ url('DetallCourses', ['id' => $curso->id])}}"> ver detalles</a></span></div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          @endforeach

            </div>

        </div>
      </div>
    </div>
    @endif
    <?Php $i++; ?>
    @endforeach

  </div>
</div>
<!--accordion end-->
</div>

@endforeach


</div>


</div>


<div class="col-sm-3">
  <h3><strong>Testimonial</strong></h3>
  <div class="seprator"></div>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="row" style="padding: 20px">
          <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
          <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
          <div class="row">
            <div class="col-sm-2">
              <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="width: 80px">
            </div>
            <div class="col-sm-10">
              <h4><strong>Jack Andreson</strong></h4>
              <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
                <span>Officeal All Star Cafe</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
       <div class="row" style="padding: 20px">
        <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
        <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
        <div class="row">
          <div class="col-sm-2">
            <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/kiara.jpg" class="img-responsive" style="width: 80px">
          </div>
          <div class="col-sm-10">
            <h4><strong>Kiara Andreson</strong></h4>
            <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
              <span>Officeal All Star Cafe</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="controls testimonial_control pull-right">
  <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
  data-slide="prev"></a>

  <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
  data-slide="next"></a>
</div>
</div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

<style type="text/css">
.content_accordion{
	margin: 20px;
}


.post-module {
  position: relative;
  z-index: 1;
  display: block;
  background: #FFFFFF;
  min-width: 100%;
  height: auto;
  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
}
.post-module:hover,
.hover {
  -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
}
.post-module:hover .thumbnail img,
.hover .thumbnail img {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  transform: scale(1.1);
  opacity: .6;
}
.post-module .thumbnail {
  background: #000000;
  height: 350px;
  overflow: hidden;padding: 0;
}
.post-module .thumbnail .date {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 1;
  background: #f2b202;
  width: 55px;
  height: 55px;
  padding: 12.5px 0;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  color: #FFFFFF;
  font-weight: 700;
  text-align: center;
  -webkti-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.post-module .thumbnail .date .day {
 font-size: 18px;
 line-height: 31px;
 color: #fff;
}
.post-module .thumbnail .date .month {
  font-size: 12px;
  text-transform: uppercase;
}
.post-module .thumbnail img {
  display: block;
  width: 120%;
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
}
.post-module .post-content {
  position: absolute;
  bottom: 0;
  background: #FFFFFF;
  width: 100%;
  padding: 0 30px;
  -webkti-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
}
.post-module .post-content .category {
  position: absolute;
  top: -34px;
  left: 0;
  background: #f2b202;
  padding: 10px 15px;
  color: #FFFFFF;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
}
.post-module .post-content .title {
  margin: 0;
  padding: 0 0 10px;
  color: #222 !important;
  font-size: 24px !important;
  font-weight: 700;    margin: 40px 0 0 !important;
}
.post-module .post-content .sub_title {
  margin: 0;
  padding: 0 0 20px;
  color: #f2b202;
  font-size: 20px;
  font-weight: 400;
}
.post-module .post-content .description {
  display: none;
  color: #666666;
  font-size: 14px;
  line-height: 1.8em;
}
.post-module .post-content .post-meta {
  margin: 0px 0px 10px;
  color: #999999;
}
.post-module .post-content .post-meta .timestamp {
  margin: 0 16px 0 0;
}
.post-module .post-content .post-meta a {
  color: #999999;
  text-decoration: none;
}
.hover .post-content .description {
  display: block !important;
  height: auto !important;
  opacity: 1 !important;
}

.container .column {
 width: 100%;
 /* padding: 0 25px; */
 -webkti-box-sizing: border-box;
 -moz-box-sizing: border-box;
 box-sizing: border-box;
 float: left;
}
.container .column .demo-title {
  margin: 0 0 15px;
  color: #666666;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
}
.container .info {
  width: 300px;
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 24px;
  font-weight: bold;
  color: #333333;
}
.container .info span {
  color: #666666;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #f2b202;
}

</style>
<script type="text/javascript">
  $(window).load(function() {
    $('.post-module').hover(function() {
      $(this).find('.description').stop().animate({
        height: "toggle",
        opacity: "toggle"
      }, 300);
    });
  });
</script>

@stop
