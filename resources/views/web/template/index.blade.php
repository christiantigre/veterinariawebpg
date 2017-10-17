<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
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
    


    
<!--****************************BANNER MENU ACORDEON**********************************-->
<div class="container-fluid">
    <div class="row">
    @include('web.partials.pagina.hormenu')    
        
        <!--*******************************SLIDER CORRUSEL*********************************-->
    @include('web.partials.pagina.carrusel')    
    </div>
</div>
<!--**************************CARRUSEL IMAGEN*******************************-->
</div>
<!--************************************************FIN MENU***************************************-->


<!--************************************************PREVIO CARRUSEL PRODUCTOS************************************************-->
    @include('web.partials.pagina.carruselCourses')    
<!--************************************************FIN PREVIO CARRUSEL PRODUCTOS********************************************-->






<!--************************************************PREVIO TARJETAS************************************************-->
    <!-- @include('web.partials.pagina.cardnew')  -->
<!--************************************************FIN PREVIO TARJETAS********************************************-->




<!--**************************Tarjetas de presentacion de socios********************-->
    {{-- <!--@include('web.partials.pagina.cardpresentation')-->    --}}
<!--**************************Fin Tarjetas de presentacion de socios********************-->







<!--************************************************NOTAS********************************************-->
    @include('web.partials.pagina.notes')    
<!--************************************************FIN NOTAS********************************************-->






<!--************************************************NOTICIAS && EVENTOS*********************************************-->
    @include('web.partials.pagina.notice')    
<!--**********************************************FIN NOTICIAS && EVENTOS*********************************************-->




<!--******************************GALERIA******************************************-->
    @include('web.partials.pagina.galery')    
<!--******************************FIN GALERIA******************************************-->



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
            <!--<script src="{{ asset('theme/js/jquery2-1-4.js') }}" type="text/javascript">
            </script>-->
            <script src="{{ asset('theme/js/search.js') }}" type="text/javascript">
            </script>
            <script src="{{ asset('theme/js/main.js') }}" type="text/javascript">
            </script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
            </script>
            <!--***************************FIN SCRIPTS JAVASCRIPT*********************************-->

        </body>
    <!--
paginas ejemplos
1-http://www.dogtorscat.com/
2-http://laclinicaveterinaria.com/
-->
</html>
