

<div class="form-group {{ $errors->has('search') ? 'has-error' : ''}}">
    {!! Form::label('nombres', 'Buscar usuario', ['class' => 'col-md-4 control-label']) !!}
    <div class="input-group col-md-6">
      <input id="mailcliente" type="text" class="form-control" placeholder="Busqueda por correo..." aria-label="Search for...">
      <span class="input-group-btn">
        <button id="buscarusuario" class="btn btn-secondary" type="button" data-toggle="modal" data-target-id="1" data-target="#myModal">Buscar</button>
      </span>
    </div>
</div>


<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    {!! Form::label('nombres', 'Nombres', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombres', null, ['class' => 'form-control','id'=>'nombres']) !!}
        {!! Form::hidden('user_id', null, ['class' => 'form-control','id'=>'user_id']) !!}
        {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('apellidos', null, ['class' => 'form-control','id'=>'apellidos']) !!}
        {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
    {!! Form::label('correo', 'Correo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('correo', null, ['class' => 'form-control','id'=>'correo']) !!}
        {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('celular') ? 'has-error' : ''}}">
    {!! Form::label('celular', 'Celular', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('celular', null, ['class' => 'form-control','id'=>'celular']) !!}
        {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    {!! Form::label('telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telefono', null, ['class' => 'form-control','id'=>'telefono']) !!}
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('orden_cupo') ? 'has-error' : ''}}">
    {!! Form::label('orden_cupo', 'Orden suscripción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('orden_cupo', null, ['class' => 'form-control','readonly'=>'readonly']) !!}
        {!! $errors->first('orden_cupo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('comprobante', 'Imagen Comprobante', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('comprobante', null, ['class' => 'form-control']) !!}
        {!! $errors->first('comprobante', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('numero_control') ? 'has-error' : ''}}">
    {!! Form::label('numero_control', 'Número de control', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('numero_control', null, ['class' => 'form-control']) !!}
        {!! $errors->first('numero_control', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nombre_depositante') ? 'has-error' : ''}}">
    {!! Form::label('nombre_depositante', 'Nombre del depositante', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombre_depositante', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombre_depositante', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('valor_depositado') ? 'has-error' : ''}}">
    {!! Form::label('valor_depositado', 'Valor depositado', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('valor_depositado', null, ['class' => 'form-control']) !!}
        {!! $errors->first('valor_depositado', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fecha_deposito') ? 'has-error' : ''}}">
    {!! Form::label('fecha_deposito', 'Fecha deposito', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fecha_deposito', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fecha_deposito', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tipesuscription_id') ? 'has-error' : ''}}">
    {!! Form::label('tipesuscription_id', 'Estado actual', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('tipesuscription_id', $tiposuscripciones, null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipesuscription_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('curso_id') ? 'has-error' : ''}}">
    {!! Form::label('curso_id', 'Curso', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('curso_id', $cursos, null, ['class' => 'form-control']) !!}
        {!! $errors->first('curso_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Crear', ['class' => 'btn btn-primary']) !!}
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function(){
    $("#buscarusuario").click(function(event){
        event.preventDefault();
        var dataId= $("#mailcliente").val();
        var token = $("input[name=_token]").val();
        console.log(token);
        var route = '/admin/buscar/usuario/';
        var parametros = {
            "id" :dataId
        }
        var dataSting = "id="+dataId;
        if (dataId == "") {
            alert('Ingrese datos de busqueda');
            document.getElementById("mailcliente").focus();
            return false;
        }
        $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN':token},
            type:'get',
            dataType: 'json',
            data:parametros,
            success:function(data)
            {
                console.log(data);
                document.getElementById("mailcliente").value = "";
                document.getElementById("nombres").value = data.nombres;
                document.getElementById("user_id").value = data.id;
                document.getElementById("apellidos").value = data.apellidos;
                document.getElementById("correo").value = data.email;
                document.getElementById("celular").value = data.celular;
                document.getElementById("telefono").value = data.telefono;

            },
            error:function(data)
            {
                console.log('Error '+data);
            }  
        });
    });
 });


</script>