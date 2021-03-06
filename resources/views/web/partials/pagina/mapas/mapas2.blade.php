<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla básica de Bootstrap</title>
 
    <!-- CSS de Bootstrap -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
 
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <style type="text/css">
      #map {
  width: 100%;
  height: 100%;
}

.scroll {
  height: 100%;
}
    </style>
    <h1>¡Hola mundo!</h1>
 
    <div id="mapa" data-tap-disabled="true" style="width: 700px; height: 500px;"></div>

<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&sensor=true"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyC27xNrEkkICj_mjdVeWPPl3uwDLQ0MDM0&callback=initMap"></script>

    

    <script type="text/javascript">
         //mostrar_objeto( navigator.geolocation );
        var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

function error(err) {
  divMapa.innerHTML = "Hubo un problema solicitando datos";
  console.warn('ERROR(' + err.code + '): ' + err.message);
};

function success(pos) {
  var crd = pos.coords;
  console.log('Your current position is:');
  console.log('Latitude : ' + crd.latitude);
  console.log('Longitude: ' + crd.longitude);
  console.log('More or less ' + crd.accuracy + ' meters.');

  var lat = pos.coords.latitude;
  var lon = pos.coords.longitude;
  var latLon = lat+','+lon;
  var coordenada2 = '-2.830963,-78.767076';
  var gLatLon = new google.maps.LatLng(lat, lon);
  var objConfig = {
    zoom: 17,
    center: gLatLon
  }
  var gMapa = new google.maps.Map(divMapa, objConfig);
  var objConfigMarker = {
    position: gLatLon,
    map: gMapa,
    title: "Tu ubicación actual"
  }
  var gMarker = new google.maps.Marker(objConfigMarker);
  //divMapa.innerHTML = lat+','+lon;/*muestra 
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
  </body>
</html>