@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Nuevo Producto</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/product') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/product','enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.product.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection
