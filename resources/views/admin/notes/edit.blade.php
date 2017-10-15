@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Nota #{{ $note->title }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/notes') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($note, [
                            'method' => 'PATCH',
                            'url' => ['/admin/notes', $note->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.notes.form', ['submitButtonText' => 'Actualizar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
