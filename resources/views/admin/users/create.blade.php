<h3 class="page-title">{{ trans('titles.users') }}</h3><br>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Config</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="/user">{{ trans('titles.users') }}</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">{{ trans('titles.new_user') }}</a>
        </li>
    </ul>
</div>
<br>
<!-- END PAGE HEADER-->

<!-- CREATE FORM -->

        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <!-- END EXAMPLE TABLE PORTLET-->
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-pin font-green"></i>
            <span class="caption-subject bold uppercase"> Floating Labels</span>
        </div>                                            
    </div>
    
     <div class="portlet-body form">
        <form id="form_crea_usuario" class="form-horizontal form_entrada" role="form" method="POST" action="{{ url('user') }}">
            {!! csrf_field() !!}
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <label >E-mail</label>
                            <input type="email" class="form-control" name="email" value="">
                            <label class="help-block"></label>
                        </div>
                    </div> 
                    <div class="col-md-6">         
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <label >{{ trans('forms.DN') }}</label>
                            <input type="email" class="form-control" name="descripcion" value="">
                            <label class="help-block"></label>
                        </div>
                    </div>  
                </div> 

                <div class="row">    
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <label >{{ trans('forms.FN') }}</label>
                            <input type="text" class="form-control" name="nombre" >
                            <label class="help-block"></label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <label >{{ trans('forms.LN') }}</label>
                            <input type="text" class="form-control" name="apellido" value="">
                            <label class="help-block"></label>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <label >{{ trans('forms.UPS') }}</label>
                            <input type="password" class="form-control" name="password" >
                            <label class="help-block"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <label >{{ trans('forms.UPSC') }}</label>
                            <input type="text" class="form-control" name="password_confirmation">
                            <label class="help-block"></label>
                        </div>
                    </div>
                </div>  

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <select class="form-control" id="form_control_1">
                                <option value="">Mostrar Tipo de usuario</option>
                                <option value="">Usuario</option>
                                <option value="">Administrador</option>
                            </select>
                            
                        <div class="col-md-6">
                            <div class="portlet-body form">
                                <form role="form">
                                    <div class="form-group form-md-checkboxes">
                                        <div class="md-checkbox-inline">
                                            <div class="md-checkbox">
                                                <input type="checkbox" id="checkbox6" class="md-check">
                                                <label for="checkbox6">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                                Activo</label>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>                    

            </div>
            <br>
            <br>            
            <div class="form-group">
                <div class="portlet-title">
                    <div class="caption font-green">
                        <i class="icon-pin font-green"></i>
                        <span class="caption-subject bold uppercase">{{ trans('layout.modules') }}:</span>
                    </div>                                            
                </div>                

                <br>

                <div class="col-md-6">
                    <div class="md-checkbox-inline">
                        <div class="row">
                        @foreach($modules as $module)
                            <div class="col-md-6">
                                <div class="md-checkbox">
                                    <input type="checkbox" name="modules[]" value='{{$module->co_modulo}}' id="checkbox{{$module->co_modulo}}" class="md-check">
                                    <label for="checkbox{{$module->co_modulo}}">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    {{$module->descripcion}} </label>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>                        
                </div>
            </div>
            <div class="form-actions noborder">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-circle blue">{{ trans('forms.CRU') }}</button>
                    <button type="button" class="btn btn-circle default">{{ trans('forms.cancele') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>


