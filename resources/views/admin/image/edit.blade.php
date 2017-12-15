@extends('adminlte::page')

@section('content')
@include('errors.success')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Image #{{ $image->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/albun') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($image, [
                            'method' => 'PATCH',
                            'url' => ['/admin/image', $image->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.image.form', ['submitButtonText' => 'Actualizar'])

                        {!! Form::close() !!}

                    
                </div>
            </div>
        </div>
    </div>
@endsection
