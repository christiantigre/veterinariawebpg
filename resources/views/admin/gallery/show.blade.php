@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Galería # {{ $gallery->title }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/gallery') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/gallery/' . $gallery->id . '/edit') }}" title="Edit Gallery"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/gallery', $gallery->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Gallery',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $gallery->id }}</td>
                                    </tr>
                                    <tr><th> Titulo </th><td> {{ $gallery->title }} </td>
                                    </tr><tr>
                                        <th> Categoria</th>
                                        <td> {{ $gallery->Category->category }} </td>
                                    </tr>
                                    <tr>
                                        <th> Imagen </th><td><img src="{{ asset($gallery->img) }}" class="img img-responsive"> </td>
                                    </tr>
                                    <tr><th> Contenido </th><td> {!! $gallery->content !!} </td></tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
