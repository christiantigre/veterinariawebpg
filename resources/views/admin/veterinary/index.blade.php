@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Veterinary</div>
                    <div class="panel-body">
                        @if(count($veterinary)=='1')
                            
                        @else
                        <a href="{{ url('/admin/veterinary/create') }}" class="btn btn-success btn-sm" title="Add New Veterinary">
                            <i class="fa fa-plus" aria-hidden="true"></i> Configurar
                        </a>
                        @endif
                        

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/veterinary', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Telefono</th>
                                        <th>Celular</th>
                                        <th>logo</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($veterinary as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->tlf1 }} {{ $item->tlf2 }}</td>
                                        <td>{{ $item->cel1 }} {{ $item->cel2 }}</td>
                                        <td><img src="{{ asset($item->logo) }}" class="navbar-brand navbar-brand-logo brand-centered"></td>
                                        <td>
                                            <a href="{{ url('/admin/veterinary/' . $item->id) }}" title="View Veterinary"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/veterinary/' . $item->id . '/edit') }}" title="Edit Veterinary"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/veterinary', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Veterinary',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $veterinary->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
