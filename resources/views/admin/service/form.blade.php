<div class="form-group {{ $errors->has('service') ? 'has-error' : ''}}">
    {!! Form::label('service', 'Servicio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('service', null, ['class' => 'form-control']) !!}
        {!! $errors->first('service', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
    {!! Form::label('slug', 'Sub Titulo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Descripción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control my-editor']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('precio_venta') ? 'has-error' : ''}}">
    {!! Form::label('precio_venta', 'Precio Venta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('precio_venta', null, ['class' => 'form-control','placeholder'=>'355.99']) !!}
        {!! $errors->first('precio_venta', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('porcent_descuento') ? 'has-error' : ''}}">
    {!! Form::label('porcent_descuento', 'Porcentaje Descuento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('porcent_descuento', null, ['class' => 'form-control','placeholder'=>'355.99']) !!}
        {!! $errors->first('porcent_descuento', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('img', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('img', null, ['class' => 'form-control']) !!}
        {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('visible_slider') ? 'has-error' : ''}}">
    {!! Form::label('visible_slider', 'Visible Slider', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('visible_slider', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('visible_slider', '0') !!} No</label>
</div>
        {!! $errors->first('visible_slider', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('promocion') ? 'has-error' : ''}}">
    {!! Form::label('promocion', 'Promoción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('promocion', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('promocion', '0') !!} No</label>
</div>
        {!! $errors->first('promocion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nuevo') ? 'has-error' : ''}}">
    {!! Form::label('nuevo', 'Nuevo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('nuevo', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('nuevo', '0') !!} No</label>
</div>
        {!! $errors->first('nuevo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('oferta') ? 'has-error' : ''}}">
    {!! Form::label('oferta', 'Oferta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('oferta', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('oferta', '0') !!} No</label>
</div>
        {!! $errors->first('oferta', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
    {!! Form::label('is_active', 'Active', ['class' => 'col-md-4 control-label']) !!}
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
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Crear', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
