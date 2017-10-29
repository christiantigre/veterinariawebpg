<header class="">
        <div class="auto">
            <a class="navbar-brand auto visible-xs hidden-sm hidden-md hidden-lg" href="www.google.com">
                <img class="hidden-xs hidden-sm hidden-md visible-lg" src="{{ asset('uploads/logos/favicon.png') }}">
            </img>
        </a>
    </div>
    <nav class="" id="cssmenu">
        <div id="head-mobile">
        </div>
        <div class="button">
        </div>
        
        <ul class="front scroll_show">
            <li @if(($pag)=='inicio') class="active" @else class="" @endif>
                <a href="{{ url('/') }}" class="menu">
                    INICIO
                </a>
            </li>
            <li @if(($pag)=='empresa') class="active" @else class="" @endif>
                <a href="#" class="menu">
                    LA EMPRESA
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/mision') }}">
                            MISIÓN
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/vision') }}">
                            VISIÓN
                        </a>
                    </li>
                </ul>
            </li>
            <li @if(($pag)=='nosotros') class="active" @else class="" @endif">
                <a href="{{ url('/us') }}" class="menu">
                    EQUIPO
                </a>
            </li>
            <li @if(($pag)=='galeria') class="active" @else class="" @endif>
                <a href="{{ url('/gallery') }}" class="menu">
                    GALERIA
                </a>
            </li>
            <li @if(($pag)=='noticias') class="active" @else class="" @endif>
                <a href="{{ url('/notices') }}" class="menu">
                    NOTICIAS
                </a>
            </li>
            <!--<li @if(($pag)=='comollegar') class="active" @else class="" @endif>
                <a href="{{ url('/howtoget') }}" class="menu">
                    COMO LLEGAR
                </a>
            </li>-->
            <li @if(($pag)=='product') class="active" @else class="" @endif>
                <a href="{{ url('/product') }}" class="menu">
                    PRODUCTOS
                </a>
            </li>
            <li @if(($pag)=='courses') class="active" @else class="" @endif>
                <a href="{{ url('/courses') }}" class="menu">
                    CAPACITACIÓNES
                </a>
            </li>
            <li @if(($pag)=='contacto') class="active" @else class="" @endif>
                <a href="{{ url('/contact') }}" class="menu">
                    CONTACTO
                </a>
            </li>
        </ul>
    </nav>
</header>