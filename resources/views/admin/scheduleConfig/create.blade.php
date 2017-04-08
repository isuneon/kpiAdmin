


	<!-- BEGIN CONTENT -->
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{ trans('titles.scheduleConfig') }}
		</h3><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="/">Config</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="/scheduleConfig">{{ trans('titles.scheduleConfig') }}</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">{{ trans('forms.N_NOTIF') }}</a>
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
								<span class="caption-subject bold uppercase">{{ trans('forms.N_DATA') }}</span>
							</div>

						</div>
						<div class="portlet-body form">
							<form id="formScheduleConfig"  method="post" >
								{{ csrf_field() }}
								
								<div class="form-body">
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label has-warning">
											<label for="form_control_5">name</label>
											<input type="text" class="form-control" name="name" id="form_control_5" value="{{$scheduleConfig->name}}">
											<label class="help-block"></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_1">descripcion</label>
											<input type="text" name="descripcion" class="form-control" id="form_control_1" value="{{$scheduleConfig->descripcion}}">
											<span class="help-block"></span>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="form-actions noborder">
									<a onclick="postDatos('scheduleConfig/{{$scheduleConfig->id}}', 'formScheduleConfig')" >
									<button type="button" class="btn btn-circle blue">{{trans('forms.create')}}</button>
									</a >

									<a onclick="cargarDatos('scheduleConfig')">
									<button type="button" class="btn btn-circle default">{{trans('forms.cancele')}}</button>
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

<!-- END CONTENT -->

