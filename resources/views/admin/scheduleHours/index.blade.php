<!-- BEGIN CONTENT -->
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- /.modal -->
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
{{ trans('titles.schedulehour') }}
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
					<a onclick="cargarDatos('scheduleHours/create')">{{ trans('titles.new_scheduleHours') }}</a>
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
					<i class="fa fa-globe"></i>{{ trans('titles.schedulehour') }}
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
							<th align="center">id_horarios</th>
							<th align="center">Hora_sync</th>
							<th align="center">Estatus</th>
							
							<th align="center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($schedulehours as $schedulehour)
						<tr>
							<td >{{ $schedulehour->id_horarios }}</td>
							<td >{{ $schedulehour->hora_sync }}</td>
							<td >
							@if($schedulehour->activo)
								Activo
							@else
								Inactivo
							@endif
							</td>
							<td>
								<div align="center">
									<a onclick="cargarDatos('scheduleHours/{{ $schedulehour->id }}/edit')">Editar</a>
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