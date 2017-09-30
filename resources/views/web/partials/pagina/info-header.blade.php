 <div class="container-fluid top-fluid">
@foreach($veterinary as $veterinari)
    <div class="col-md-3 text-center colo-fux logo hidden-xs hidden-sm">
        <p class="text-left text-center colo-fux">
            <a href="{{ url('/') }}">
                @if(!empty($veterinari->logo))
                <img class="navbar-brand navbar-brand-logo brand-centered" src="{{ asset($veterinari->logo) }}"/>
                @else
                <img class="navbar-brand navbar-brand-logo brand-centered" src="{{ asset('theme/images/log.png') }}"/>
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
            <ul class="nav navbar-nav navbar-right right ses_cta">
                <li id="lisearch">
                    <a class="search right_a hover_class" href="#search">
                        ...
                        <span class="glyphicon glyphicon-search">
                        </span>
                    </a>
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
                                                            <img class="img-responsive" alt="iamgurdeeposahan" style="width: 71px; border-radius: 43px;" src="{{ asset('theme/images/perfil/perfil.jpg') }}" alt="" />
                                                            <span class="item-info">
                                                                <span>Username</span>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </span>
                                            </li>
                                        </div>
                                        <div class="col-md-6">
                                            <li>
                                                <a href="{{ url('/home') }}">
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
                          <a href="{{ ('register') }}" class="pull-right">Registrarse</a> 
                      </li>
                        <!--<li class="col">-->
                          <!--<a href="{{ route('login') }}" class="pull-left"><i class="fa fa-sign-in mr-5"></i>Ingresar</a> -->
                      <!--</li>-->
                      <!--<li class="col">
                          <a href="{{ route('register') }}" class="pull-right">Registrarse</a> 
                      </li>-->
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
