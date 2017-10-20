@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Veterinary #{{ $veterinary->name }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/veterinary') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/veterinary/' . $veterinary->id . '/edit') }}" title="Edit Veterinary"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/veterinary', $veterinary->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {{--
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Veterinary',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                            --}}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $veterinary->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nombre </th>
                                        <td> {{ $veterinary->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Dirección </th><td> {{ $veterinary->address }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefono1 </th>
                                        <td> {{ $veterinary->tlf1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefono 2 </th>
                                        <td> {{ $veterinary->tlf2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Celular 1 </th>
                                        <td> {{ $veterinary->cel1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Celular 2 </th>
                                        <td> {{ $veterinary->cel2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Fax </th>
                                        <td> {{ $veterinary->fax }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $veterinary->mail }} </td>
                                    </tr>
                                    <tr>
                                        <th> Pagina web </th>
                                        <td> {{ $veterinary->linkweb }} </td>
                                    </tr>
                                    <tr>
                                        <th> Propietario </th>
                                        <td> {{ $veterinary->prop }} </td>
                                    </tr>
                                    <tr>
                                        <th> Gerente </th>
                                        <td> {{ $veterinary->genent }} </td>
                                    </tr>
                                    <tr>
                                        <th> Area especialización </th>
                                        <td> {{ $veterinary->area }} </td>
                                    </tr>
                                    <tr>
                                        <th> Descripción </th>
                                        <td> {!! $veterinary->description !!} </td>
                                    </tr>
                                    <tr>
                                        <th> logo </th>
                                        <td> {{ $veterinary->namelogo }} 
                                            <img src="{{ asset($veterinary->logo) }}" class="navbar-brand navbar-brand-logo brand-centered">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Fecha de inicio </th>
                                        <td> {{ $veterinary->datestart }} </td>
                                    </tr>
                                    <tr>
                                        <th> Ruc </th>
                                        <td> {{ $veterinary->ruc }} </td>
                                    </tr>
                                    <tr>
                                        <th> Razon Social </th>
                                        <td> {{ $veterinary->razonsocial }} </td>
                                    </tr>
                                    <tr>
                                        <th> Facebook </th>
                                        <td> {{ $veterinary->fb }} </td>
                                    </tr>                                    
                                    <tr>
                                        <th> Twitter </th>
                                        <td> {{ $veterinary->tw }} </td>
                                    </tr>

                                    <tr>
                                        <th> Instagram </th>
                                        <td> {{ $veterinary->in }} </td>
                                    </tr>

                                    <tr>
                                        <th> Youtube </th>
                                        <td> {{ $veterinary->yt }} </td>
                                    </tr>

                                    <tr>
                                        <th> Google + </th>
                                        <td> {{ $veterinary->gg }} </td>
                                    </tr>
                                    <tr>
                                        <th> Misión </th>
                                        <td> {!! $veterinary->mision !!} </td>
                                    </tr>
                                    <tr>
                                        <th> Visión </th>
                                        <td> {!! $veterinary->vision !!} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
