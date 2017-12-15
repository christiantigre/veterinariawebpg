<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Titulo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('intro') ? 'has-error' : ''}}">
    {!! Form::label('intro', 'Introducción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('intro', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('intro', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Contenido', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('content', null, ['class' => 'form-control my-editor']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
        {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('file_name') ? 'has-error' : ''}}">
    {!! Form::label('file_name', 'Nombre de la imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('file_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('file_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('file_size') ? 'has-error' : ''}}">
    {!! Form::label('file_size', 'Peso imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('file_size', null, ['class' => 'form-control']) !!}
        {!! $errors->first('file_size', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('file_mime') ? 'has-error' : ''}}">
    {!! Form::label('file_mime', 'Tipo imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('file_mime', null, ['class' => 'form-control']) !!}
        {!! $errors->first('file_mime', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('file_path') ? 'has-error' : ''}}">
    {!! Form::label('file_path', 'Ruta imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('file_path', null, ['class' => 'form-control']) !!}
        {!! $errors->first('file_path', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('destacada') ? 'has-error' : ''}}">
    {!! Form::label('destacada', 'Destacada', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('destacada', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('destacada', '0') !!} No</label>
</div>
        {!! $errors->first('destacada', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Crea', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
