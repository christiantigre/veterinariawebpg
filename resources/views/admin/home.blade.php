@extends('adminlte::page')

@section('title', 'Admin Veterinaria')


@section('content_header')
<h1>Administrador</h1>
@stop

@section('content')

<!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Suscritos al curso : namecurso</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Info. <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Solicitud de cupos</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Info. <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Info. <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

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