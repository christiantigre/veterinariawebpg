@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post #{{ $post->id }}</div>
                <div class="panel-body">
                    <a href="{{ url('/admin/post') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    {!! Form::model($post, [
                        'method' => 'PATCH',
                        'url' => ['/admin/post', $post->id],
                        'class' => 'form-horizontal',
                        'files' => true
                        ]) !!}

                        {{--@include ('admin.post.form', ['submitButtonText' => 'Update'])--}}

                        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                            {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div><div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                            {!! Form::label('body', 'Body', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div><div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
                            {!! Form::label('slug', 'Slug', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::textarea('slug', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('visible') ? 'has-error' : ''}}">
                            {!! Form::label('visible', 'Visible', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>{!! Form::radio('visible', '1', true) !!} Yes</label>
                                </div>
                                <div class="checkbox">
                                    <label>{!! Form::radio('visible', '0') !!} No</label>
                                </div>
                                {!! $errors->first('visible', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
                            {!! Form::label('category_id', 'Category Id', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {{ Form::select('category_id', $category, null, ['class' => 'form-control']) }}
                                {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
                            {!! Form::label('category_id', 'Tags', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {{ Form::select('tags[]', $tags, null,['class'=>'form-control select2-multiple select2','multiple'=>'multiple']) }}
                                {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                        {!! Html::script('js/select2.min,js') !!}
                        <script type="text/javascript">
                            $('.select2-multiple').select2().val({!!  json_encode($post->tags()->allRelatedIds()) !!}﻿).trigger("change");
                        </script>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
