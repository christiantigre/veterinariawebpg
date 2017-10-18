@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Product {{ $product->name }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/product') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/product/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/product', $product->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Product',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Name </th><td> {{ $product->name }} </td>
                                    </tr>
                                        <tr>
                                            <th> Slug </th><td> {{ $product->slug }} </td>
                                        </tr>
                                        <tr>
                                            <th> Codigo </th><td> {{ $product->cod }} </td>
                                        </tr>                              
                                        <tr>
                                            <th> Precio compra </th><td> {!! $product->precio_compra !!} </td>
                                        </tr>
                                        <tr>
                                            <th> Precio venta </th><td> {!! $product->precio_venta !!} </td>
                                        </tr>
                                        <tr>
                                            <th> Porcentaje descuento </th><td> {!! $product->porcent_descuento !!} %</td>
                                        </tr>
                                        <tr>
                                            <th> Stock </th><td> {!! $product->stock !!} </td>
                                        </tr><tr>
                                            <th> Vendidos </th><td> {!! $product->vendidos !!} </td>
                                        </tr>
                                        <tr>
                                            <th> Descripción </th><td> {!! $product->description !!} </td>
                                        </tr>

                                    <tr>
                                        <th> Activo </th>
                                        <td> @if(($product->visible)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>

                                    <tr>
                                        <th> Mostrar en carrusel </th>
                                        <td> @if(($product->promocion)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Producto Nuevo </th>
                                        <td> @if(($product->nuevo)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Producto Oferta </th>
                                        <td> @if(($product->oferta)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                        <tr>
                                        <th> Imagen </th>
                                        <td>
                                            @if(empty($product->img))
                                            No hay imagen
                                            @else
                                            <img class="img img-responsive" src="{{ asset( $product->img ) }}"></img>
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
@endsection
