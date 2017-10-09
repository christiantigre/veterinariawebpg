<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('img', 'Img', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::File('img', null, ['class' => 'form-control','accept'=>'image/*']) !!}        
        {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('abrevTitulo') ? 'has-error' : ''}}">
    {!! Form::label('abrevTitulo', 'Abreviatura titulo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('abrevTitulo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('abrevTitulo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
    {!! Form::label('lastname', 'Lastname', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fb') ? 'has-error' : ''}}">
    {!! Form::label('fb', 'Fb', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fb', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fb', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tw') ? 'has-error' : ''}}">
    {!! Form::label('tw', 'Tw', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tw', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tw', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('in') ? 'has-error' : ''}}">
    {!! Form::label('in', 'In', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('in', null, ['class' => 'form-control']) !!}
        {!! $errors->first('in', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gg') ? 'has-error' : ''}}">
    {!! Form::label('gg', 'Gg', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('gg', null, ['class' => 'form-control']) !!}
        {!! $errors->first('gg', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lk') ? 'has-error' : ''}}">
    {!! Form::label('lk', 'Lk', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lk', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lk', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('especialitation') ? 'has-error' : ''}}">
    {!! Form::label('especialitation', 'Especialitation', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('especialitation', null, ['class' => 'form-control']) !!}
        {!! $errors->first('especialitation', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('blog') ? 'has-error' : ''}}">
    {!! Form::label('blog', 'Blog', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('blog', null, ['class' => 'form-control']) !!}
        {!! $errors->first('blog', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('workplace') ? 'has-error' : ''}}">
    {!! Form::label('workplace', 'Workplace', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('workplace', null, ['class' => 'form-control']) !!}
        {!! $errors->first('workplace', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('workplacelink') ? 'has-error' : ''}}">
    {!! Form::label('workplace', 'Link Workplace', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('workplacelink', null, ['class' => 'form-control']) !!}
        {!! $errors->first('workplacelink', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
    {!! Form::label('is_active', 'Activo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('is_active', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('is_active', '0') !!} No</label>
</div>
        {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
