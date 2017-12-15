@extends('adminlte::page')

@section('content')
@include('errors.success')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Albun</div>
                    <div class="panel-body">
                       

                        

                         <a href="{{ url('/admin/albun') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                <br />
                <br />
                        <div class="table-responsive">
                            
                         <?Php $i = 1;?>

  {!! Form::open(['method'=>'post','url' => ['/admin/image/deletevarios/'],'style' => 'display:inline']) !!}

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Destacado</th>
                                    <th>
                                        <center>
                                            
                                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Elimina varios', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Eliminar imagen',
                                        'onclick'=>'return confirm("Desea eliminar los items seleccionados?")'
                                        )) !!}

                                        </center>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($images as $item)
                                <tr>
                                    <td><?Php echo $i; ?></td>
                                    <td>{{ $item->file_name }}</td>
                                    <td>
                                        <a href="{{ url($item->file_path) }}" target="_blank">
                                            <img src="{{ asset($item->file_path) }}" class="navbar-brand navbar-brand-logo brand-centered">
                                        </a>
                                    </td>
                                    <td>
                                        @if(($item->destacada)=='1')
                                        <small class="label pull-right bg-green">Activado</small>
                                        @else
                                        <small class="label pull-right bg-red">Desactivado</small>
                                        @endif
                                    </td>
                                        <td>
                                            <center>                                                
                                            {{ Form::checkbox('idcheck[]', $item->id, false, ['class' => 'field']) }}
                                            </center>
                                        </td>
                                    </tr>
                                    <?Php $i++;?>

                                    @endforeach
                                </tbody>
                            </table>
                            {!! Form::close() !!}


                        </div>

                    </div>
                </div>
            </div>
    </div>
@endsection
