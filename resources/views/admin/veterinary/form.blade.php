<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Dirección', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tlf1') ? 'has-error' : ''}}">
    {!! Form::label('tlf1', 'Telefono 1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tlf1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tlf1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tlf2') ? 'has-error' : ''}}">
    {!! Form::label('tlf2', 'Telefono 2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tlf2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tlf2', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('cel1') ? 'has-error' : ''}}">
    {!! Form::label('cel1', 'Celular 1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cel1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cel1', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('cel2') ? 'has-error' : ''}}">
    {!! Form::label('cel2', 'Celular 2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cel2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cel2', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('mail') ? 'has-error' : ''}}">
    {!! Form::label('mail', 'Correo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('mail', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mail', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('linkweb') ? 'has-error' : ''}}">
    {!! Form::label('linkweb', 'Pagina web', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('linkweb', null, ['class' => 'form-control']) !!}
        {!! $errors->first('linkweb', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('prop') ? 'has-error' : ''}}">
    {!! Form::label('prop', 'Propietario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('prop', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prop', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('genent') ? 'has-error' : ''}}">
    {!! Form::label('gerent', 'Gerente', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('gerent', null, ['class' => 'form-control']) !!}
        {!! $errors->first('gerent', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
    {!! Form::label('area', 'Area especialización', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('area', null, ['class' => 'form-control']) !!}
        {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Descripción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control','placeholder'=>'Max 500 caracteres']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
    {!! Form::label('logo', 'Logo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::File('logo', null, ['class' => 'form-control','accept'=>'image/*']) !!}
        {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('datestart') ? 'has-error' : ''}}">
    {!! Form::label('datestart', 'Fecha de inicio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('datestart', null, ['class' => 'form-control date']) !!}
        {!! $errors->first('datestart', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ruc') ? 'has-error' : ''}}">
    {!! Form::label('ruc', 'Ruc', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ruc', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ruc', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('razonsocial') ? 'has-error' : ''}}">
    {!! Form::label('razonsocial', 'Razon Social', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('razonsocial', null, ['class' => 'form-control']) !!}
        {!! $errors->first('razonsocial', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fb') ? 'has-error' : ''}}">
    {!! Form::label('facebook', 'Facebook', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fb', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fb', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tw') ? 'has-error' : ''}}">
    {!! Form::label('tw', 'Twitter', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tw', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tw', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('in') ? 'has-error' : ''}}">
    {!! Form::label('in', 'Instagram', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('in', null, ['class' => 'form-control']) !!}
        {!! $errors->first('in', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('yt') ? 'has-error' : ''}}">
    {!! Form::label('yt', 'Youtube', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('yt', null, ['class' => 'form-control']) !!}
        {!! $errors->first('yt', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('gg') ? 'has-error' : ''}}">
    {!! Form::label('gg', 'Google +', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('gg', null, ['class' => 'form-control']) !!}
        {!! $errors->first('gg', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Crear', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

<script type="text/javascript">  

        $('.date').datepicker({  

           format: 'yyyy-mm-dd'  

         });  

    </script> 