<!-- BEGIN CONTENT -->
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- /.modal -->
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN PAGE HEADER-->
@if (Session::has('notification'))
<div class="alert alert-success" id="mensaje_principal">
    <button class="close" data-close="alert"></button>
    <span>
        {{ session('notification') }}
    </span>
</div>
@endif


<h3 class="page-title">
{{ trans('titles.notification') }}
</h3><br>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="#">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">{{ trans('titles.notification') }}</a>
		</li>
	</ul>

</div>
<br>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<!-- END EXAMPLE TABLE PORTLET-->
		<!-- BEGIN EXAMPLE TABLE PORTLET-->


                                <div class="portlet box blue">

                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <form action="#" class="horizontal-form">
                                            <div class="form-body">
                                                <h3 class="form-section">Configuracion de Notificaciones</h3>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <select class="form-control" id="form_control_1">
                                                                <option value=""></option>
                                                                <option value="">Resumen G</option>
                                                                <option value="">Reportes</option>
                                                                <option value="">Emails</option>
                                                                <option value="">Sincronizacion</option>
                                                            </select>
                                                            
                                                            <!--
                                                            <label for="form_control_1">Dropdown sample</label>
                                                            -->
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="portlet-body form">
                                                            <form role="form">
                                                                <div class="form-group form-md-checkboxes">
                                                                    <label>Dias</label>
                                                                    <div class="md-checkbox-inline">
                                                                        <div class="md-checkbox">
                                                                            <input type="checkbox" id="checkbox6" class="md-check">
                                                                            <label for="checkbox6">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span>
                                                                            Lunes</label>
                                                                        </div>
                                                                        <div class="md-checkbox">
                                                                            <input type="checkbox" id="checkbox7" class="md-check" checked="">
                                                                            <label for="checkbox7">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span>
                                                                            Martes</label>
                                                                        </div>
                                                                        <div class="md-checkbox">
                                                                            <input type="checkbox" id="checkbox8" class="md-check">
                                                                            <label for="checkbox8">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span>
                                                                            Miercoles</label>
                                                                        </div>
                                                                        <div class="md-checkbox">
                                                                            <input type="checkbox" id="checkbox9" class="md-check">
                                                                            <label for="checkbox9">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span>
                                                                            Jueves</label>
                                                                        </div>
                                                                        <div class="md-checkbox">
                                                                            <input type="checkbox" id="checkbox10" class="md-check">
                                                                            <label for="checkbox10">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span>
                                                                            Viernes</label>
                                                                        </div>
                                                                        <div class="md-checkbox">
                                                                            <input type="checkbox" id="checkbox11" class="md-check">
                                                                            <label for="checkbox11">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span>
                                                                            Sabado</label>
                                                                        </div>                                                                       <div class="md-checkbox">
                                                                            <input type="checkbox" id="checkbox12" class="md-check">
                                                                            <label for="checkbox12">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span>
                                                                            Domingo</label>
                                                                        </div>                                                                        
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!--/span-->                                                    
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="md-checkbox-list">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="checkbox1" class="md-check">
                                                                <label for="checkbox1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Activar Notificación</label>
                                                            </div>
                                                    	</div>
                                                    </div>
                                                    <!--/span-->

                                                </div>
                                                <!-- /row-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- BEGIN SAMPLE FORM PORTLET-->                                                        
                                                        <div class="portlet light bordered">
                                                            <div class="portlet-body">
                                                                 <form role="form" class="margin-bottom-40">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                                            <label for="form_control_1">Remitente</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                                            <input type="password" class="form-control" id="form_control_8">
                                                                                            <label for="form_control_1">Clave</label>
                                                                            </div>
                                                                        </div>

                                                                    </div>    
                                                                                                                                 
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                                            <label for="form_control_1">Para</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                                            <label for="form_control_1">CC</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                                            <label for="form_control_1">BCC</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- END SAMPLE FORM PORTLET-->
                                                    </div>                                                   
                                                </div>

                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-12">
														<div class="form">
                                                            <button type="submit" class="btn btn-circle blue"><i class="fa fa-check"></i> Save</button>
                                                            <button type="button" class="btn btn-circle default">Cancel</button>
			                                            </div>
		                                            </div>
                                                </div>
                                                <!--/row-->


                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                    </div>
                                </div>





		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->
</div>
</div>
<!-- END CONTENT -->