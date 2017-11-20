<!-- BEGIN CONTENT -->
<h3 class="page-title">
    {{ trans('titles.users') }}
</h3>
<br>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="#">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">{{ trans('titles.users') }}</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group ">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                Acciones <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a onclick="cargarDatos('user/create')">{{ trans('titles.new_user') }}</a>
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
                    <i class="fa fa-globe"></i>{{ trans('titles.users') }}
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
                            <th align="center">Email</th>                        
                            <th align="center">{{ trans('titles.name') }}</th>
                            <th align="center">{{ trans('titles.surname') }}</th>
                            <th align="center">Descripcion</th>
                            <th align="center">Fecha de Creacion</th>
                            <th align="center">Activo</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                        <tr>
                            <td>{{ $u->email }}</td>                        
                            <td>{{ $u->nombre }}</td>
                            <td>{{ $u->apellido }}</td>
                            <td>Descripcion</td>
                            <td>02/12/2017</td>
                            <td></td>                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
