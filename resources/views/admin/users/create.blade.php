<h3 class="page-title">
            {{ trans('titles.users') }}
        </h3><br>
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
                <form id="form_crea_usuario" class="form-horizontal form_entrada" role="form" method="POST" action="{{ url('user') }}">
                        {!! csrf_field() !!}

                       

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('forms.UC') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="co_cli" value="{{ old('co_cli') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('forms.FN') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('forms.LN') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="apellido" value="{{ old('apellido') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('forms.UPS') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('forms.UPSC') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('layout.modules') }}:</label>

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

                        <div class="form-group">
                                <div class="col-md-offset-4 col-md-6">
                                    <button type="submit" class="btn btn-circle blue">{{ trans('forms.CRU') }}</button>
                                    <button type="button" class="btn btn-circle red">{{ trans('forms.cancele') }}</button>
                                </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>



