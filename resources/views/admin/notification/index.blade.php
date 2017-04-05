



	<!-- BEGIN CONTENT -->

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{ trans('titles.notification') }}
		</h3><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
				<div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Acciones <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="/notification/create">Nueva notificación</a>
							</li>
							<li>
								<a href="#">Accion B</a>
							</li>
							<li>
								<a href="#">Algo aqui</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
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
								<i class="fa fa-globe"></i>{{ trans('titles.notification') }}
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

								<th align="center">descripcion</th>
								<th align="center">sender_user</th>
								<th align="center">sender_pass</th>
								<th align="center">sender_asunto</th>
								<th align="center">sender_cuerpo</th>
								<th align="center">emails</th>

								<th align="center"></th>
							</tr>
							</thead>

							<tbody>
								@foreach ($notifications as $notification)
								    <tr>
								    <td >{{ $notification->descripcion }}</td>
								    <td >{{ $notification->sender_user }}</td>
								    <td >{{ $notification->sender_pass }}</td>
								    <td >{{ $notification->sender_asunto }}</td>
								    <td >{{ $notification->sender_cuerpo }}</td>

								    @if($notification->emails != null)
								      <td > <a href="/email/{{ $notification->emails->id }}/edit"> {{ $notification->emails->id }} </a></td>
								    @else
								      <td >No posee</td>
								    @endif


								    <td>
					                <div align="center">
					                  <a onclick="cargarDatos('notification', '{{ $notification->id }}')">Editar</a>
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
	

