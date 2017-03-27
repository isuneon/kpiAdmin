<!-- BEGIN SIDEBAR MENU -->
<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->



<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->


	<li>
		<a href="javascript:;">
		<i class="icon-home"></i>
		<span class="title">{{ trans('layout.administration') }}</span>
		<span class="selected"></span>
		<span class="arrow "></span>
		</a>

		<ul class="sub-menu">
			<li>
				<a href="#" onclick="cargarformulario();">
					<i class="icon-bar-chart"></i>
					Administración
				</a>
			</li>
			<li>
				<a href="#" onclick="cargarformulario(4);">
					<i class="icon-bar-chart"></i>
					Configuración
				</a>
			</li>
			<li>
				<a href="#" onclick="cargarformulario(3);">
					<i class="icon-bar-chart"></i>
					Notificación
				</a>
			</li>
			<li>
				<a href="#" onclick="cargarformulario(6);">
					<i class="icon-bar-chart"></i>
					Días
				</a>
			</li>
			<li>
				<a href="#" onclick="cargarformulario(5);">
					<i class="icon-bar-chart"></i>
					Horarios días
				</a>
			</li>
			<li>
				<a href="#" onclick="cargarformulario(5);">
					<i class="icon-bar-chart"></i>
					Correos
				</a>
			</li>
			<li>
				<a href="#" onclick="cargarformulario(7);">
					<i class="icon-bar-chart"></i>
					Horarios config
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="javascript:;">
		<i class="icon-home"></i>
		<span class="title">{{ trans('layout.administration') }}</span>
		<span class="selected"></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
		@foreach($roles as $rol)
			
			<li>
				<a href="#" onclick="cargarformulario();">
					<i class="icon-bar-chart"></i>
					{{$rol->name}}
				</a>
			</li>
		@endforeach
			
		</ul>
		
	</li>

</ul>
