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
				<input type="text" id="ln" name="ln" value="-2.8551284">
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

			<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeaMu7HK8FTuG15aoqeVwgwIYYKLzhj2w&callback=initMap"></script>-->
			<!--Version con errores google maps-->
			<script type="text/javascript">
				//1) mostrar_objeto( navigator.geolocation );
				navigator.goelocation.getCurrentPosition(  fn_ok, fn_error  );
				var divMapa = document.getElementById('mapa');

				function fn_error(){
					divMapa.innerHTML = "Hubo un problema solicitando datos";
				}
				function fn_ok(respuesta){
					divMapa.innerHTML = "Tenemos auth";
					}
				function mostrar_objeto( obj ) 
				{
					for ( var prop in obj ) {
						document.write( prop +': '+obj[prop] + '<br />');
					}
				}
			</script>
						@stop