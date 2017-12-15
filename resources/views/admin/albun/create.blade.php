@extends('adminlte::page')

@section('content')
@include('errors.success')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Albun</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/albun') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/albun', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.albun.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
    </div>
@endsection
