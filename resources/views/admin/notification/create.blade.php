@extends('layouts.admin')
@extends('menu')
@extends('menuside')

@section('content')

			
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
							
						</div>
						<div class="portlet-body form">
							<form  method="post" action="/notification/{{$notification->id}}">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="PUT">
								<div class="form-body">
									<div class="col-lg-12">
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_4">Sender_User</label>
											<input type="text" name="sender_user" class="form-control" id="form_control_4" value="{{$notification->sender_user}}">
											<span class="help-block"></span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_2">Sender_pass</label>
											<input type="text"  class="form-control" name="sender_pass" id="form_control_2" value="{{$notification->sender_pass}}">
											<label class="help-block"></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label has-warning">
											<label for="form_control_5">Asunto</label>
											<input type="text" class="form-control" name="sender_asunto" id="form_control_5" value="{{$notification->asunto}}">
											<label class="help-block"></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_1">Descripción</label>
											<input type="text" name="descripcion" class="form-control" id="form_control_1" value="{{$notification->descripcion}}">
											<span class="help-block"></span>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_3">Cuerpo</label>
											<textarea class="form-control" name="sender_cuerpo" id="form_control_3" rows="3">{{$notification->cuerpo}}</textarea>
											<label class="help-block"></label>
										</div>
										
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="form-actions noborder">
									<button type="submit" class="btn blue">{{trans('forms.update')}}</button>
									<button type="button" class="btn default">{{trans('forms.cancele')}}</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- END CONTENT -->

@endsection