@extends('adminlte::page')

@section('content') 
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Course #{{ $course->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/courses') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($course, [
                            'method' => 'PATCH',
                            'url' => ['/admin/courses', $course->id],
                            'class' => 'form-horizontal', 
                            'enctype'=>'multipart/form-data',
                            'files' => true
                        ]) !!}

                        @include ('admin.courses.form', ['submitButtonText' => 'Actualizar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>