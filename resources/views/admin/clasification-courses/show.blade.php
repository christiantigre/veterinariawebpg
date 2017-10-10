@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Clase {{ $clasificationcourse->clasification }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/clasification-courses') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/clasification-courses/' . $clasificationcourse->id . '/edit') }}" title="Edit ClasificationCourse"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/clasificationcourses', $clasificationcourse->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete ClasificationCourse',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $clasificationcourse->id }}</td>
                                    </tr>
                                    <tr><th> Clasificación </th><td> {{ $clasificationcourse->clasification }} </td></tr><tr><th> Body </th><td> {{ $clasificationcourse->body }} </td></tr><tr><th> Slug </th><td> {{ $clasificationcourse->slug }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
