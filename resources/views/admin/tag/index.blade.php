@extends('adminlte::page')

@section('content')
@include('errors.success')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Etiquetas</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/tag/create') }}" class="btn btn-success btn-sm" title="Add New Tag">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/tag', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Etiqueta</th><th>Descripción</th><th>Estado</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tag as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->tag }}</td><td>{{ $item->description }}</td><td>
                                            @if(($item->visible)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/admin/tag/' . $item->id) }}" title="View Tag"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/tag/' . $item->id . '/edit') }}" title="Edit Tag"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/tag', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Tag',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $tag->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
