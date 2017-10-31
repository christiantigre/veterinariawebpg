@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Suscribir {{ $suscribir->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/suscribir') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/suscribir/' . $suscribir->id . '/edit') }}" title="Edit Suscribir"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/suscribir', $suscribir->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Suscribir',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}



                        {!! Form::open([
                                                'method'=>'POST',
                                                'url' => ['/admin/autosuscriber', $suscribir->id],
                                                'style' => 'display:inline'
                                            ]) !!}
        {!! Form::hidden('curso_id', $suscribir->curso_id, null, ['class' => 'form-control']) !!}


                                                {!! Form::button('<i class="fa fa-toggle-on" aria-hidden="true"></i> Suscribir', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default btn-xs',
                                                        'title' => 'Suscribir',
                                                        'onclick'=>'return confirm("Desea confirmar la suscripción?")'
                                                )) !!}
                                            {!! Form::close() !!}



                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $suscribir->id }}</td>
                                    </tr>
                                    <tr><th> Nombres </th><td> {{ $suscribir->nombres }} </td></tr>
                                    <tr><th> Apellidos </th><td> {{ $suscribir->apellidos }} </td></tr>
                                    <tr><th> Correo </th><td> {{ $suscribir->correo }} </td></tr>
                                    <tr><th> Celular </th><td> {{ $suscribir->celular }} </td></tr>
                                    <tr><th> Teléfono </th><td> {{ $suscribir->Telefono }} </td></tr>
                                    <tr><th> Comprobante </th><td> 
                                        @if(empty($suscribir->comprobante))
                                            No hay imagen
                                            @else
                                            <a href="{{ asset( $suscribir->comprobante ) }}">
                                            <img class="img img-responsive" src="{{ asset( $suscribir->comprobante ) }}"></img>
                                            </a>
                                            @endif
                                     </td></tr>
                                      <tr><th> Número control </th><td> {{ $suscribir->numero_control }} </td></tr>
                                      <tr><th> Depositante </th><td> {{ $suscribir->nombre_depositante }} </td></tr>
                                      <tr>
                                        <th> Precio teorico </th><td> {{ $suscribir->precio_teorico }} </td>
                                    </tr>
                                    <tr>
                                        <th> Precio práctico </th><td> {{ $suscribir->precio_practico }} </td>
                                    </tr>
                                    <tr>
                                        <th> Total curso </th><td> {{ $suscribir->total }} </td>
                                    </tr>
                                      <tr>
                                        <th> Valor depositado </th><td> {{ $suscribir->valor_depositado }} </td>
                                    </tr>
                                    <tr>
                                        <th> Cupos solicitados </th><td> {{ $suscribir->separarcupos }} </td>
                                    </tr>
                                      <tr><th> Fecha depósito </th><td> {{ $suscribir->fecha_deposito }} </td></tr>
                                      <tr><th> Fecha de suscripción </th><td> {{ $suscribir->fecha_suscripcion }} </td></tr>
                                      <tr><th> Orden N# Cupo </th><td> {{ $suscribir->orden_cupo }} </td></tr>
                                      <tr><th> Curso </th><td> {{ $suscribir->Course->title }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
