<div class="container-fluid top-fluid">
    @foreach($veterinary as $veterinari)
    <div class="col-md-3 text-center colo-fux logo hidden-xs hidden-sm">
        <p class="text-left text-center colo-fux">
            <a href="{{ url('/') }}">
                @if(!empty($veterinari->logo))
                <img class="logo_header" style="" src="{{ asset($veterinari->logo) }}" style="
                max-width: 40%; 
                height: auto; 
                " />
                @else
                <img class="logo_header" src="{{ asset('theme/images/log.png') }}" style="
                max-width: 40%; 
                height: auto; 
                " />
                @endif
            </a>
        </p>
    </div>
    <div class="col-md-3 text-center colo-fux info">
        <div class="" id="bs-megadropdown-tabs">
            <span class="nav-text">
                <i aria-hidden="true" class="fa fa-phone">
                </i>
                + {{ $veterinari->tlf1 }} | + {{ $veterinari->cel1 }}
                <i aria-hidden="true" class="fa fa-envelope">
                </i>
                {{ $veterinari->mail }}
            </span>
        </div>
    </div>
    <div class="col-md-3 text-center colo-fux ico">
        <div class="" id="bs-megadropdown-tabs">
            <a class="btn-social btn-facebook" href="{{ $veterinari->fb }}" target="_blank">
                <i class="fa fa-facebook">
                </i>
            </a>
            <a class="btn-social btn-twitter" href="{{ $veterinari->tw }}" target="_blank">
                <i class="fa fa-twitter">
                </i>
            </a>
            <a class="btn-social btn-instagram" href="{{ $veterinari->in }}" target="_blank">
                <i class="fa fa-instagram">
                </i>
            </a>
            <a class="btn-social btn-youtube" href="{{ $veterinari->yt }}" target="_blank">
                <i class="fa fa-youtube">
                </i>
            </a>
            <a class="btn-social btn-google-plus" href="{{ $veterinari->gg }}" target="_blank">
                <i class="fa fa-google-plus">
                </i>
            </a>
        </div>
    </div>
    @endforeach
    <div class="col-md-3 text-center colo-fux ">

        <div class="" id="bs-megadropdown-tabs">

            <ul class="nav navbar-nav navbar-right right ses_cta navegador">
                <li id="lisearch">

                <!--<div class="col-md-12 ">
                    <div class="input-group searcharea">
                        <input type="text" class="form-control SearchBar" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button class="btn btn-defaul SearchButton" type="button">
                                <span class=" glyphicon glyphicon-search SearchIcon" ></span>
                            </button>
                        </span>
                    </div><!-- /input-group -->
                    <!--</div><!-- /input-group -->



                          <!--<a class="search right_a hover_class" href="#search">
                                ...
                                <input type="text" class="form-control SearchBar" placeholder="Buscar...">
                                <span class="glyphicon glyphicon-search">
                                </span>
                            </a>-->

                            <div class="search_div dropdown-toggle right_a hover_class hidden-xs">
                                <!--<form id="buscador" name="buscador" method="post" action="{{ url('/busquedas') }}">-->


                                    {{--@include('web.partials.pagina.cajas.buscador')--}}


                                    </div>

                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle right_a hover_class" data-toggle="dropdown" href="#">
                                        CUENTA
                                        <span class="caret">
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu" id="login-dp">
                                        <li>
                                            <div class="row centered">
                                                <div class="col-md-12">
                                                    @if (Route::has('login'))

                                                    @auth
                                                    <ul class="licredentials dropdown-cred" id="ejm2">
                                                        <div class="row centered">
                                                            <div class="col-md-12 center">

                                                                <li>
                                                                  <span class="item">
                                                                    <div class="receipt-left">
                                                                        <span class="item-left">
                                                                            @if(!empty($user->img))
                                                                            <img class="img-responsive" alt="iamgurdeeposahan" style="width: 71px; border-radius: 43px;" src="{{ asset($user->img) }}" alt="" />
                                                                            @else
                                                                            <img class="img-responsive" alt="iamgurdeeposahan" style="width: 71px; border-radius: 43px;" src="{{ asset('uploads/statics/avatar.jpg') }}" alt="" />
                                                                            @endif
                                                                            <span class="item-info">
                                                                                <span>{{ $user->name }}</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </li>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <li>
                                                                <a href="{{ url('perfil') }}">
                                                                    <small>  Perfil</small>                                                    
                                                                </a>
                                                                @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                                                <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                                                  <small>
                                                                    {{ trans('adminlte::adminlte.log_out') }}
                                                                </small>
                                                            </a>
                                                        </li>
                                                        @else
                                                    </div>
                                                    <div class="col-md-6">
                                                       <li>
                                                        <a href="#"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                        >
                                                        <small>
                                                          {{ trans('adminlte::adminlte.log_out') }}
                                                      </small>
                                                  </a>
                                                  <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                                                    @if(config('adminlte.logout_method'))
                                                    {{ method_field(config('adminlte.logout_method')) }}
                                                    @endif
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </div>
                                    </div>

                                    @endif
                                    @else
                                    <div class="center">
                                        <li class="col">
                                            <a href="{{ url('/login') }}" class="pull-left"> Ingresar </a>
                                        </li>
                                        <li class="col">
                                          <a href="{{ ('/register') }}" class="pull-right">Registrarse</a> 
                                      </li>

                                  </div>
                                  @endauth
                                  @endif

                              </ul>
                          </div>
                      </div>
                  </li>
              </ul>
          </li>
      </ul>
  </div>
</div>
</div>

<style type="text/css">
.logo_header{
    max-width: 40%; 
    height: auto; 
}




.search_div {
    padding: 5px 0;
    width: 115px;
    height: 30px;
    position: relative;
    left: 10px;
    float: left;
    line-height: 22px;
    padding: 
}

.search_div input.buscarcampo {
    position: absolute;
    width: 0px;
    float: left;
    margin-left: 75px;
    -webkit-transition: all 0.7s ease-in-out;
    -moz-transition: all 0.7s ease-in-out;
    -o-transition: all 0.7s ease-in-out;
    transition: all 0.7s ease-in-out;
    height: 30px;
    line-height: 18px;
    padding: 0 2px 0 2px;
    border-radius:1px;
    top: 11px;
}

.search_div:hover input.buscarcampo, .search_div input.buscarcampo:focus {
    width: 200px;
    margin-left: -100px;
}

.postbutton {
    height: 30px;
    position: absolute;
    right: 0;
    top: 0px;
    border-radius:2px;
    border-color: #00CDF8;
    background-color:#00CDF8;
    margin: 11px;
}
.postbutton:hover{    
    border-radius:2px;
    border-color: #93CB00;
    background-color:#93CB00;
}
</style>
