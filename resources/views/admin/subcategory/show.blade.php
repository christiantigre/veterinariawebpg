@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Subcategoria {{ $subcategory->subcategory }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/subcategory') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/subcategory/' . $subcategory->id . '/edit') }}" title="Edit Subcategory"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/subcategory', $subcategory->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Subcategory',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th> Subcategoria </th><td> {{ $subcategory->subcategory }} </td>
                                    </tr>
                                    <tr>
                                        <th> Categoria </th><td> {{ $subcategory->category_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> Contenido </th><td> {{ $subcategory->content }} </td>
                                    </tr>
                                    <tr>
                                        <th> Visible </th><td> {{ $subcategory->visible }} </td>
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
