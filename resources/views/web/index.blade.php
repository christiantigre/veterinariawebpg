<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title>
        @yield('title','Veterinaria')
    </title>
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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
</head>
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

@yield('content')




<!--***************************FOOTER*********************************-->
    @include('web.partials.pagina.footer')    
<!--***************************FIN FOOTER*********************************-->





<!--***************************SCRIPTS JAVASCRIPT*********************************-->

        <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="theme/assets/js/jquery.min.js">
            </script>
            <script src="theme/bootstrap/js/bootstrap.min.js">
            </script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="theme/assets/js/ie10-viewport-bug-workaround.js">
            </script>
            <script src="theme/js/jquery-3.2.1.js" type="text/javascript">
            </script>
            <!--<script src="theme/js/jquery2-1-4.js" type="text/javascript">
            </script>-->
            <script src="theme/js/main.js" type="text/javascript">
            </script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
            </script>
            <!--***************************FIN SCRIPTS JAVASCRIPT*********************************-->

        </body>
</html>
