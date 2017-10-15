@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Noticia {{ $notice->title }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/notices') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/notices/' . $notice->id . '/edit') }}" title="Edit Notice"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/notices', $notice->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Notice',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $notice->id }}</td>
                                    </tr>
                                    <tr><th> Titulo </th><td> {{ $notice->title }} </td></tr>
                                    <tr><th> Introducción </th><td> {{ $notice->intro }} </td></tr>
                                    <tr><th> Contenido </th><td> {!! $notice->content !!} </td></tr>
                                    <tr><th> Link </th><td> {{ $notice->link }} </td></tr>
                                    <tr><th> Imagen </th>
                                        <td>
                                            @if(empty($notice->img))
                                            No hay imagen
                                            @else
                                            <img class="img img-responsive" src="{{ asset( $notice->img ) }}"></img>
                                            @endif
                                          </td>
                                    </tr>
                                    <tr><th> Dia </th><td> {{ $notice->link }} </td></tr>
                                    <tr><th> Mes </th><td> {{ $notice->link }} </td></tr>
                                    <tr><th> Compartidos facebook </th><td> {{ $notice->compfb }} </td></tr>
                                    <tr><th> Compartidos twitter </th><td> {{ $notice->compfbtw }} </td></tr>
                                    <tr><th> Compartidos google + </th><td> {{ $notice->compgg }} </td></tr>
                                    <tr>
                                        <th> Visible </th><td> 
                                            @if(($notice->visible)=='1')
                                            Activo
                                            @else
                                            In-Activo
                                            @endif
                                         </td>
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
