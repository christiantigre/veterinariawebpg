@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Servicio {{ $service->service }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/service') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/service/' . $service->id . '/edit') }}" title="Edit Service"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/service', $service->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Service',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $service->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Servicio </th><td> {{ $service->service }} </td>
                                    </tr>
                                    <tr>
                                        <th> Sub titulo </th><td> {{ $service->slug }} </td>
                                    </tr>
                                    <tr>
                                        <th> Descripción </th><td> {!! $service->description !!} </td>
                                    </tr>                                    
                                    <tr>
                                        <th> Precio venta </th><td> {{ $service->precio_venta }} </td>
                                    </tr>                                  
                                    <tr>
                                        <th> Porcentaje descuento </th><td> {{ $service->porcent_descuent }} </td>
                                    </tr>
                                    <tr>
                                        <th> Estado </th>
                                        <td> @if(($service->is_active)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Ver en slider </th>
                                        <td> @if(($service->visible_slider)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Promoción </th>
                                        <td> @if(($service->promocion)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Servicio nuevo </th>
                                        <td> @if(($service->nuevo)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Servicio de oferta </th>
                                        <td> @if(($service->oferta)=='1')
                                                <small class="label pull-left bg-green">Activado</small>
                                            @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Imagen</th> <td>
                                            @if(empty($service->img))
                                            No hay imagen
                                            @else
                                            <img class="img img-responsive" src="{{ asset( $service->img ) }}"></img>
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
