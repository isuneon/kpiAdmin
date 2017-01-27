@extends('template.auth')

@section('content')
		<div class="content">			
			<!-- BEGIN LOGIN FORM -->

			<form class="login-form" method="post" action="\login">
				<!-- ENVIA LOS DATOS DEL FORMULARIO 
				 METODO = POST
				 RUTA	= LOGIN
				-->

				<!-- TOKEN DE SEGURIDAD -->
				<input type="hidden" name="_token" value="{{csrf_token()}}" id="token_login">  
				<!--   		{{ csrf_field() }} 		 {{ $errors->first('users') }}		-->
				<!-- TOKEN DE SEGURIDAD -->


				<h3 class="form-title">Inicio de Sesión</h3>

				<div class="alert alert-danger display-hide">
					<button class="close" data-close="alert"></button>
					<span>Todos los Campos son Obligatorios.</span>
				</div>		

                @if ($errors->has('email'))
					<div class="alert alert-danger display">
						<button class="close" data-close="alert"></button>
						<span>Credenciales no validas.</span>
					</div>	             
                @endif	

				 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<input id="email" type="email" class="form-control form-control-solid placeholder-no-fix" name="email"  value="{{ old('email') }}" autocomplete="on" placeholder="Email"  />

                </div>
					

				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<input id="password" type="password" class="form-control form-control-solid placeholder-no-fix" name="password"autocomplete="off" placeholder="Contraseña"  />

				</div>

				<div class="form-group">					
					<button type="submit" class="btn btn-primary btn-block uppercase" onclick="">Acceder</button>	


					<!--<label class="rememberme check">
					<input type="checkbox" name="remember" value="1"/>Recuerdame </label>
					
					<a href="javascript:;" id="forget-password" class="forget-password"></a>-->
				</div>			

				<ul class="nav">
					<li class="dropdown dropdown-language">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" src="assets/global/img/flags/es.png">						
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu">
							<li>
								<a href="index.php/en/dash">
									<img alt="" src="assets/global/img/flags/us.png"> US
								</a>
							</li>
							<li>
								<a href="index.php/es/dash">
									<img alt="" src="assets/global/img/flags/es.png"> ES
								</a>
							</li>							
						</ul>
					</li>						
				</ul>		
				
				<div class="copyright"">			
			 		2016 © Kpi Social.
				</div>		
			</form>
			<!-- END LOGIN FORM -->

		</div>			
@endsection