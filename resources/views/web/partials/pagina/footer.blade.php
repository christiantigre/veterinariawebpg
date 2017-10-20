<footer class="nb-footer">
    @foreach($veterinary as $veterinari)
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about">
                    
                    @if(!empty($veterinari->logo))
                    <img alt="" class="logo_header" src="{{ asset($veterinari->logo) }}">
                @else
                    <img alt="" class="logo_header" src="{{ asset('theme/images/log.png') }}"/>
                @endif
                    <p>


                        {!! $veterinari->description !!}

                    </p>
                    <div class="social-media">
                        <ul class="list-inline">
                            <li>
                                <a href="{{ $veterinari->fb }}" title="">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $veterinari->tw }}" title="">
                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $veterinari->gg }}" title="">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $veterinari->in }}" title="">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </img>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="footer-info-single">
                <h2 class="title">
                    Ayuda
                </h2>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ url('/contact') }}" title="">
                            <i class="fa fa-angle-double-right">
                            </i>
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="footer-info-single">
                <h2 class="title">
                    Empresa
                </h2>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ url('/mision') }}" title="">
                            <i class="fa fa-angle-double-right">
                            </i>
                            Mision
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/vision') }}" title="">
                            <i class="fa fa-angle-double-right">
                            </i>
                            Vision
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/us') }}" title="">
                            <i class="fa fa-angle-double-right">
                            </i>
                            Equipo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="footer-info-single">
                <h2 class="title">
                    Seguridad & Privacidad
                </h2>
                <ul class="list-unstyled">
                    <li>
                        <a href="" title="" class="view-txt" onclick="leer();" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-angle-double-right">
                            </i>
                            Términos de uso
                        </a>
                    </li>
                    <li>
                        <a href="" title="" class="view-txt" onclick="leer();" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-angle-double-right">
                            </i>
                            Politicas de uso
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}" title="">
                            <i class="fa fa-angle-double-right">
                            </i>
                            Inicio
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="footer-info-single">
                <h2 class="title">
                    Metodos de pago
                </h2>
                <p>
                    Los pagos por la venta de productos, servicios y cursos se los realiza en las oficinas de la empresa.
                </p>
            </div>
        </div>
    </div>
</div>
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>
                    Copyright © 2017. Christian Tigre.
                </p>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
</section>

                    @endforeach
</footer>


<style type="text/css">

.modal-header{
    text-align: center;
    background-color: #ffffff;
    color: #A4C369;
}

.modal-body{
    color; #000000;
    overflow: auto;
}

pre{
    width: 100%; 
    height: auto;
    white-space: pre-wrap; /* css-3 */
    white-space: -moz-pre-wrap !important; /* Mozilla, since 1999 */
    white-space: -pre-wrap; /* Opera 4-6 */
    white-space: -o-pre-wrap; /* Opera 7 */
    word-wrap: break-word; /* Internet Explorer 5.5+ */
    background-color: #ffffff;
    color: green;
}

</style>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Términos y condiciones</h4>
    </div>
    <div class="modal-body text">
     
    </div>
</div>
</div>
</div>

<script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
  })

    function leer(){
     var TXT_URL = '{{ asset("terminosycondiciones/terminos.txt") }}'
     $.ajax
     (
     {
        url : TXT_URL,
        dataType: "text",
        success : function (data) 
        {
            $(".text").html("<pre style='background-color:#ffffff;color: #000;font-family:Lato;font-weight:50;font-size:12px;line-height:30px;'>"+data+"</pre>");
        }
    }
    );
 }
</script>