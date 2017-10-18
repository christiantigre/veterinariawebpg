@extends('adminlte::page')

@section('content') 
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Course {{ $course->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/courses') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/courses/' . $course->id . '/edit') }}" title="Edit Course"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/courses', $course->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Course',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $course->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Titulo </th><td> {{ $course->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> Sub Titulo </th><td> {{ $course->subtitle }} </td>
                                    </tr>
                                    <tr>
                                        <th> Introducción </th><td> {!! $course->content !!} </td>
                                    </tr>

                                    <tr>
                                        <th> Contenido </th><td> {!! $course->description !!} </td>
                                    </tr>
                                    <tr>
                                        <th> Horas del curso </th><td> {!! $course->hours !!} </td>
                                    </tr>
                                    <tr>
                                        <th> Horario </th><td> 
                                            Desde {!! $course->hourdesde !!} Hasta {!! $course->hourhasta !!}</td>
                                    </tr>
                                    <tr>
                                        <th> Dias de curso </th><td> {!! $course->dais !!} </td>
                                    </tr>

                                    <tr>
                                        <th> Precio </th><td> {!! $course->precio !!} </td>
                                    </tr>
                                    <tr>
                                        <th> Fecha de inicio </th><td> {!! $course->fechainit !!} </td>
                                    </tr>

                                    <tr>
                                        <th> Enlace para mas detalles </th><td> {!! $course->link !!} </td>
                                    </tr>

                                    <tr>
                                        <th> Nombre para slider </th><td> {!! $course->nameslider !!} </td>
                                    </tr>
                                    <tr>
                                        <th> Activo </th>
                                        <td> @if(($course->visible)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Mostrar en carrusel </th>
                                        <td> @if(($course->visibleslider)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Clasificación </th><td> {!! $course->ClasificationCourse->clasification !!} </td>
                                    </tr>
                                    <tr>
                                        <th> Imagen </th>
                                        <td>
                                            @if(empty($course->img))
                                            No hay imagen
                                            @else
                                            <img class="img img-responsive" src="{{ asset( $course->img ) }}"></img>
                                            @endif
                                          </td>
                                    </tr>
                                    <tr>
                                        <th> Archivos </th>
                                        <td> 
                                            <ul>
                                            @foreach($files as $file)
                                            <li>
                                            <a href="{{ $file->ruta }}" download="{{ $file->ruta }}">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="glyphicon glyphicon-download">Descargar</i>
                                                </button>
                                            </a>
                                            </li>
                                            @endforeach
                                            </ul>
                                        </td>
                                    </tr>

                                            
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
