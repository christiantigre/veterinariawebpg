@extends('web.index')
@section('content')
<style type="text/css">
	.map-responsive{
    overflow:hidden;
    padding-bottom:50%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
</style>
<div class="container-fluid">
	<div class="sixteen columns">
		<div class="sub-text link-svgline">
			<a data-gal="m_PageScroll2id" data-ps2id-offset="65" href="#about">
				We believe
				<svg class="link-svgline">
					<use xlink:href="#svg_line">
					</use>
				</svg>
			</a>
			in coming up with original ideas and turning them into digital work that is both
			<a data-gal="m_PageScroll2id" data-ps2id-offset="65" href="#services">
				innovative and measurable.
				<svg class="link-svgline">
					<use xlink:href="#svg_line">
					</use>
				</svg>
			</a>
		</div>
		@foreach($veterinary as $veterinaria)
		<input type="hidden" id="area" name="area" value="{{ $veterinaria->area }}">                        
		<input type="hidden" id="nom" name="nom" value="{{ $veterinaria->name }}">                        
		<input type="hidden" id="link" name="link" value="{{ $veterinaria->linkweb }}">                        
		<input type="hidden" id="mail" name="mail" value="{{ $veterinaria->mail }}">                        
		<input type="hidden" id="tlf" name="tlf" value="{{ $veterinaria->tlf1 }} {{ $veterinaria->tlf2 }}">                        
		<input type="hidden" id="cel" name="cel" value="{{ $veterinaria->cel1 }} {{ $veterinaria->cel2 }}">                        
		@endforeach
		<input type="hidden" id="ln" name="ln" value="{{ $latitud }}">
		<input type="hidden" id="lg" name="lg" value="{{ $longitud }}">
		<input type="hidden" id="ubiclg" name="ubiclg" value="{{ $latitud }}">
		<input type="hidden" id="ubiclt" name="ubiclt" value="{{ $longitud }}">
		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8 map-responsive">        	
				<div id="mapa" style="width: 700px; height: 500px;">La ruta a mostrar</div>
			</div>

			<div class="col-md-2"></div>
		</div>
	</div>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC27xNrEkkICj_mjdVeWPPl3uwDLQ0MDM0&callback=initMap"></script>
	<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyC27xNrEkkICj_mjdVeWPPl3uwDLQ0MDM0&sensor=true"></script>
	<script type="text/javascript">
         //mostrar_objeto( navigator.geolocation );
         var options = {
         	enableHighAccuracy: true,
         	timeout: 5000,
         	maximumAge: 0
         };

         function error(err) {
         	divMapa.innerHTML = "Hubo un problema solicitando datos, puedes intentar con otro navegador";
         	console.warn('ERROR(' + err.code + '): ' + err.message);
         };

         function success(pos) {
         	var crd = pos.coords;
         	console.log('Your current position is:');
         	console.log('Latitude : ' + crd.latitude);
         	console.log('Longitude: ' + crd.longitude);
         	console.log('More or less ' + crd.accuracy + ' meters.');
         	var corLat = $('#ln').val();
         	var corLong = $('#lg').val();
         	var area = $('#area').val();
         	var nom = $('#nom').val();
         	var link = $('#link').val();
         	var mail = $('#mail').val();
         	var tlf = $('#tlf').val();
         	var cel = $('#cel').val();

         	var lat = pos.coords.latitude;
         	var lon = pos.coords.longitude;
         	var latLon = lat+','+lon;
         	var coordenada2 = '-2.830963,-78.767076';
         	var coordsEmpress = corLat+','+corLong;
         	var gLatLon = new google.maps.LatLng(lat, lon);
         	var objConfig = {
         		zoom: 13,
         		center: gLatLon
         	}
         	var gMapa = new google.maps.Map(divMapa, objConfig);
         	var objConfigMarker = {
         		position: gLatLon,
         		animation: google.maps.Animation.DROP,
         		map: gMapa,
         		title: "Tu ubicación actual"
         	}
         	var gMarker = new google.maps.Marker(objConfigMarker);

         	var gCoder = new google.maps.Geocoder(  );

          // esta se puede utilizar como una variable objInformacion.address
          var objInformacion = {
          	//address: 'Cuenca, Gualaceo'
          	address: coordsEmpress
          }
          gCoder.geocode(objInformacion, fn_coder);
          function fn_coder(datos){
          	var coordenadas = datos[0].geometry.location;
          	var config = {
          		map: gMapa,
          		animation: google.maps.Animation.DROP,
          		position: coordenadas,
          		title: 'Veterinaria'
          	}
          	var gMarkerDV = new google.maps.Marker(config);
          	gMarkerDV.setIcon('../../../uploads/logos/huella3.png');

          	var objHTML={
          		content: '<div style="height: 150px; width: 300px;"> <h2>'+area+' : '+nom+'</h2> <p>Visitanos en nuestro sitio web <a href="'+link+'">web page</a> Contactanos : '+tlf+'/'+cel+'-'+mail+ '</p></div>'
          	}

          	var gIW = new google.maps.InfoWindow( objHTML );

          	google.maps.event.addListener(gMarkerDV,'click',function(){
          		gIW.open(gMapa, gMarkerDV);
          	});
          }


          var objConfigDR = {
          	map: gMapa,
          	suppressMarkers: true
          }

          var objConfigDS = {
  origin: gLatLon, // lat y long (coordenadas) o domicilio (dirección)
  destination: objInformacion.address ,// reutilizacion de objInformacion.address como variable 
  travelMode: google.maps.TravelMode.DRIVING
}

var ds = new google.maps.DirectionsService();
var dr = new google.maps.DirectionsRenderer( objConfigDR );


ds.route(objConfigDS, fnRutear );

function fnRutear( resultados, status){
  //muestra linea de a a B
  if(status == 'OK'){
  	dr.setDirections(resultados);
  }else{
  	alert('Error '+status);
  }
}




};


navigator.geolocation.getCurrentPosition(success, error, options);
var divMapa = document.getElementById('mapa');


function mostrar_objeto( obj ) 
{
	for ( var prop in obj ) {
		document.write( prop +': '+obj[prop] + '<br />');
	}
}
</script>


@stop