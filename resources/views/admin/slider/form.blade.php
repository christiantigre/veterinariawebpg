<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Titulo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('subtitle') ? 'has-error' : ''}}">
    {!! Form::label('subtitle', 'Sub Titulo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('subtittle', null, ['class' => 'form-control']) !!}
        {!! $errors->first('subtitle', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('img', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::File('img', null, ['class' => 'form-control','accept'=>'image/*']) !!}
        {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Contenido', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('content', null, ['class' => 'form-control','placeholder'=>'Introducción max 120 caracteres']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    {!! Form::label('body', 'Resumen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('body', null, ['class' => 'form-control','placeholder'=>'Publicación']) !!}
        {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('detall') ? 'has-error' : ''}}">
    {!! Form::label('detall', 'Detalles', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('detall', null, ['class' => 'form-control','placeholder'=>'Resumen final']) !!}
        {!! $errors->first('detall', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('linkinfo') ? 'has-error' : ''}}">
    {!! Form::label('linkinfo', 'Enlace', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('linkinfo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('linkinfo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
