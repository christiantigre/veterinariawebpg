@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Socio #{{ $socio->name }} {{ $socio->lastame }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/socios') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/socios/' . $socio->id . '/edit') }}" title="Edit Socio"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/socios', $socio->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Socio',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $socio->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Imagen </th>
                                        <td> 
                                        @if(empty($socio->img))
                                            <center>-</center>
                                            @else
                                            <img src="{{ asset($socio->img) }}" class="img img-responsive">
                                            @endif
                                            </td>
                                    </tr>
                                    <tr><th> Introducción </th><td> {!! $socio->intro !!} </td></tr>
                                    <tr><th> Description </th><td> {!! $socio->description !!} </td></tr>
                                    <tr><th> Name </th><td> {{ $socio->name }} </td></tr>
                                    <tr><th> Abreviatura Título </th><td> {{ $socio->abrevTitulo }} </td></tr>
                                    <tr><th> Especialización </th><td> {{ $socio->especialitation }} </td></tr>
                                    <tr><th> Facebook </th><td> <a href="{{ $socio->fb }}">{{ $socio->fb }}</a> </td></tr>
                                    <tr><th> twitter </th><td> <a href="{{ $socio->tw }}">{{ $socio->tw }}</a> </td></tr>
                                    <tr><th> Instagram </th><td> <a href="{{ $socio->in }}">{{ $socio->in }}</a> </td></tr>
                                    <tr><th> Google + </th><td> <a href="{{ $socio->gg }}">{{ $socio->gg }}</a> </td></tr>
                                    <tr><th> LikedIn </th><td> <a href="{{ $socio->lk }}">{{ $socio->lk }}</a> </td></tr>
                                    <tr><th> Blog Personal </th><td> <a href="{{ $socio->blog }}">{{ $socio->blog }}</a> </td></tr>
                                    <tr><th> Lugar de trabajo </th><td> {{ $socio->workplace }} </td></tr>
                                    <tr><th> Link pagina de empresa </th><td> <a href="{{ $socio->workplacelink }}">{{ $socio->workplacelink }}</a> </td></tr>
                                    <tr><th> Estado </th><td> 
                                        @if(($socio->is_active)=='1')
                                            Activo
                                        @else
                                            Inactivo
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
