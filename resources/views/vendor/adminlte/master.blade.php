<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
@yield('title', config('adminlte.title', 'Veterinaria'))
@yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">
    <!-- Select tags -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/select2.min.css') }}">
    <!-- Datepicker  -->
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  -->
    <link href="{{ asset('vendor/adminlte/plugins/datepicker/bootstrap.min.css') }}" rel="stylesheet">  
      <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
  <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">-->
  <link href="{{ asset('vendor/adminlte/plugins/datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">
  <script src="{{ asset('vendor/adminlte/plugins/datepicker/jquery/1.9.1/jquery.js') }}"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>-->
  <script src="{{ asset('vendor/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
  <script src="{{ asset('vendor/adminlte/plugins/datepicker/jquery.js') }}"></script> 
  <!-- Fin Datepicker  -->


  <!-- datatables  -->

    
  <link href="{{ asset('vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  
    
  <script src="{{ asset('vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script> 
  <script src="{{ asset('vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script> 
    
    
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>     
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script> 
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script> 
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script> 
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script> 

    
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css" rel="stylesheet">



  <!-- datatables  -->


    
    



    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  -->
     <link href="{{ asset('vendor/adminlte/plugins/datepicker/2bootstrap-datepicker.css') }}" rel="stylesheet">  

    <script src="{{ asset('vendor/adminlte/plugins/datepicker/2jquery.js') }}"></script>  

    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->
    <script src="{{ asset('vendor/adminlte/plugins/datepicker/2bootstrap.min.js') }}"></script>  

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  -->
     <script src="{{ asset('vendor/adminlte/plugins/datepicker/2bootstrap-datepicker.js') }}"></script>  

    <!-- Select2 -->
    {!! Html::style('plugins/select2/dist/css/select2.min.css') !!}
    <!-- Select2 -->
    {!! Html::script('plugins/select2/dist/js/select2.full.min.js') !!}


    <!-- Tinymce -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{ asset('vendor/adminlte/plugins/tinymce/tinymce.min.js') }}"></script>
    


    <!-- Dropzone -->
    <script type="text/javascript" src="{{ asset('vendor/adminlte/plugins/dropzone/dropzone.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/adminlte/plugins/dropzone/dropzone.min.css') }}">
    
    @if(config('adminlte.plugins.datatables'))
        <!-- DataTables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    @endif

    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition @yield('body_class')">

@yield('body')

<script src="{{ asset('vendor/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/plugins/select2.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/bootstrap/js/bootstrap.min.js') }}"></script>




<!--editor-->

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>






@if(config('adminlte.plugins.datatables'))
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

         
@endif

@yield('adminlte_js')

</body>
</html>
