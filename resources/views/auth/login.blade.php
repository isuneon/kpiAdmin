@extends('layouts.login')

@section('content')


    <!-- BEGIN LOGIN FORM -->

    <form class="login-form" method="POST" action="{{ url('/login') }}">
      <h3 class="form-title">Inicio de Sesión</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
            Introduzca su Nombre de Usuario y su Contraseña. </span>
        </div>
        {{ csrf_field() }}

         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Nombre de Usuario</label>
            <input id="email" type="email" class="form-control form-control-solid placeholder-no-fix"  name="email" value="{{ old('email') }}" autocomplete="off" placeholder="Nombre de Usuario"">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
            <input id="password" type="password" class="form-control form-control-solid placeholder-no-fix" name="password" autocomplete="off" placeholder="Contraseña">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success uppercase">Entrar</button>
            <label class="rememberme check">
            <input type="checkbox" name="remember" />  Recuérdame </label>
            <a href="javascript:;" id="forget-password" class="forget-password">Se me olvidó la Contraseña</a>
            <a class="btn btn-link forget-password" href="javascript:;" id="forget-password" href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="login-options">

        </div>
    </form>
    <!-- END LOGIN FORM -->

  <form class="forget-form" action="index.html" method="post">
    <h3>Contraseña olvidada?</h3>
    <p>
         Ingresa tu correo electrónico para reestablecer su contraseña.
    </p>
    <div class="form-group">
        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
    </div>
    <div class="form-actions">
        <button type="button" id="back-btn" class="btn btn-default">Volver</button>
        <button type="submit" class="btn btn-success uppercase pull-right">Enviar</button>
    </div>
</form>

@endsection
