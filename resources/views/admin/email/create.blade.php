


	<!-- BEGIN CONTENT -->

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{ trans('titles.email') }}
		</h3><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="/">Config</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="/notification">{{ trans('titles.notification') }}</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">{{ trans('titles.new_email') }}</a>
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
								<span class="caption-subject bold uppercase">{{ trans('forms.E_DATA') }}</span>
							</div>

						</div>
						<div class="portlet-body form">
							<form id="formEmail"  method="post" ">
								{{ csrf_field() }}
								
								<div class="form-body">
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_4">to_email</label>
											<input type="text" name="to_email" class="form-control" id="form_control_4" value="{{$email->to_email}}">
											<span class="help-block"></span>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_2">cc_email</label>
											<input type="text"  class="form-control" name="cc_email" id="form_control_2" value="{{$email->cc_email}}">
											<label class="help-block"></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_2">bcc_email</label>
											<input type="text"  class="form-control" name="bcc_email" id="form_control_2" value="{{$email->bcc_email}}">
											<label class="help-block"></label>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="form-actions noborder">
									<a onclick="postDatos('email', 'formEmail')" >
									<button type="button" class="btn btn-circle blue">{{trans('forms.create')}}</button>
									</a>

									<a onclick="cargarDatos('email')">
									<button type="button" class="btn btn-circle red">{{trans('forms.cancele')}}</button>
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


<!-- END CONTENT -->


