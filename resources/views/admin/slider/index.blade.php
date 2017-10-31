@extends('adminlte::page')

@section('content')
@include('errors.success')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Slider</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/slider/create') }}" class="btn btn-success btn-sm" title="Add New Slider">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/slider', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Imagen</th><th>Titulo</th><th>Introducción</th><th>Acciónes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($slider as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td><img src="{{ asset($item->img) }}" class="navbar-brand navbar-brand-logo brand-centered"></td><td>{{ $item->title }}</td><td>{!! str_limit($item->intro,50) !!}</td>
                                        <td>
                                            <a href="{{ url('/admin/slider/' . $item->id) }}" title="View Slider"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/slider/' . $item->id . '/edit') }}" title="Edit Slider"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/slider', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Slider',
                                                        'onclick'=>'return confirm("Desea eliminarlo?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $slider->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
