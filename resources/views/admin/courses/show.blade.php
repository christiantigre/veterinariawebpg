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
                                        <th> Title </th><td> {{ $course->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> Content </th><td> {{ $course->content }} </td>
                                    </tr>
                                    <tr>
                                        <th> Img </th><td> {{ $course->img }} </td>
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
