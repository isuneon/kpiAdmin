@extends('template.auth')

@section('content')

    <!-- BEGIN LOGIN FORM -->

<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-body">


        
    <form class="login-form" method="POST" action="{{ url('/login') }}">


        <div align="center">
            <h3 class="form-title">{{ trans('titles.s_ini') }}</h3>
        </div>

       

        @if (Session::has('login'))
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <span>
                    {{ session('login') }}
                </span>
            </div>
        @endif



        {{ csrf_field() }}

         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="email" type="email" class="form-control" name="email">
                <label for="form_control_1">{{ trans('auth.USN') }}</label>        
            </div>  

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
   
            <div class="form-group form-md-line-input form-md-floating-label has-info">
                <input id="password" type="password" class="form-control" name="password">
                <label for="form_control_1">{{ trans('auth.PSW') }}</label>        
            </div>  

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-block uppercase">{{ trans('auth.LOGN') }}</button>
            <div class="md-checkbox-inline">
                <div class="md-checkbox">
                    <input type="checkbox" name="remember" id="checkbox6" class="md-check">
                    <label for="checkbox6">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span>{{ trans('auth.RMBR') }} 
                    </label>
                </div>
            </div>                                                            

            <div align="right">
              <a href="javascript:;" id="forget-password" class="forget-password">{{ trans('auth.FRGT') }}</a>
            </div>

        </div>

        <div class="dropdown pull-right dropdown-language">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          <img alt="" src="{{ trans('Layout.Flag') }}">
            <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu pull-right">
              <li>
                <a href="{{ url('lang', ['en']) }}">
                <img alt="" src="assets/global/img/flags/us.png">US</a>
              </li>
              <li>
                <a href="{{ url('lang', ['es']) }}">
                <img alt="" src="assets/global/img/flags/es.png">ES</a>
              </li>
            </ul>
        </div>

    </form>

    <!-- END LOGIN FORM -->

<form class="forget-form" action="{{ url('/forget') }}" method="post" style="display:none">
    <div align="center">
        <h3>{{ trans('titles.FPS') }}</h3>
    </div>

    <p>
         {{ trans('auth.p_int') }}
    </p>


    @if (Session::has('login'))
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <span>
                    {{ session('login') }}
                </span>
            </div>
        @endif      


     {{ csrf_field() }}




    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="form-group form-md-line-input form-md-floating-label has-info">
            <input class="form-control validate" type="email"  name="email" required>
            <label for="form_control_1">Email</label>        
        </div>

    </div>

    <div class="form-actions">
        <button type="button" id="back-btn" class="btn btn-default">{{ trans('forms.back') }}</button>
        <button type="submit" class="btn btn-success blue pull-right">{{ trans('forms.send') }}</button>
    </div>
</form>

</div>

</div>
</div>
</div>
</div>
</div>

@endsection

