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
<div class="form-group {{ $errors->has('fax') ? 'has-error' : ''}}">
    {!! Form::label('fax', 'Fax', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fax', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
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
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Descripción', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control','placeholder'=>'Max 500 caracteres']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
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
<div class="form-group {{ $errors->has('gg') ? 'has-error' : ''}}">
    {!! Form::label('latitud', 'Latitud', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('latitud', null, ['class' => 'form-control','id'=>'latitud']) !!}
        {!! $errors->first('latitud', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('gg') ? 'has-error' : ''}}">
    {!! Form::label('longitud', 'Longitud', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('longitud', null, ['class' => 'form-control','id'=>'longitud']) !!}
        {!! $errors->first('longitud', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('mision') ? 'has-error' : ''}}">
    {!! Form::label('mision', 'Misión', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('mision', null, ['class' => 'form-control','placeholder'=>'Max 500 caracteres']) !!}
        {!! $errors->first('mision', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('vision') ? 'has-error' : ''}}">
    {!! Form::label('vision', 'Visión', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('vision', null, ['class' => 'form-control','placeholder'=>'Max 500 caracteres']) !!}
        {!! $errors->first('vision', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('visible') ? 'has-error' : ''}}">
    {!! Form::label('ubicacion', 'Ubicación', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
            <label><input type="radio" name="rad" id="rad" value="UBICACION" onclick="cargarmap();"/> Compartir ahora</label>
        </div>
        <div class="checkbox">
            <label><input type="radio" name="rad" id="rad" value="DOMICILIO" onclick="vaciar();" checked/> En otro momento</label>
        </div>
        {!! $errors->first('rad', '<p class="help-block">:message</p>') !!}
    </div>







    <div class="form-group">
        <div class="control-label col-md-12">      
            <label class="control-label col-md-3 col-sm-3 col-xs-12"><i class="fa fa-map-marker"></i> Ubicación<i><small></small></i></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Se determina y escribe la localizacion -->
                {!! Form::hidden('ln', null, array('class'=>'form-control col-md-7 col-xs-12',
                'placeholder'=>'Ingrese nombre...','autofocus'=>'autofocus','id'=>'ln') ) !!}

                {!! Form::hidden('lg',null,array('class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingrese nombre...','autofocus'=>'autofocus','id'=>'lg')) !!}
                <div id='ubicacion' class="col-md-12" style='display:none;'></div>
                <div id="demo" class="embed-responsive embed-responsive-4by3 col-md-12"></div>
                <div id="mapholder" class="embed-responsive embed-responsive-4by3 col-md-12"></div>
            </div>
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
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfEnRziz09pG_OBmrz01pB0X5XXBBFOMg&signed_in=true&callback=initMap"></script>
   <script type="text/javascript">
    var x = document.getElementById("demo");
    function cargarmap() {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
        function showPosition(position)
        {
            lat = position.coords.latitude;
            lon = position.coords.longitude;
            latlon = new google.maps.LatLng(lat, lon)
            mapholder = document.getElementById('demo')
            mapholder.style.height = '250px';
            mapholder.style.width = '500px';
            var myOptions = {
                center: latlon, zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL}
            };
            var map = new google.maps.Map(document.getElementById("demo"), myOptions);
            var marker = new google.maps.Marker({position: latlon, map: map, title: "You are here!"});
            document.getElementById("ln").value = lat;
            document.getElementById("latitud").value = lat;
            document.getElementById("lg").value = lon;
            document.getElementById("longitud").value = lon;
        }
        function showError(error)
        {
            switch (error.code)
            {
                case error.PERMISSION_DENIED:
                x.innerHTML = "Denegada la peticion de Geolocalización en el navegador."
                break;
                case error.POSITION_UNAVAILABLE:
                x.innerHTML = "La información de la localización no esta disponible."
                break;
                case error.TIMEOUT:
                x.innerHTML = "El tiempo de petición ha expirado."
                break;
                case error.UNKNOWN_ERROR:
                x.innerHTML = "Ha ocurrido un error desconocido."
                break;
            }
        }}
    </script>

    <script type="text/javascript">
        function vaciar() {
            document.getElementById("ln").value = "";
            document.getElementById("lg").value = "";
            document.getElementById("latitud").value = "";
            document.getElementById("longitud").value = "";
        }

        function check(rad) {
            document.getElementById("res").value = rad;
        }

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(mostrarUbicacion);
        } else {
            alert("¡Error! Este navegador no soporta la Geolocalización.");
        }

        function mostrarUbicacion(position) {
            var times = position.timestamp;
            var latitud = position.coords.latitude;
            var longitud = position.coords.longitude;
            var altitud = position.coords.altitude;
            var exactitud = position.coords.accuracy;
            var div = document.getElementById("ubicacion");

            /*div.innerHTML = "<input type='text' name='ln' id='ln' value='" + latitud + "'><input type='text' name='lg' id='lg' value='" + longitud + "'><br>Timestamp: " + times + "<br>Latitud: " + latitud + "<br>Longitud: " + longitud + "<br>Altura en metros: " + altitud + "<br>Exactitud: " + exactitud;*/
        }

        function refrescarUbicacion() {
            navigator.geolocation.watchPosition(mostrarUbicacion);
        }

    </script>