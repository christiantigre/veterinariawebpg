@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Nota #{{ $note->title }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/notes') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/notes/' . $note->id . '/edit') }}" title="Edit Note"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/notes', $note->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Note',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $note->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Titulo </th><td> {{ $note->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> Sub Titulo </th><td> {{ $note->subtitle }} </td>
                                    </tr>
                                    <tr>
                                        <th> Introducción </th><td> {!! $note->intro !!} </td>
                                    </tr>
                                    <tr>
                                        <th> Descripción </th><td> {!! $note->description !!} </td>
                                    </tr>
                                    <tr>
                                        <th> Link </th><td> {{ $note->link }} </td>
                                    </tr>                                    
                                    <tr>
                                        <th> Imagen Encabesado </th><td>
                                            @if(empty($note->imgHeader))
                                            No hay imagen
                                            @else
                                            <img class="img img-responsive" src="{{ asset( $note->imgHeader ) }}"></img>
                                            @endif
                                          </td>
                                    </tr>
                                    <tr>
                                        <th> Link </th><td> {{ $note->link }} </td>
                                    </tr>
                                    <tr>
                                        <th> Visible </th><td> 
                                            @if(($note->visible)=='1')
                                            Activo
                                            @else
                                            In-Activo
                                            @endif
                                         </td>
                                    </tr> 
                                    <tr>
                                        <th> Vista principal </th><td> 
                                            @if(($note->webvisible)=='1')
                                            Activo
                                            @else
                                            In-Activo
                                            @endif
                                         </td>
                                    </tr> 
                                    <tr>
                                        <th> Visitas </th><td> 
                                            {{ $note->visit }}
                                         </td>
                                    </tr> 
                                    <tr>
                                        <th> Me gusta </th><td> 
                                            {{ $note->like }}
                                         </td>
                                    </tr> 
                                    <tr>
                                        <th> Compartidos </th><td> 
                                            {{ $note->share }}
                                         </td>
                                    </tr> 
                                    <tr>
                                        <th> Etiquetas </th><td> 
                                            {{ $note->Tag->tag }}
                                         </td>
                                    </tr> 
                                    <tr>
                                        <th> Publicado por </th><td> 
                                            {{ $note->Admin->name }}
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
