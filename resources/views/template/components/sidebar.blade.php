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
		<span class="title">{{ trans('layout.Ad_Usuarios') }}</span>
		<span class="selected"></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="#" onclick="cargarformulario(1);">
					<i class="icon-bar-chart"></i>
					{{ trans('layout.crear_usu') }}
				</a>
			</li>
			<li>
				<a href="#" onclick="cargarformulario(2);">
					<i class="icon-bar-chart"></i>
					{{ trans('layout.lista_usu') }}
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="javascript:;">
		<i class="icon-home"></i>
		<span class="title">{{ trans('layout.tablero') }}</span>
		<span class="selected"></span>
		<span class="arrow closed"></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="#"  onclick="cargarlistado(1);">
					<i class="icon-bar-chart"></i>
					{{ trans('layout.t_admini') }}
				</a>
			</li>
			<li>
				<a href="#" >
					<i class="icon-bulb"></i>
					New Dashboard #1
				</a>
			</li>
			<li>
				<a href="#">
					<i class="icon-graph"></i>
					New Dashboard #2
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="javascript:;">
		<i class="icon-basket"></i>
		<span class="title">{{ trans('layout.ventas') }}</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="#">
				<i class="icon-home"></i>
				Dashboard</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-basket"></i>
				Orders</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-tag"></i>
				Order View</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-handbag"></i>
				Products</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-pencil"></i>
				Product Edit</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="javascript:;">
		<i class="icon-basket"></i>
		<span class="title">{{ trans('layout.compras') }}</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="#">
				<i class="icon-home"></i>
				Dashboard</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-basket"></i>
				Orders</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-tag"></i>
				Order View</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-handbag"></i>
				Products</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-pencil"></i>
				Product Edit</a>
			</li>
		</ul>
	</li>


	<li>
		<a href="javascript:;">
		<i class="icon-basket"></i>
		<span class="title">{{ trans('layout.cpc') }}</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="#">
				<i class="icon-home"></i>
				Dashboard</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-basket"></i>
				Orders</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-tag"></i>
				Order View</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-handbag"></i>
				Products</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-pencil"></i>
				Product Edit</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="javascript:;">
		<i class="icon-basket"></i>
		<span class="title">{{ trans('layout.cpp') }}</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="#">
				<i class="icon-home"></i>
				Dashboard</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-basket"></i>
				Orders</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-tag"></i>
				Order View</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-handbag"></i>
				Products</a>
			</li>
			<li>
				<a href="#">
				<i class="icon-pencil"></i>
				Product Edit</a>
			</li>
		</ul>
	</li>
</ul>
