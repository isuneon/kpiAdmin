
@if (Session::has('email'))
<div class="alert alert-success" id="mensaje_principal">
    <button class="close" data-close="alert"></button>
    <span>
        {{ session('email') }}
    </span>
</div>
@endif

	<!-- BEGIN CONTENT -->


			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{ trans('titles.email') }}
		</h3><br>

<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="#">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">{{ trans('titles.email') }}</a>
		</li>
	</ul>
	<div class="page-toolbar">
		<div class="btn-group ">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                Acciones <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a onclick="cargarDatos('email/create')">{{ trans('titles.new_email') }}</a>
                </li>
            </ul>
        </div>
	</div>
</div>
<br>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->

					<!-- END EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>{{ trans('titles.email') }}
							</div>
							<div class="tools">
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>

								<th align="center">to_email</th>
								<th align="center">cc_email</th>
								<th align="center">bcc_email</th>

								<th align="center"></th>
							</tr>
							</thead>

							<tbody>
							@foreach ($emails as $email)
							    <tr>
									<td >{{ $email->to_email }}</td>
									<td >{{ $email->cc_email }}</td>
									<td >{{ $email->bcc_email }}</td>

									<td>
	                  					<div align="center">
	                  						<a onclick="cargarDatos('email/{{ $email->id }}/edit')">{{ trans('forms.edit') }}</a>
	                  					</div>
									</td>
								</tr>
							@endforeach
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	