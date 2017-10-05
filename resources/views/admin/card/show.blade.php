@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Card {{ $card->id }}</div>
                <div class="panel-body">

                    <a href="{{ url('/admin/card') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/admin/card/' . $card->id . '/edit') }}" title="Edit Card"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    {!! Form::open([
                        'method'=>'DELETE',
                        'url' => ['admin/card', $card->id],
                        'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'title' => 'Delete Card',
                        'onclick'=>'return confirm("Confirm delete?")'
                        ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $card->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Titulo </th><td> {{ $card->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> Sub-titulo 1</th><td> {{ $card->subtitle }} </td>
                                    </tr>
                                    <tr>
                                        <th> Sub-titulo 2</th><td> {{ $card->subtitle2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Sub-titulo 3</th><td> {{ $card->subtitle3 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Introducción </th><td> {{ $card->intro }} </td>
                                    </tr>
                                    <tr>
                                        <th> Contenido </th><td> {{ $card->paragraph }} </td>
                                    </tr>
                                    <tr>
                                        <th> Detalle </th><td> {{ $card->detall }} </td>
                                    </tr>
                                    <tr>
                                        <th> Link </th><td> {{ $card->linkcard }} </td>
                                    </tr>
                                    <tr>
                                        <th> Imagen Contenido </th><td>
                                            @if(empty($card->img))
                                            No hay imagen
                                            @else
                                            <img class="img img-responsive" src="{{ asset( $card->img ) }}"></img>
                                            @endif
                                          </td>
                                    </tr>

                                    <tr>
                                        <th> Imagen Ensabesado </th><td> 
                                        @if(empty($card->imgHeader))
                                            No hay imagen
                                            @else
                                            <img class="img img-responsive" src="{{ asset( $card->imgHeader ) }}"></img>
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
