@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Veterinary</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/veterinary') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/veterinary', 'enctype'=>'multipart/form-data' ,'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.veterinary.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection
