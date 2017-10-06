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
        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        {!! $errors->first('subtitle', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('intro') ? 'has-error' : ''}}">
    {!! Form::label('intro', 'Introducción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('intro', null, ['class' => 'form-control']) !!}
        {!! $errors->first('intro', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
        {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('imgHeader') ? 'has-error' : ''}}">
    {!! Form::label('imgHeader', 'Imagen encabezado', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
         {!! Form::File('imgHeader', null, ['class' => 'form-control','accept'=>'image/*']) !!}
        {!! $errors->first('imgHeader', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('visible') ? 'has-error' : ''}}">
    {!! Form::label('visible', 'Visible', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('visible', ['1' => 'Activo', '0' => 'Inactivo']); !!}
        {!! $errors->first('visible', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('visible') ? 'has-error' : ''}}">
    {!! Form::label('webvisible', 'Vista principal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('webvisible', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('webvisible', '0') !!} No</label>
</div>
        {!! $errors->first('webvisible', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tag_id') ? 'has-error' : ''}}">
    {!! Form::label('tag_id', 'Etiqueta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {{ Form::select('tag_id', $tags, null, ['class' => 'form-control']) }}
        {!! $errors->first('tag_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
