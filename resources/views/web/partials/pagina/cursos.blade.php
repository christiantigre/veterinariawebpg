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



@stop
