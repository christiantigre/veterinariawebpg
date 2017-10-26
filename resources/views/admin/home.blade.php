@extends('adminlte::page')

@section('title', 'Admin Veterinaria')


@section('content_header')
<h1>Administrador</h1>
@stop

@section('content')



<!--datatables-->
@if(count($inscripciones)>0)
<p>Suscripciónes y solitud de cupos en los cursos</p>
{!! Form::open(['method' => 'GET', 'url' => '/admin/inicio', 'class' => 'navbar-form navbar-left', 'role' => 'search'])  !!}
<div class="panel-footer">
<div class="input-group">

<div class="form-group">
    {!! Form::label('Buscar_por_curso', 'Buscar por curso', ['class' => 'col-md-2 control-label']) !!}
    
        {!! Form::select('curso_id', $cursos, null, ['class' => 'form-control']) !!}

        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Buscar', ['class' => 'btn btn-primary']) !!}


            </div>


</div>

</div>
{!! Form::close() !!}
{!! Form::open(['method' => 'POST', 'url' => '/admin/exportarexcel', 'class' => 'navbar-form navbar-left', 'role' => 'search'])  !!}
<div class="panel-footer">
<div class="input-group">

<div class="form-group">
    {!! Form::label('exportar_por_curso', 'Exportar por curso', ['class' => 'col-md-2 control-label']) !!}
    
        {!! Form::select('curso_id', $cursos, null, ['class' => 'form-control']) !!}

        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Exportar', ['class' => 'btn btn-primary']) !!}


            </div>


</div>

</div>
{!! Form::close() !!}
<table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>Curso</th>
			<th>Nombre</th>
			<th>Contacto</th>
			<th>Correo</th>
			<th>Estado</th>
			<th>Acción</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>Curso</th>
			<th>Nombre</th>
			<th>Contacto</th>
			<th>Correo</th>
			<th>Estado</th>
			<th>Acción</th>
		</tr>
	</tfoot>
	<tbody>
		@foreach($inscripciones as $item)
		<tr>
			<td>{{ $item->Course->title }}</td>
			<td>{{ $item->nombres }} {{ $item->apellidos }}</td>
			<td>{{ $item->celular }} {{ $item->telefono }}</td>
			<td>{{ $item->correo }}</td>
			<td>
				@if(($item->tipesuscription_id)==1)
				<small class="label label-warning">En espera</small>
				@endif
				@if(($item->tipesuscription_id)==2)
				<small class="label label-success">Aprobado</small>
				@endif
				@if(($item->tipesuscription_id)==3)
				<small class="label label-info">Finalizado</small>
				@endif
			</td>
			<td>
				<a href="{{ url('/admin/suscribir/' . $item->id) }}" title="View Suscribir"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
<p>No hay suscipciónes</p>
@endif









<script>
  /*$(function () {
    $('#example').DataTable()
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
})*/
$(document).ready(function() {
	$('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
		'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
} );

</script>









<!--fin datatables-->




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop