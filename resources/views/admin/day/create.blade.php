

	<!-- BEGIN CONTENT -->
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{ trans('titles.days') }}
		</h3><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="/">Config</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="/day">{{ trans('titles.days') }}</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">{{ trans('titles.new_day') }}</a>
					</li>
				</ul>

			</div>
			<br>
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
							<form id="formDay" method="post" >
								{{ csrf_field() }}
								
								<div class="form-body">
									<div class="col-lg-12">
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_4">dia</label>
											<input type="text" name="dia" class="form-control" id="form_control_4" value="{{$day->dia}}">
											<span class="help-block"></span>
										</div>									
									</div>									
								</div>
								<div class="clearfix"></div>
								<div class="form-actions noborder">
									<a onclick="postDatos('day', 'formDay')" >
									<button type="button" class="btn blue">{{trans('forms.create')}}</button>
									</a>

									<a onclick="cargarDatos('day')">
									<button type="button" class="btn default">{{trans('forms.cancele')}}</button>
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


