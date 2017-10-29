{!! Form::open(['method' => 'POST'])  !!}
{{ csrf_field() }}

<meta name="csrf-token" content="{{ csrf_token() }}">

<input type="text" autocomplete="off" class="form-control input-sm buscarcampo" maxlength="64" placeholder="Buscar..." style="padding-left: 20px; border-radius: 40px;" name="campobuscar" id="campobuscar" />
<button type="submit" class="btn btn-primary btn-sm postbutton" style="border-radius: 20px; ">         
    <i class="fa fa-search"></i>                                   
</button>

<script>

    var campobuscar = $("#campobuscar").val();
    var CSRF_TOKEN =  $('meta[name="csrf-token"]').attr('content');
    $(".postbutton").click(function(event){
        event.preventDefault();
        $.ajax({
            headers: { 'csrftoken' : '{{ csrf_token() }}' },
            url: '{{ url("/busquedas") }}',
            type: 'POST',
            data: {_token: CSRF_TOKEN, message: campobuscar},
            dataType: 'JSON',
            
            success: function (data) { 
                console.log(data);
                $(".buscarcampo").val("");               
                $('.rowresultados').html(data);
                var res = data; 
                 location.href="{{ url('resultsearch', ['data' => "+res+"])}}";
                //$('#resultados').html(data);
            }
        }); 
    });   
    
</script>

<div id="resultados">
    
</div>

{!! Form::close() !!}