


	<!-- BEGIN CONTENT -->

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{ trans('titles.config') }}
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
							<form  method="post" action="/config/{{$config->id}}">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="PUT">
								<div class="form-body">
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_4">Defa_cod_proveedor</label>
											<input type="text" name="defa_cod_proveedor" class="form-control" id="form_control_4" value="{{$config->defa_cod_proveedor}}">
											<span class="help-block"></span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_2">Defa_costo</label>
											<input type="text"  class="form-control" name="defa_costo" id="form_control_2" value="{{$config->defa_costo}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_2">Defa_pmaxgan</label>
											<input type="text"  class="form-control" name="defa_pmaxgan" id="form_control_2" value="{{$config->defa_pmaxgan}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<label for="form_control_2">Defa_language</label>
											<input type="text"  class="form-control" name="defa_language" id="form_control_2" value="{{$config->defa_language}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label ">
											<label for="form_control_5">Alert_mont_odp</label>
											<input type="text" class="form-control" name="alert_mont_odp" id="form_control_5" value="{{$config->alert_mont_odp}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label ">
											<label for="form_control_5">Alert_mont_com</label>
											<input type="text" class="form-control" name="alert_mont_com" id="form_control_5" value="{{$config->alert_mont_com}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label ">
											<label for="form_control_5">Alert_mont_cotz</label>
											<input type="text" class="form-control" name="alert_mont_cotz" id="form_control_5" value="{{$config->alert_mont_cotz}}">
											<label class="help-block"></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group form-md-line-input form-md-floating-label ">
											<label for="form_control_5">Defa_cod_tip_banco</label>
											<input type="text" class="form-control" name="defa_cod_tip_banco" id="form_control_5" value="{{$config->defa_cod_tip_banco}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label ">
											<label for="form_control_5">Defa_precio</label>
											<input type="text" class="form-control" name="defa_precio" id="form_control_5" value="{{$config->defa_precio}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label ">
											<label for="form_control_5">Defa_p_est_cos</label>
											<input type="text" class="form-control" name="defa_p_est_cos" id="form_control_5" value="{{$config->defa_p_est_cos}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label ">
											<label for="form_control_5">Defa_moneda</label>
											<input type="text" class="form-control" name="defa_moneda" id="form_control_5" value="{{$config->defa_moneda}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label ">
											<label for="form_control_5">Alert_mont_odc</label>
											<input type="text" class="form-control" name="alert_mont_odc" id="form_control_5" value="{{$config->alert_mont_odc}}">
											<label class="help-block"></label>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label ">
											<label for="form_control_5">Alert_mont_fact</label>
											<input type="text" class="form-control" name="alert_mont_fact" id="form_control_5" value="{{$config->alert_mont_fact}}">
											<label class="help-block"></label>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="form-actions noborder">
									<button type="submit" class="btn blue">{{trans('forms.update')}}</button>
									<a href="/config">

									<button type="button" class="btn default">{{trans('forms.cancele')}}</button>
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


<!-- END CONTENT -->
