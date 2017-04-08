



	<!-- BEGIN CONTENT -->

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{ trans('titles.scheduleconfig') }}
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
                    <a onclick="cargarDatos('scheduleConfig/create')">Registrar Usuario</a>
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
								<i class="fa fa-globe"></i>{{ trans('titles.scheduleconfig') }}
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
								@foreach ($scheduleconfigs as $scheduleconfig)
								    <tr>
								    <td >{{ $scheduleconfig->id_horarios }}</td>
								    <td >{{ $scheduleconfig->id_dia }}</td>
								    


								    <td>
								                <div align="center">
								                  <a onclick="cargarDatos('scheduleConfig/{{ $scheduleconfig->id }}/edit')">Editar</a>
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
	