@extends('web.index')
@section('content')
<?Php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
?>

<div class="container ">


    <!--Header-->
         <!-- HEADER -->
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <div class="header">
        @if(empty($course->img))
        Sin imagen de encabezado
        @else
        <img style="width:100%" src="{{ asset($course->img) }}" />
        @endif
        <div class="triangulo"></div>
        <div class="profile">
            @if(!empty($course->Admin->id))                
            <img class="photo-author img-circle" src="{{ asset('uploads/statics/user.png') }}" />


            <span class="name-author">por {{ $course->Admin->name }}</span>
            @else
            <img class="photo-author img-circle" src="{{ asset('uploads/statics/user.png') }}" />
            @endif
        </div>
        <h5 class="sub-title_detall">{{ $course->title }}</h5>
        <h2 class="title_detall">{{ $course->subtitle }}</h2>
    </div>
    </div>
    <!--Fin Header-->

    <!--intro-->

     <!-- INFO -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2 style="line-height: 25px;">{{ $course->title }}.</h2>
            <h4 style="line-height: 25px;">{!! $course->content !!}</h4>
        </div>
    </div>


    <!--fin intro-->


	<div class="row espacio">
    
   
    <!--<div class="row row-eq-height" style="padding-right:15px">-->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 text">
            <div class="row">
                <div class="container">
                    
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 text">

            <p>{{ $course->subtitle }}</p>
            <p></p>
            <p class="semi-title">{{ $course->ClasificationCourse->clasification }}</p>
            <p>{!! $course->description !!}</p>
            <p class="semi-title">Detalles</p>
            <p>Información extra que te ayudará ha conocer mas sobre este tema. </p>

            </div>
            <p>
                <div class="row">
                <div class="container">

                    @if(!empty($course->duration))
                    <div class="col-md-12">
                      <div class="update-nag">
                        <div class="update-split"><i class="glyphicon glyphicon-time"></i></div>
                        <div class="update-text"><a href="#">Duración </a><strong>{{ $course->duration }}</strong> Horas</div>
                    </div>
                </div>
                @endif
                @if(!empty($course->hourdesde))
                <div class="col-md-12">
                  <div class="update-nag">
                    <div class="update-split update-info"><i class="glyphicon glyphicon-arrow-right"></i></div>
                    <div class="update-text"><a href="#">Hora de entrada </a> {{ $course->hourdesde }} 
                        <a href="#"> H </a> </div>
                    </div>
                </div>
                @endif
                @if(!empty($course->hourhasta))
                <div class="col-md-12">
                  <div class="update-nag">
                    <div class="update-split update-success"><i class="glyphicon glyphicon-arrow-left"></i></div>
                    <div class="update-text"><a href="#">Hora de salida </a> {{ $course->hourhasta }} <a href="#">H</a> </div>
                </div>
            </div>
            @endif
            @if(!empty($course->dais))
            <div class="col-md-12">
              <div class="update-nag">
                <div class="update-split update-danger"><i class="glyphicon glyphicon-eye-open"></i></div>
                <div class="update-text"> Dias de curso <strong>{{ $course->dais }}</strong> </div>
            </div>
        </div>
        @endif
        @if(!empty($course->precio_teorico))
        <div class="col-md-12">
          <div class="update-nag">
            <div class="update-split update-success"><i class="glyphicon glyphicon-usd"></i></div>
            <div class="update-text"> <a href=""> <strong>Precio Teórico</strong> </a>
                {{ $course->precio_teorico }} $
            </div>
        </div>
    </div>
    @endif
    @if(!empty($course->precio_practico))
        <div class="col-md-12">
          <div class="update-nag">
            <div class="update-split update-success"><i class="glyphicon glyphicon-usd"></i></div>
            <div class="update-text"> <a href=""> <strong>Precio Práctico</strong> </a>
                {{ $course->precio_practico }} $
            </div>
        </div>
    </div>
    @endif
    @if(!empty($course->fechainit))
    <div class="col-md-12">
      <div class="update-nag">
        <div class="update-split update-info"><i class="glyphicon glyphicon-calendar"></i></div>
        <div class="update-text"> <a href=""> <strong>Fecha de inicio</strong> </a> 
            {{ $course->fechainit }} </div>
        </div>
    </div>
    @endif
    @if(!empty($course->disponibles))
    <div class="col-md-12">
      <div class="update-nag">
        <div class="update-split update-split"><i class="glyphicon glyphicon-calendar"></i></div>
        <div class="update-text"> <a href=""> <strong>Cupos disponible </strong> </a> 
            @if(($course->disponibles)>0)
            <span class="label label-success">Disponible</span>
            @else
            <span class="label label-danger">Agotado</span>
            @endif
        </div>
        </div>
    </div>
    @endif
    @if(!empty($files))
    <div class="col-md-12">
      <div class="update-nag">
        <div class="update-split update-success"><i class="glyphicon glyphicon-paperclip"></i></div>
        <div class="update-text"> <strong>Adjunto</strong> 
            @foreach($files as $file)
            <a href="{{ $file->ruta }}" download="{{ $file->ruta }}">
                <i class="glyphicon glyphicon-download">Descargar</i>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endif
@if(!empty($veterinary))
<div class="col-md-12">
  <div class="update-nag">
    <div class="update-split update-info"><i class="glyphicon glyphicon-info-sign"></i></div>
    <div class="update-text"> 
        @foreach($veterinary as $vet)
        <strong> <i class="glyphicon glyphicon-earphone"></i> </strong> {{ $vet->tlf1 }} {{ $vet->tlf2 }} 
        <strong> <i class="glyphicon glyphicon-phone"></i> </strong> {{ $vet->cel1 }} {{ $vet->cel2 }} 
        <strong> <i class="glyphicon glyphicon-envelope"></i> </strong> {{ $vet->mail }} 
        @endforeach
    </div>
</div>
</div>
@endif


<div class="col-md-3">
<div class="group">
    <a href="{{ url('suscribirse',$course->id) }}" class="btn btn-success " title="Separar mi cupo en este curso">Separar Cupo <span class="glyphicon glyphicon-pencil"></span></a> 
                            
                        


</div>
</div>

<div class="row">
    <div class="container">
    <div class=" col-xs-6 col-sm-6 col-md-12 col-lg-12 text">
        
    

@include('web.partials.pagina.cajas.likecompartir')


</div>
</div>
</div>



</div>
</div>                    
</p>
</div>
</div>
</div>
<!-- Sidebar // advertising -->
<div class="col-xs-12 col-sm-12 col-lg-3 col-md-3 side ">
    @if(!empty($veterinary))
    @foreach($veterinary as $veter)
    @if(!empty($veter->logo))
    <img style="max-width: 100%" src="{{ asset($veter->logo) }}" alt="Logo" />
    @endif
            <div class="col-lg-12 col-md-12 com-sm-12 col-xs-12 espacio" id="panel">
                <h2 class="class_h2">Te Informamos sin compromiso</h2>

                {!! Form::open(['url' => '/solicitainfo','method'=>'post', 'enctype'=>'multipart/form-data', 'files' => false]) !!}
                    <input name="cursoId" type="hidden" value="{{ $course->id }}">
                    <input name="cursoName" type="hidden" value="{{ $course->title }}">
                    <div class="group">
                        <input name="nombre" type="text" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Nombre</label>
                    </div>

                    <div class="group">
                        <input name="correo" type="text" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Correo</label>
                    </div>

                    <div class="group">
                        <input name="contactos" type="text" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Telefono / Celular</label>
                    </div>

                    <div class="group">
                        <input name="ciudad" type="text" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Ciudad</label>
                    </div>

                    <div class="group">
                        <input name="mensaje" type="text" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Mensaje</label>
                    </div>
                    <div class="group">
                        <center> 
                            <button type="submit" class="btn btn-warning">Solicitar Información
                                <span class="glyphicon glyphicon-send" ></span>
                            </button>
                        </center>
                    </div>
                {!! Form::close() !!}
                
            </div>
            @endforeach
            @endif                
        </div>
    <!--/div>-->
</div>


<!--comentarios facebook-->
<div id="fb-root"></div>
<script type="text/javascript">
var url = location.href;

    
</script>
<script>



    (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=673664079511464";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="row">
    <div class="container">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text">
        

<div class="fb-comments" data-href="<?php echo "http://" . $host . $url; ?>" data-width="100%" data-numposts="5" data-order-by="reverse_time">
    
</div>

</div>
</div>
</div>


<!--fin comentarios facebook-->
  


</div>
<style type="text/css">
.header{position:relative;overflow:hidden;max-height:350px;display:flex;align-items:center;justify-content:center}
.text{
    /*-webkit-column-count: 2; 
    -moz-column-count: 2; 
    column-count: 2; */  
    margin-top:15px;        
}
.statistics > p{margin-bottom:2px;}
.statistics > p > span.label{background-color:white;color:gray;}
.side{background:#fafafa;padding-top:15px}
.side > img { margin-bottom:15px;}
.semi-title{font-weight: bold;margin-top:30px;}
.title_detall{    
    position: absolute;
    bottom: 45px;
    padding: 7px;
    right: 25px;
    padding-left: 25px;
    padding-right: 30px;
    color: white;
    background: rgba(0,0,0,0.5);
}
.sub-title_detall{    
    position: absolute;
    bottom: 94px;
    padding: 7px;
    right: 25px;
    padding-left: 12px;
    padding-right: 12px;
    color: orange;
    background: rgba(0,0,0,0.7);
}        
.name-author{
    position: absolute;
    bottom: 35px;
    left: 100px;
    font-size: 11px;
    color: white;
    background: black;
    padding: 2px;
    padding-right: 10px;
    padding-left: 22px;
    margin-left: -21px;
    z-index: 1;
    font-weight: 500;            
}
.photo-author{
    max-height: 70px;
    padding: 2px;
    position: absolute;
    left: 25px;
    bottom: 25px;
    background: white;
    z-index: 3;            
}
.triangulo{
    position:absolute;
    bottom:0px;
    left:0px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 60px 0 0 1200px;
    border-color: transparent transparent transparent #ffffff;
}
.row-eq-height {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}   


@media (max-width: 426px) {
    .header{
        margin-left: -15px;
        margin-top: -15px;
        margin-right: -15px;
    }
    .title{
        font-size:15px;
        bottom:-12px;
        right:0px;
        padding-left:10px;
        padding-right:10px;
    }
    .photo-author{
        max-height:45px;
        left:5px;
        bottom:40px;
    }
    .name-author{
        font-size:9px;
        margin-left:-63px;
        bottom:44px;
    }
    .sub-title{
        right:0px;
        bottom:18px;
        padding:5px;
        font-size:10px;
    }
}



/*lista*/


.update-nag{
  display: inline-block;
  font-size: 14px;
  text-align: left;
  background-color: #fff;
  height: 40px;
  -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.2);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
  margin-bottom: 10px;
}

.update-nag:hover{
    cursor: pointer;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.4);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.3);
}

.update-nag > .update-split{
  background: #337ab7;
  width: 33px;
  float: left;
  color: #fff!important;
  height: 100%;
  text-align: center;
}

.update-nag > .update-split > .glyphicon{
  position:relative;
  top: calc(50% - 9px)!important; /* 50% - 3/4 of icon height */
}
.update-nag > .update-split.update-success{
  background: #5cb85c!important;
}

.update-nag > .update-split.update-danger{
  background: #d9534f!important;
}

.update-nag > .update-split.update-info{
  background: #5bc0de!important;
}



.update-nag > .update-text{
  line-height: 19px;
  padding-top: 11px;
  padding-left: 45px;
  padding-right: 20px;
}


/*Formulario*/


.class_h2{
    text-align: center;
    margin-bottom: 50px;
    color: #fff;
}



/* form starting stylings ------------------------------- */
.group {
    position: relative;
    margin-bottom: 35px;
}

input {
    font-size: 18px;
    padding: 5px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
}

input:focus {
    outline: none;
}

/* LABEL ======================================= */
label {
    color: #fff;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 10px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label {
    top: -20px;
    font-size: 14px;
    color: #fff;
}

/* BOTTOM BARS ================================= */
.bar {
    position: relative;
    display: block;
    width: 100%;
}

.bar:before, .bar:after {
    content: '';
    height: 2px;
    width: 0;
    bottom: 1px;
    position: absolute;
    background: #fff;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}

.bar:before {
    left: 50%;
}

.bar:after {
    right: 50%;
}



/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
    width: 50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
    position: absolute;
    height: 60%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5;
}

/* active state */
input:focus ~ .highlight {
    -webkit-animation: inputHighlighter 0.3s ease;
    -moz-animation: inputHighlighter 0.3s ease;
    animation: inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
    from {
        background: #fff;
    }

    to {
        width: 0;
        background: transparent;
    }
}

@-moz-keyframes inputHighlighter {
    from {
        background: #fff;
    }

    to {
        width: 0;
        background: transparent;
    }
}

@keyframes inputHighlighter {
    from {
        background: #fff;
    }

    to {
        width: 0;
        background: transparent;
    }
}


#panel {
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%);
    background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Firefox 3.6 to 15 */
    background: linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* Standard syntax (must be last) */
    
    
    border-radius: 4px;
    top: 50px;
}


</style>

@stop
