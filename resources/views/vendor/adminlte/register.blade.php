@extends('adminlte::master')

@section('adminlte_css')
<link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
@yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
<div class="register-box">
    <div class="register-logo">
        <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
        <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                placeholder="{{ trans('adminlte::adminlte.email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                <input type="password" name="password" class="form-control"
                placeholder="{{ trans('adminlte::adminlte.password') }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control"
                placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('terminosycondiciones') ? 'has-error' : '' }}">
                <label for="condiciones">He leído y acepto los <a href="" class="view-txt" onclick="leer();" data-toggle="modal" data-target="#myModal">términos y condiciones</a> de uso</label>
                <input type="checkbox" name="terminosycondiciones" id="terminosycondiciones"/>
                @if ($errors->has('terminosycondiciones'))
                <span class="help-block">
                    <strong>{{ $errors->first('terminosycondiciones') }}</strong>
                </span>
                @endif
            </div>




            


            <button type="submit"
            class="btn btn-primary btn-block btn-flat"
            >{{ trans('adminlte::adminlte.register') }}</button>
        </form>
        <div class="auth-links">
            <a href="{{ url(config('adminlte.login_url', 'login')) }}"
            class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
        </div>
    </div>
    <!-- /.form-box -->
</div><!-- /.register-box -->




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









@stop

@section('adminlte_js')
@yield('js')
@stop

