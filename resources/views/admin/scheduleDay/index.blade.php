
@if (Session::has('scheduledays'))
<div class="alert alert-success" id="mensaje_principal">
    <button class="close" data-close="alert"></button>
    <span>
        {{ session('scheduledays') }}
    </span>
</div>
@endif


	<!-- BEGIN CONTENT -->

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{ trans('titles.scheduleday') }}
		</h3><br>

<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="#">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">{{ trans('titles.days') }}</a>
		</li>
	</ul>
	<div class="page-toolbar">
		<div class="btn-group ">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                Acciones <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a onclick="cargarDatos('scheduleDays/create')">{{ trans('titles.new_scheduleDay') }}</a>
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
								<i class="fa fa-globe"></i>{{ trans('titles.scheduleday') }}
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

								<th align="center">Horarios</th>
								<th align="center">Dias</th>
							

								<th align="center"></th>
							</tr>
							</thead>

							<tbody>
								@foreach ($scheduledays as $scheduleday)
								    <tr>
								    <td >{{ $scheduleday->id_horarios }}</td>
								    <td >{{ $scheduleday->id_dia }}</td>
								    


								    <td>
								                <div align="center">
								                  <a onclick="cargarDatos('scheduleDays/{{ $scheduleday->id }}/edit')">Editar</a>
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
	