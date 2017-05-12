<h3 class="page-title">
            {{ trans('titles.days') }}
        </h3><br>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="/">Config</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="/day">{{ trans('titles.days') }}</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">{{ trans('titles.edit_day') }}</a>
                    </li>
                </ul>

            </div>
            <br>


    <div class="row">
        <div class="col-md-12">
            
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green">
                        <i class="icon-pin font-green"></i>
                        <span class="caption-subject bold uppercase">{{ trans('forms.N_DATA') }}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                  	<form id="form_edita_usuario" class="form-horizontal form_entrada" role="form" method="POST" action="{{ url('/editar_usuario') }}">
                        {!! csrf_field() !!}
                        <!--  Usado para saber que usaurio estamos editando -->
                        <input type="hidden" name="id_usuario" value="{{ $usuario->id }}">

                        <div class="form-group form-md-line-input form-md-floating-label">
                            <label class="col-md-4 control-label">{{ trans('forms.UN') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $usuario->name }}">
                            </div>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ $usuario->email }}">

                            </div>
                        </div>


                        <div class="form-group form-md-line-input form-md-floating-label">
                            <label class="col-md-4 control-label">{{ trans('forms.UC') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="co_usuario" value="{{ $usuario->co_usuario }}">

                            </div>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label">
                            <label class="col-md-4 control-label">{{ trans('forms.FN') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre" value="{{ $usuario->nombre}}">

                            </div>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label">
                            <label class="col-md-4 control-label">{{ trans('forms.LN') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="apellido" value="{{ $usuario->apellido }}">

                            </div>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label">
                            <label class="col-md-4 control-label">{{ trans('layout.modules') }}:</label>

                            <div class="col-md-6">



                                <div class="md-checkbox-inline">
                                    <div class="row">
                                    @foreach($modules as $module)
                                        <div class="col-md-6">
                                            <div class="md-checkbox">
                                                <input type="checkbox" name="modules[]" value='{{$usuario->co_modulo}}' id="checkbox{{$module->co_modulo}}" class="md-check">
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

                        <div class="form-group form-md-line-input form-md-floating-label">
                                <div class="col-md-offset-4 col-md-6">
                                    <button type="submit" class="btn btn-circle blue">{{ trans('forms.update') }}</button>
                                    <button type="button" class="btn btn-circle red">{{ trans('forms.cancele') }}</button>
                                </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>



{{-- <h3 class="page-title">
            {{ trans('titles.days') }}
        </h3><br>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="/">Config</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="/day">{{ trans('titles.days') }}</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">{{ trans('titles.edit_day') }}</a>
                    </li>
                </ul>

            </div>
            <br>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">

                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-green">
                                <i class="icon-pin font-green"></i>
                                <span class="caption-subject bold uppercase">{{ trans('forms.N_DATA') }}</span>
                            </div>

                        </div>
                        <div class="portlet-body form">
                            <form id="formDay" method="post" >
                                {{ csrf_field() }}
                                
                                <div class="form-body">
                                    <div class="col-lg-12">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <label for="form_control_4">dia</label>
                                            <input type="text" name="dia" class="form-control" id="form_control_4" value="{{$day->dia}}">
                                            <span class="help-block"></span>
                                        </div>                                  
                                    </div>                                  
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-actions noborder">
                                    <a onclick="putDatos('day/{{$day->id}}', 'formDay')" >
                                    <button type="button" class="btn blue">{{trans('forms.update')}}</button>
                                    </a>

                                    <a onclick="cargarDatos('day')">
                                    <button type="button" class="btn default">{{trans('forms.cancele')}}</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 --}}