@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Slider {{ $slider->title }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/slider') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/slider/' . $slider->id . '/edit') }}" title="Edit Slider"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/slider', $slider->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Slider',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $slider->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Imagen </th><td><img src="{{ asset($slider->img) }}" class="img img-responsive"> </td>
                                    </tr>
                                    <tr>
                                        <th> Titulo </th><td> {{ $slider->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> Sub-Titulo </th><td> {{ $slider->subtitle }} </td>
                                    </tr>
                                    <tr>
                                        <th> Introducción </th><td> {{ $slider->content }} </td>
                                    </tr>                                    
                                    <tr>
                                        <th> Contenido </th><td> {!! $slider->body !!} </td>
                                    </tr>                                  
                                    <tr>
                                        <th> Detalles </th><td> {{ $slider->detall }} </td>
                                    </tr>                                  
                                    <tr>
                                        <th> Link </th><td> {{ $slider->linkinfo }} </td>
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
