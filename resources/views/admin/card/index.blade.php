@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevos temas</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/card/create') }}" class="btn btn-success btn-sm" title="Add New Card">
                            <i class="fa fa-plus" aria-hidden="true"></i> Crear
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/card', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>Titulo</th>
                                        <th>Subtitulo</th>
                                        <th>Contenido</th>
                                        <th>contenido</th>
                                        <th>Cabecera</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($card as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td><td>{{ $item->subtitle }}</td>
                                        <td>{{ str_limit($item->paragraph,120) }}</td>
                                        <td>
                                            @if(empty($item->img))
                                            <center>-</center>
                                            @else
                                            <img src="{{ asset($item->img) }}" class="img img-responsive">
                                            @endif
                                        </td>
                                        <td>
                                            @if(empty($item->imgHeader))
                                            <center>-</center>
                                            @else
                                            <img src="{{ asset($item->imgHeader) }}" class="img img-responsive">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/admin/card/' . $item->id) }}" title="View Card"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/card/' . $item->id . '/edit') }}" title="Edit Card"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/card', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Card',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $card->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
