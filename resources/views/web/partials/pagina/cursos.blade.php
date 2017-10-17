@extends('web.index')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<center>
				<h1 class="page-header">
					<small>  
            @if(count($secciones)>0)
            @foreach($secciones as $sec)
        @if(($sec->section)=='pagina cursos')
          <h2>   {!! $sec->title !!}  </h2>
          
          <p>  {!! $sec->subtitle !!}  </p>
            @endif
        @endforeach
        @else
        No configurado
          @endif
          </small><!--small>Statistics Overview</small-->
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


<!--inicio testimonio-->


    @include('web.partials.pagina.sidebar2')



<!--fin testimonio-->


</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->



@stop
