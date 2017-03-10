@extends('template.auth')

@section('content')

    <!-- BEGIN LOGIN FORM -->

<div class="container">
 <div class="row">
  <div class="col-md-6 col-md-offset-3">
   <div class="panel panel-default">
     <div class="panel-body">

    <form class="login-form" method="POST" action="{{ url('/login') }}">
      <div align="center"><h3 class="form-title">Inicio de Sesión</h3></div>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
            Introduzca su Nombre de Usuario y su Contraseña. </span>
        </div>
        {{ csrf_field() }}

         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Nombre de Usuario</label>
            <input id="email" type="email" class="form-control form-control-solid placeholder-no-fix"  name="email" value="usuario@test.com" autocomplete="off" placeholder="Nombre de Usuario">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
            <input id="password" type="password" class="form-control form-control-solid placeholder-no-fix" name="password" value="123456" autocomplete="off" placeholder="Contraseña">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success uppercase">Entrar</button>
            <label class="rememberme check">
            <input type="checkbox" name="remember" /> Recuérdame </label>
            <div align="right">
              <a href="javascript:;" id="forget-password" class="forget-password">Se me olvidó la Contraseña</a>
            </div>
        </div>
        <div class="login-options">

        </div>
    </form>
    <!-- END LOGIN FORM -->

  <form class="forget-form" action="index.html" method="post" style="display:none">
    <div align="center"><h3>¿Contraseña olvidada?</h3></div>
    <p>
         Ingresa tu correo electrónico para reestablecer su contraseña.
    </p>
    <div class="form-group">
        <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
    </div>
    <div class="form-actions">
        <button type="button" id="back-btn" class="btn btn-default">Volver</button>
        <button type="submit" class="btn btn-success uppercase pull-right">Enviar</button>
    </div>
</form>

</div>
</div>
</div>
</div>
</div>

@endsection
