<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Username', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control','autocomplete'=>'off']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    {!! Form::label('nombres', 'Nombres', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
        {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    {!! Form::label('telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('celular') ? 'has-error' : ''}}">
    {!! Form::label('celular', 'Celular', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('celular', null, ['class' => 'form-control']) !!}
        {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fecha_nacimiento') ? 'has-error' : ''}}">
    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control date','id'=>'datepicker']) !!}
        {!! $errors->first('fecha_nacimiento', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- Multiple Radios (inline) -->
       <div class="form-group">
        <label class="col-md-4 control-label" for="Gender">Genero</label>
        <div class="col-md-6"> 
          {!! Form::select('id_gender', $genero, $generoseleccionado, ['class' => 'form-control']) !!}
        </div>
      </div>




      <div class="form-group {{ $errors->has('id_country') ? 'has-error' : ''}}">
        <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Pais / Provincia</label>  
        <div class="col-md-3  col-xs-4">
          {!! Form::select('id_country', $paises, $paisseleccionado, ['class' => 'form-control input-md']) !!}

          <!--<input id="Permanent Address" name="Permanent Address" type="text" placeholder="Provincia" class="form-control input-md ">-->
        </div>

        <div class="col-md-3 col-xs-4">
          {!! Form::select('id_province', $provincias, $provinciaseleccionada, ['class' => 'form-control input-md']) !!}

          <!--<input id="Permanent Address" name="Permanent Address" type="text" placeholder="Ciudad" class="form-control input-md ">-->
        </div>  
      </div>
<div class="form-group {{ $errors->has('domicilio') ? 'has-error' : ''}}">
    {!! Form::label('domicilio', 'Domicilio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('domicilio', null, ['class' => 'form-control']) !!}
        {!! $errors->first('domicilio', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('img', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('img', null, ['class' => 'form-control']) !!}
        {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('history') ? 'has-error' : ''}}">
    {!! Form::label('history', 'Sobre el usuario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('history', null, ['class' => 'form-control']) !!}
        {!! $errors->first('history', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    {!! Form::label('activo', 'Activo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('activo', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('activo', '0') !!} No</label>
</div>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('notificame') ? 'has-error' : ''}}">
    {!! Form::label('notificame', 'Notificar novedades', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('notificame', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('notificame', '0') !!} No</label>
</div>
        {!! $errors->first('notificame', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    {!! Form::label('password', 'Contraseña', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">  
        la clave será el correo ingresado hasta que el usuario propietario los cambie
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
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