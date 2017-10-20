<div class="form-group {{ $errors->has('subcategory') ? 'has-error' : ''}}">
    {!! Form::label('subcategory', 'Subcategoria', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('subcategory', null, ['class' => 'form-control']) !!}
        {!! $errors->first('subcategory', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Contenido', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
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
    {!! Form::label('category_id', 'Categoria', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {{ Form::select('category_id', $category, null, ['class' => 'form-control']) }}
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
 
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Crear', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
