<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Austrogen, Es una Asociación de Medico Veterinarios encaminados a satisfacer las necesidades del sector agropecuario mediante la implementación de programas de mejoramiento y mantenimiento de biodiversidad genética, prevención de enfermedades implementación y ejecución de proyectos agropecuarios, capacitación e innovación de tecnologías. Orientados a mantener el bienestar animal, preservando el medio ambiente y dinamizando la producción que garantice el buen vivir." name="description"/>
    <meta content="Christian Andres Tigre C." name="author"/>

    <meta name="copyright" content="&copy; 2017 Austrogen."/>

    <meta name="keywords" content="Austrogen, austrogen, cursos, veterinaria, veterinarios, seminarios, inseminicasion, Azuay, Cuenca, Ecuador, Biblian">
    <title>
        @yield('title','Austrogen')
    </title>
    <link rel="shortcut icon" href="{{ asset('uploads/logos/favicon.ico') }}" />
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('theme/bootstrap/css/bootstrap.css') }}" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('theme/css/slider-filter.css') }}" rel="stylesheet"/>
    <link href="{{ asset('theme/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins|Ubuntu" rel="stylesheet"/>


    <!-- Datepicker  -->
    <link href="{{ asset('theme/pluging/datepicker/bootstrap-min.css') }}" rel="stylesheet">  
    <link href="{{ asset('theme/pluging/datepicker/2bootstrap-min.css') }}" rel="stylesheet">  
    <link href="{{ asset('theme/pluging/datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">  
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">-->
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>-->

      <script src="{{ asset('theme/pluging/datepicker/jquery.js') }}"></script>
      <script src="{{ asset('theme/pluging/datepicker/bootstrap-datepicker.js') }}"></script>

      <!-- Fin Datepicker  -->






      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>


  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">



</head>
<!--oncontextmenu="return false" onkeydown="return false"-->
<body>



    <!--***********************************************FORMULARIO BUSQUEDA**************************************-->
    @include('web.partials.pagina.formsearch') 
    
    <!--***********************************************FIN FORMULARIO BUSQUEDA**************************************-->




    
    <!--***********************************************COLOR DE HEADER****************************************-->
    <div class="top-color">
    </div>
    <!--***********************************************FIN COLOR DE HEADER****************************************-->



    <!--***********************************************DATOS HEADER****************************************-->
    @include('web.partials.pagina.info-header')    

    <!--*********************************************FIN DATOS HEADER***************************************-->



    <div class="row top-bar">
    </div>




    <!--************************************************MENU***************************************-->
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        @include('web.partials.pagina.menu')    
    </div>
    <!--************************************************FIN MENU***************************************-->
    <div class="container">
        @include('web.partials.errors.success')
    </div>


    @yield('content')




    <!--***************************FOOTER*********************************-->
    @include('web.partials.pagina.footer')    
    <!--***************************FIN FOOTER*********************************-->





    <!--***************************SCRIPTS JAVASCRIPT*********************************-->

        <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="{{ asset('theme/assets/js/jquery.min.js') }}">
            </script>
            <script src="{{ asset('theme/bootstrap/js/bootstrap.min.js') }}">
            </script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="{{ asset('theme/assets/js/ie10-viewport-bug-workaround.js') }}">
            </script>
            <script src="{{ asset('theme/js/jquery-3.2.1.js') }}" type="text/javascript">
            </script>
            <!--<script src="theme/js/jquery2-1-4.js" type="text/javascript">
            </script'>-->
            <script src="{{ asset('theme/js/main.js') }}" type="text/javascript">
            </script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
            </script>
            <!--***************************FIN SCRIPTS JAVASCRIPT*********************************-->

        </body>
        </html>
