@extends('adminlte::page')

@section('content')
@include('errors.success')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Subcategoria</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/subcategory/create') }}" class="btn btn-success btn-sm" title="Add New Subcategory">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/subcategory', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th>
                                        <th>Subcategoria</th>
                                        <th>Contenido</th>
                                        <th>Categoria</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($subcategory as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->subcategory }}</td>
                                        <td>{{ $item->content }}</td>
                                        <td>{{ $item->Category->category }}</td>
                                        <td>
                                            <a href="{{ url('/admin/subcategory/' . $item->id) }}" title="View Subcategory"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/subcategory/' . $item->id . '/edit') }}" title="Edit Subcategory"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/subcategory', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Subcategory',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $subcategory->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
