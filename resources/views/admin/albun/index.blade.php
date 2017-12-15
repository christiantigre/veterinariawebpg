@extends('adminlte::page')

@section('content')
@include('errors.success')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Albun</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/albun/create') }}" class="btn btn-success btn-sm" title="Add New Albun">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/albun', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Albun</th>
                                        <th>Detalle</th>
                                        <th>Categoria</th>
                                        <th>Elementos</th>
                                        <th>Estado</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($albun as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->namealbun }}</td>
                                        <td>{{ str_limit($item->description,60) }}</td>
                                        <td>{{ $item->Category->category }}</td>
                                        <td>{{ $item->images->count() }}</td>
                                        <td>
                                        @if(($item->active)=='1')
                                                <small class="label pull-right bg-green">Activado</small>
                                            @else
                                            <small class="label pull-right bg-red">Desactivado</small>
                                            @endif
                                        </td>
                                        <td style="width: 350px;">
                                            <a href="{{ url('/admin/uploadtoalbun/' . $item->category_id.'/'.$item->id) }}" title="Subir Imagenes">
                                                <button class="btn btn-default btn-xs"><i class="fa fa-upload" aria-hidden="true"></i> Subir</button>
                                            </a>
                                            <a href="{{ url('/admin/albun/' . $item->id) }}" title="Ver Albun">
                                                <button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button>
                                            </a>
                                            <a href="{{ url('/admin/albun/' . $item->id . '/edit') }}" title="Editar Albun">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
                                            </a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/albun', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Eliminar Albun',
                                                        'onclick'=>'return confirm("Desea eliminar este albun?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                            <a href="{{ url('/admin/image/' . $item->id . '/varios') }}" title="Editar Imagen"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i> Varios</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $albun->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
@endsection
