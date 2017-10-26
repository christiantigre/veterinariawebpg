@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Suscripciónes</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/suscribir/create') }}" class="btn btn-success btn-sm" title="Add New Suscribir">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nueva
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/suscribir', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>Curso</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Estado</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($suscribir as $item)
                                    <tr>
                                        <td>{{ $item->Course->title }}</td>
                                        <td>{{ $item->nombres }} {{ $item->apellidos }}</td>
                                        <td>{{ $item->correo }}</td>
                                        <td>
                                            @if(($item->tipesuscription_id)=='1')
                                                <small class="label label-warning">En espera</small>
                                            @endif
                                          @if(($item->tipesuscription_id)=='2')
                                            <small class="label label-success">Aprobado</small>
                                          @endif
                                          @if(($item->tipesuscription_id)=='3')
                                            <small class="label label-info">Finalizado</small>
                                          @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/admin/suscribir/' . $item->id) }}" title="View Suscribir"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/suscribir/' . $item->id . '/edit') }}" title="Edit Suscribir"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/suscribir', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Suscribir',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $suscribir->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
