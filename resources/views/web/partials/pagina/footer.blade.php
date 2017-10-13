<footer class="nb-footer">
    @foreach($veterinary as $veterinari)
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about">
                    
                    @if(!empty($veterinari->logo))
                    <img alt="" class="img-responsive navbar-brand center-block" src="{{ asset($veterinari->logo) }}">
                @else
                    <img alt="" class="img-responsive navbar-brand center-block" src="{{ asset('theme/images/log.png') }}"/>
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
                        <a href="" title="">
                            <i class="fa fa-angle-double-right">
                            </i>
                            Términos de uso
                        </a>
                    </li>
                    <li>
                        <a href="" title="">
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