@extends('adminlte::page')

@section('content')
@include('errors.success')
<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Albun #{{ $albun->id }}</div>
            <div class="panel-body">
                <a href="{{ url('/admin/albun') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                <br />
                <br />

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                {!! Form::model($albun, [
                    'method' => 'PATCH',
                    'url' => ['/admin/albun', $albun->id],
                    'class' => 'form-horizontal',
                    'files' => true
                    ]) !!}




                    @include ('admin.albun.form', ['submitButtonText' => 'Actualizar'])




                    {!! Form::close() !!}


                    <?Php $i = 1;?>


                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Destacado</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($images as $item)
                                <tr>
                                    <td><?Php echo $i; ?></td>
                                    <td>{{ $item->file_name }}</td>
                                    <td>
                                        <a href="{{ url($item->file_path) }}" target="_blank">
                                            <img src="{{ asset($item->file_path) }}" class="navbar-brand navbar-brand-logo brand-centered">
                                        </a>
                                    </td>
                                    <td>
                                        @if(($item->destacada)=='1')
                                        <small class="label pull-right bg-green">Activado</small>
                                        @else
                                        <small class="label pull-right bg-red">Desactivado</small>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/admin/image/' . $item->id . '/edit') }}" title="Editar Imagen"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                        {!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['/admin/image', $item->id],
                                            'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                            'type' => 'submit',
                                            'class' => 'btn btn-danger btn-xs',
                                            'title' => 'Eliminar imagen',
                                            'onclick'=>'return confirm("Desea eliminar esta imagen?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    <?Php $i++;?>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
