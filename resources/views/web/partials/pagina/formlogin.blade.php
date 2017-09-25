<form action="{{ url(config('adminlte.login_url', 'login')) }}" class="form" id="login-nav" method="post">
    {!! csrf_field() !!}


    <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
        <label class="sr-only" for="exampleInputEmail2">
            Correo
        </label>
        <input type="email" id="exampleInputEmail2" name="email" class="form-control" value="{{ old('email') }}"
        placeholder="{{ trans('adminlte::adminlte.email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>


    <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
        <label class="sr-only" for="exampleInputPassword2">
            Contraseña
        </label>
        <input type="password"  id="exampleInputPassword2" name="password" class="form-control"
        placeholder="{{ trans('adminlte::adminlte.password') }}">
        <div class="help-block text-right">
            <a href="">
                Olvidó su clave ?
            </a>
        </div>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>


    <div class="form-group">
        <button type="submit"
        class="btn btn-primary btn-block btn-flat">{{ trans('adminlte::adminlte.sign_in') }}</button>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="remember"> {{ trans('adminlte::adminlte.remember_me') }}
        </input>
    </label>
</div>
</form>