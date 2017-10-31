@extends('adminlte::page')

@section('content')
@include('errors.success')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Modalidad</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/modalidad/create') }}" class="btn btn-success btn-sm" title="Add New Modalidad">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nueva
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/modalidad', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Modalidad</th><th>Is Active</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($modalidad as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->modalidad }}</td><td>{{ $item->is_active }}</td>
                                        <td>
                                            <a href="{{ url('/admin/modalidad/' . $item->id) }}" title="View Modalidad"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/modalidad/' . $item->id . '/edit') }}" title="Edit Modalidad"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/modalidad', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Modalidad',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $modalidad->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
