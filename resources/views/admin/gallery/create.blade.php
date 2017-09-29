@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Gallery</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/gallery') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/gallery', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data' , 'files' => true]) !!}

                        @include ('admin.gallery.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection
