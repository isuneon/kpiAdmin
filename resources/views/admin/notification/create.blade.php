@extends('layouts.admin')
@extends('menu')
@extends('menuside')

@section('content')
<div class="page-container">
			
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{ trans('titles.notification') }} 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="/">Config</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="/notification">Notificación</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Nueva Notificación</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				
				<div class="col-md-12 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-green">
								<i class="icon-pin font-green"></i>
								<span class="caption-subject bold uppercase"> Datos de notificaciones</span>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn btn-sm default dropdown-toggle" href="javascript:;" data-toggle="dropdown">
									Settings <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
											<i class="fa fa-pencil"></i> Edit </a>
										</li>
										<li>
											<a href="javascript:;">
											<i class="fa fa-trash-o"></i> Delete </a>
										</li>
										<li>
											<a href="javascript:;">
											<i class="fa fa-ban"></i> Ban </a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="javascript:;">
											<i class="i"></i> Make admin </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" method="post" action="/notification">
								{{ csrf_field() }}
								<div class="form-body">

									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" name="name" class="form-control" id="form_control_1">
											<label for="form_control_1">Nombre</label>
											<span class="help-block">Some help goes here...</span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label has-success">
											<input type="text"  class="form-control" id="form_control_1">
											<label for="form_control_1">Success input</label>
										</div>
										
									</div>
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" name="descripcion" class="form-control" id="form_control_1">
											<label for="form_control_1">Descripción</label>
											<span class="help-block">Some help goes here...</span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label has-warning">
											<input type="text" class="form-control" id="form_control_1">
											<label for="form_control_1">Warning input</label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label has-info">
											<select class="form-control" name="activo" id="form_control_1">
												<option value="0"></option>
												<option value="1">Habilitado</option>
												<option value="2">Deshabilitado</option>
											</select>
											<label for="form_control_1">Estatus</label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<textarea class="form-control" rows="3"></textarea>
											<label for="form_control_1">Textarea input</label>
										</div>
									</div>
								</div>
								<div class="form-actions noborder">
									<button type="submit" class="btn blue">Guardar</button>
									<button type="button" class="btn default">Cancelar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- END CONTENT -->

</div>
@endsection