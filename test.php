@extends('web.index')
@section('content')
<style type="text/css">
.estilo{
    width: 950px; 
    height: 500px;
}
.google-maps {
    position: relative;
    padding-bottom: 75%; // This is the aspect ratio
    height: 0;
    overflow: hidden;
}
.google-maps iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
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
                <input type="text" id="nom" name="nom" value="veterinaria">                        
                <input type="text" id="ln" name="ln" value="-2.8551284">
                <input type="text" id="lg" name="lg" value="-78.77877950000001">
                <input type="text" id="ubiclg" name="ubiclg" value="-2.8551284">
                <input type="text" id="ubiclt" name="ubiclt" value="-78.77877950000001">
                <div id="demo" class="embed-responsive embed-responsive-4by3 col-md-12"></div>
                <div id='ubicacion' style='display:none;'></div>                                        
                <div id="mapholder"></div>


                <div class="row">
                    <div class="col-md-2"></div>

                    <div class="col-md-8">          
                        <script type='text/javascript'>var centreGot = false;</script>
                        {!! $map['js'] !!}
                        {!! $map['html'] !!}
                    </div>

                    <div class="col-md-2"></div>
                </div>
            </div>

            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeaMu7HK8FTuG15aoqeVwgwIYYKLzhj2w&callback=initMap"></script>
            <!--Version con errores google maps-->
            <script>
                        //mostrar_objeto(navigator.geolocation);
                            //navigator.geolocation.getCurrentPosition();

                            navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);
                            var divMapa = document.getElementById('demo');
                            function fn_mal(){
                                divMapa.innerHTML="Hubo un problema";
                            }

                            function fn_ok( respuesta ){
                                //mostrar_objeto(respuesta.coords);
                                //divMapa.innerHTML = "Tenemos autorización para ver su ubicación";
                                var lat = $('#ubiclg').val();
                                var lon = $('#ubiclt').val();
                                /*var lat ='-2.8553192999999997';
                                var lon ='-78.7786982';*/
                                //var lat = respuesta.coords.latitude;
                                //var lon = respuesta.coords.longitude;
                                var gLatLon = new google.maps.LatLng(lat, lon);
                                var objConfig = {
                                    zoom: 19,
                                    center: gLatLon,
                                    title: "StoreLine"
                                }
                                var gMapa = new google.maps.Map(divMapa, objConfig);
                                var objConfigMarker = {
                                    position:gLatLon,
                                    map: gMapa
                                }
                                var gMarker = new google.maps.Marker(objConfigMarker);
                                //gMarker.setIcon('../../admin/us.png');
                                var gCoder = new google.maps.Geocoder();
                                var objInformation = {
                                    address: 'Cuenca,Gualaceo'
                                }
                                //objInformation.address
                                gCoder.geocode(objInformation, fn_coder);
                                function fn_coder(datos){
                                    var coordenadas = datos[0].geometry.location;
                                    var config = {
                                        map:gMapa,
                                        position:coordenadas,
                                        title: 'Tienda'
                                    }
                                    var gMarkerDV = new google.maps.Marker(config)
                                    gMarkerDV.setIcon('../../uploads/logos/huella1.png')
                                    
                                    var objConfigDR={
                                        map: gMapa,
                                        suppressMarkers: true
                                    }
                                    var objConfigDS={
                                        origin: objInformation.address,
                                        destination:gLatLon,
                                        travelMode: google.maps.TravelMode.DRIVING
                                    }


                                    var ds = new google.maps.DirectionsService();
                                    var dr = new google.maps.DirectionsRenderer( objConfigDR );

                                    ds.route(objConfigDS, fnRutear);

                                    function fnRutear( resultados, status ){

                                        if(status=='OK'){
                                            dr.setDirections(resultados);
                                        }else{
                                            alert('Error :'+status);
                                        }

                                    }




                                }

                            }
                            function mostrar_objeto(obj){
                                for (var prop in obj) {
                                    document.write(prop+': '+obj[prop] +'<br />');
                                };
                            }
                        </script>
                        @stop











                        ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        howtoget



                        @extends('web.index')
@section('content')

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
                <input type="text" id="nom" name="nom" value="veterinaria">                        
                <input type="text" id="ln" name="ln" value="{{ $latitud }}">
                <input type="text" id="lg" name="lg" value="-78.77877950000001">
                <input type="text" id="ubiclg" name="ubiclg" value="-2.8551284">
                <input type="text" id="ubiclt" name="ubiclt" value="-78.77877950000001">
                <div id="mapa">datos</div>
                


                <div class="row">
                    <div class="col-md-2"></div>

                    <div class="col-md-8">          
                        <script type='text/javascript'>var centreGot = false;</script>
                        {!! $map['js'] !!}
                        {!! $map['html'] !!}
                    </div>

                    <div class="col-md-2"></div>
                </div>
            </div>

            
                        @stop