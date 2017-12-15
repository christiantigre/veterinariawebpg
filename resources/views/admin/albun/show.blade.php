@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Albun {{ $albun->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/albun') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/albun/' . $albun->id . '/edit') }}" title="Edit Albun"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/albun', $albun->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Albun',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}

                        <a href="{{ url('/admin/uploadtoalbun/' . $albun->category_id.'/'.$albun->id) }}" title="Subir Imagenes">
                                                <button class="btn btn-default btn-xs"><i class="fa fa-upload" aria-hidden="true"></i> Subir</button>
                                            </a>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $albun->id }}</td>
                                    </tr>
                                    <tr><th> Albun </th><td> {{ $albun->namealbun }} </td></tr><tr><th> Descripción </th><td> {{ $albun->description }} </td></tr><tr><th> Estado </th><td> @if(($albun->active)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif </td></tr>
                                            <tr>
                                                <th>Categoría</th>
                                                <td>{{ $albun->Category->category }}</td>
                                            </tr>
                                            <tr>
                                                <th>Elementos</th>
                                        <td>{{ $albun->images->count() }}</td>
                                            </tr>
                                </tbody>
                            </table>
                            <style type="text/css">

                            #gallery-images img{
                                width: 240px;
                                height: 160px;
                                border: 2px solid black;
                                margin-bottom: 10px;
                            }
                            #gallery-images ul{
                                margin: 0;
                                padding: 0;
                            }
                            #gallery-images li{
                                margin: 0;
                                padding: 0;
                                list-style: none;
                                float: left;
                                padding-right: 5px;
                            }
                        </style>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div id="gallery-images">
                                    <ul>
                                    {{-- $albunmodel->images --}}

                                        @foreach($albun->images as $image)
                                            <li>
                                                <a href="{{ url($image->file_path) }}" target="_blank">
                                                    <img src="{{ asset($image->file_path) }}">
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
