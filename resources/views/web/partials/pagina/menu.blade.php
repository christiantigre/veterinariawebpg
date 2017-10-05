<header class="">
        <div class="auto">
            <a class="navbar-brand auto visible-xs hidden-sm hidden-md hidden-lg" href="www.google.com">
                <img class="hidden-xs hidden-sm hidden-md visible-lg" src="theme/images/logo.png">
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
            <li @if(($pag)=='nosotros') class="active" @else class="" @endif">
                <a href="{{ url('/us') }}" class="menu">
                    NOSOTROS
                </a>
            </li>
            <li @if(($pag)=='mascotas') class="active" @else class="" @endif>
                <a href="{{ url('/pet') }}" class="menu">
                    MASCOTAS
                </a>
                <ul>
                    <li>
                        <a href="#">
                            Product 1
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    Sub Product
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Sub Product
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Product 2
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    Sub Product
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Sub Product
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
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
            <li @if(($pag)=='contacto') class="active" @else class="" @endif>
                <a href="{{ url('/contact') }}" class="menu">
                    CONTACTO
                </a>
            </li>
        </ul>
    </nav>
</header>