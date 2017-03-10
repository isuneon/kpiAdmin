	<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">{{trans('titles.emails')}}</h4>
				</div>
				<div class="modal-body">
					 Widget settings form goes here
				</div>
				<div class="modal-footer">
					<button type="button" class="btn blue">{{trans('forms.close')}}</button>
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
		<div class="page-toolbar">
			<div class="btn-group pull-right">
				<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
				{{trans('forms.actions')}} <i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-right" role="menu">
					<li>
						<a href="/notification/create">{{trans('titles.newnotification')}}</a>
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
							<td > 
								<a onclick="showRelation(this)"> {{trans('forms.show')}} </a>
								<input type="hidden" value="{{$notification->emails}}">

							</td>

								<!-- <td > <a href="/email/{{ $notification->emails->id }}/edit"> {{ $notification->emails->id }} </a></td> -->
							@else
								<td >No posee</td>
							@endif


							<td>
              					<div align="center">
              						<a href="/notification/{{ $notification->id }}/edit">{{ trans('forms.edit') }}</a> 
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

<script type="text/javascript">
		
		
	function showRelation(a){
		
		$('.modal-body').html(a.parentElement.children[1].value)
		$('.modal').modal('toggle')
	}


</script>