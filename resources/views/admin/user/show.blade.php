@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">User {{ $user->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/user') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/user/' . $user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/user', $user->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete User',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Username </th><td> {{ $user->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nombres </th><td> {{ $user->nombres }} </td>
                                    </tr>
                                    <tr>
                                        <th> Apellidos </th><td> {{ $user->apellidos }} </td>
                                    </tr>

                                    <tr>
                                        <th> Fecha nacimiento </th><td> {{ $user->fecha_nacimiento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Contactos </th><td> {{ $user->telefono }} / {{ $user->celular }} </td>
                                    </tr>
                                    <tr>
                                        <th> Domicilio </th><td> {{ $user->domicilio }} </td>
                                    </tr>
                                    <tr>
                                        <th> Correo </th><td> {{ $user->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> Imagen </th>
                                        <td> 
                                        @if(empty($user->img))
                                            <center>-</center>
                                            @else
                                            <img src="{{ asset($user->img) }}" class="img img-responsive">
                                            @endif
                                            </td>
                                    </tr>
                                    <tr><th> Estado </th><td> 
                                        @if(($user->activo)=='1')
                                            <small class="label pull-left bg-green">Activado</small>
                                        @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                        @endif
                                    </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
