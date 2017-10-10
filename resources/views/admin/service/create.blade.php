@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Nuevo Servicio</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/service') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/service', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.service.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection
