@extends('template.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Usuario</div>
                <div class="panel-body">
					<!-- BEGIN FORM-->
                    <div id="notificacion_resul_fanu"></div>
                    <!-- class="form_entrada" se le agrega esta clase eal formulario para poder identificarla en AJAX   -->
                  	<form id="form_crea_usuario" class="form-horizontal form_entrada" role="form" method="POST" action="{{ url('/agregar_nuevo_usuario') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombre de Usuario</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Codigo de Usuario</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="co_usuario" value="{{ old('co_usuario') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="apellido" value="{{ old('apellido') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirme Contraseña</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                            </div>
                        </div>

                        <div class="form-group">
                                <div class="col-md-offset-4 col-md-6">
                                    <button type="submit" class="btn btn-circle blue">Crear Usuario</button>
                                    <button type="button" class="btn btn-circle red">Cancelar</button>
                                </div>
                        </div>
                    </form>
					<!-- END FORM-->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
