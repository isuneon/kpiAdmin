@extends('template.layout')

@section('content')

            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->

            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
          

            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line boxless tabbable-reversed">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_0" data-toggle="tab" aria-expanded="true">
                                Usuarios </a>
                            </li>
                            <li class="">
                                <a href="#tab_1" data-toggle="tab" aria-expanded="false">
                                Notificaciones </a>
                            </li>
                            <li>
                                <a href="#tab_2" data-toggle="tab">
                                Configuracion </a>
                            </li>
                            <li>
                                <a href="#tab_3" data-toggle="tab">
                                Elementos</a>
                            </li>                            
                            <li>
                                <a href="#tab_3" data-toggle="tab">
                                Elementos</a>
                            </li>        
                                                                                    <li>
                                <a href="#tab_3" data-toggle="tab">
                                Elementos</a>
                            </li>        

                        </ul>
                        <div class="tab-content">
                                                    <!--
                            <div class="portlet box blue">
                            <div class="portlet light bordered">
                            <div class="portlet light bg-inverse">
                            <div class="portlet box green">
                            <div class="row">
                            -->
                            <div class="tab-pane active" id="tab_0">
                                <div class="portlet box blue">

                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM--> 
                                            <form role="form">
                                                    <div class="form-body">
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Regular input</label>
                                                            <span class="help-block">Some help goes here...</span>
                                                        </div>

                                                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Success input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-warning">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Warning input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Error input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Info input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <select class="form-control" id="form_control_1">
                                                                <option value=""></option>
                                                                <option value="">Option 1</option>
                                                                <option value="">Option 2</option>
                                                                <option value="">Option 3</option>
                                                                <option value="">Option 4</option>
                                                            </select>
                                                            <label for="form_control_1">Dropdown sample</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <textarea class="form-control" rows="3"></textarea>
                                                            <label for="form_control_1">Textarea input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                            <input type="text" class="form-control" disabled="" id="form_control_1">
                                                            <label for="form_control_1">Disabled</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                            <input type="text" class="form-control edited" readonly="" value="You can't edit this" id="form_control_1">
                                                            <label for="form_control_1">Readonly</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <div class="form-control form-control-static">
                                                                email@example.com
                                                            </div>
                                                            <label for="form_control_1">Static Control</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control input-sm" id="form_control_1">
                                                            <label for="form_control_1">Small input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control input-lg edited" id="form_control_1">
                                                            <label for="form_control_1">Large input</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions noborder">
                                                        <button type="button" class="btn btn-circle blue">Submit</button>
                                                        <button type="button" class="btn btn-circle default">Cancel</button>
                                                    </div>

                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn btn-circle blue">Submit</button>
                                                                <button type="button" class="btn btn-circle default">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>                                                    
                                            </form>
                                        <!-- END FORM-->
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_1">
                                <div class="portlet box blue">

                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <form action="#" class="horizontal-form">
                                            <div class="form-body">
                                                <h3 class="form-section">Person Info</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Nombre</label>
                                                            <span class="help-block">Some help goes here...</span>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Apellido</label>
                                                            <span class="help-block">Some help goes here...</span>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <select class="form-control" id="form_control_1">
                                                                <option value=""></option>
                                                                <option value="">Option 1</option>
                                                                <option value="">Option 2</option>
                                                                <option value="">Option 3</option>
                                                                <option value="">Option 4</option>
                                                            </select>
                                                            <label for="form_control_1">Dropdown sample</label>
                                                        </div>
                                                    </div>
                                                    <!--/span-->

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
                                                                    Option 1 </label>
                                                                </div>
    
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Membership</label>
                                                            <div class="md-radio-list">
                                                                <div class="md-radio">
                                                                    <input type="radio" id="radio1" name="radio1" class="md-radiobtn">
                                                                    <label for="radio1">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span>
                                                                    Option 1 </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                    <input type="radio" id="radio2" name="radio1" class="md-radiobtn" checked="">
                                                                    <label for="radio2">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span>
                                                                    Option 2 </label>
                                                                </div>                    
                                                             </div>   
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <h3 class="form-section">Address</h3>
                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                       <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Street</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                       <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Ciudad</label>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                       <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Estado</label>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->

                                            </div>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn btn-circle blue"><i class="fa fa-check"></i> Save</button>
                                                <button type="button" class="btn btn-circle default">Cancel</button>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_2">


                                <div class="row">
                                    <!-- BEGIN FILA-->
                                    <div class="col-md-6 ">

                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-drop font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Radios</span>
                                                </div>
                                            </div>

                                            <div class="portlet-body">
                                                 <form role="form" class="margin-bottom-40">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>

                                    <div class="col-md-6 ">

                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-drop font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Radios</span>
                                                </div>
                                            </div>

                                            <div class="portlet-body form">
                                                 <form role="form" class="margin-bottom-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>  
                                    <!-- END FILA-->                                  
                                </div>  

                                <div class="row">
                                    <!-- BEGIN FILA-->
                                    <div class="col-md-12 ">

                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-drop font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Radios</span>
                                                </div>
                                            </div>

                                            <div class="portlet-body form">
                                                 <form role="form" class="margin-bottom-40">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                    </div>                                                 

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>
                                    <!-- END FILA-->                                                               
                                </div>         

                                <div class="row">
                                    <!-- BEGIN FILA-->
                                    <div class="col-md-4 ">

                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-drop font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Radios</span>
                                                </div>
                                            </div>

                                            <div class="portlet-body form">
                                                 <form role="form" class="margin-bottom-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>    

                                    <div class="col-md-4 ">

                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-drop font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Radios</span>
                                                </div>
                                            </div>

                                            <div class="portlet-body form">
                                                 <form role="form" class="margin-bottom-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div> 

                                    <div class="col-md-4 ">

                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-drop font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Radios</span>
                                                </div>
                                            </div>

                                            <div class="portlet-body form">
                                                 <form role="form" class="margin-bottom-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                                            <input type="text" class="form-control" id="form_control_8">
                                                                            <label for="form_control_1">Nombre</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>  
                                    <!-- END FILA-->                                                                                                 
                                </div>                                                           
                            </div>
                                
                            <div class="tab-pane" id="tab_3">
                                <div class="row">
                                    <div class="col-md-6 ">

                                        <!-- BEGIN SAMPLE FORM PORTLET  -->
                                        <!-- CheckBoxes  -->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-check font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Checkboxes</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form">
                                                    <div class="form-group form-md-checkboxes">
                                                        <label>Checkboxes</label>
                                                        <div class="md-checkbox-list">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="checkbox1" class="md-check">
                                                                <label for="checkbox1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 1 </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="checkbox2" class="md-check" checked="">
                                                                <label for="checkbox2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 2 </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="checkbox3" class="md-check">
                                                                <label for="checkbox3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 3 </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="checkbox4" disabled="" class="md-check">
                                                                <label for="checkbox4">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Disabled </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-md-checkboxes">
                                                        <label>Inline Checkboxes</label>
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="checkbox6" class="md-check">
                                                                <label for="checkbox6">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 1 </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="checkbox7" class="md-check" checked="">
                                                                <label for="checkbox7">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 2 </label>
                                                            </div>
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="checkbox8" class="md-check">
                                                                <label for="checkbox8">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 3 </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>
                                    <div class="col-md-6 ">
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-green">
                                                    <i class="icon-pin font-green"></i>
                                                    <span class="caption-subject bold uppercase"> Floating Labels</span>
                                                </div>                                            
                                            </div>

                                            <div class="portlet-body form">
                                                <form role="form">
                                                    <div class="form-body">
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Regular input</label>
                                                            <span class="help-block">Some help goes here...</span>
                                                        </div>

                                                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Success input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-warning">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Warning input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Error input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control" id="form_control_1">
                                                            <label for="form_control_1">Info input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <select class="form-control" id="form_control_1">
                                                                <option value=""></option>
                                                                <option value="">Option 1</option>
                                                                <option value="">Option 2</option>
                                                                <option value="">Option 3</option>
                                                                <option value="">Option 4</option>
                                                            </select>
                                                            <label for="form_control_1">Dropdown sample</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <textarea class="form-control" rows="3"></textarea>
                                                            <label for="form_control_1">Textarea input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                            <input type="text" class="form-control" disabled="" id="form_control_1">
                                                            <label for="form_control_1">Disabled</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                            <input type="text" class="form-control edited" readonly="" value="You can't edit this" id="form_control_1">
                                                            <label for="form_control_1">Readonly</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <div class="form-control form-control-static">
                                                                email@example.com
                                                            </div>
                                                            <label for="form_control_1">Static Control</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control input-sm" id="form_control_1">
                                                            <label for="form_control_1">Small input</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                            <input type="text" class="form-control input-lg edited" id="form_control_1">
                                                            <label for="form_control_1">Large input</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions noborder">
                                                        <button type="button" class="btn btn-circle blue">Submit</button>
                                                        <button type="button" class="btn btn-circle default">Cancel</button>
                                                    </div>

                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn btn-circle blue">Submit</button>
                                                                <button type="button" class="btn btn-circle red">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>                                                    
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                       

                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <!-- Radios  -->                    
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-drop font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Radios</span>
                                                </div>
                                                
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form">
                                                    <div class="form-group form-md-radios">
                                                        <label>Checkboxes</label>
                                                        <div class="md-radio-list">
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio1" name="radio1" class="md-radiobtn">
                                                                <label for="radio1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 1 </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio2" name="radio1" class="md-radiobtn" checked="">
                                                                <label for="radio2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 2 </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio3" name="radio1" class="md-radiobtn">
                                                                <label for="radio3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 3 </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio5" name="radio1" disabled="" class="md-radiobtn">
                                                                <label for="radio5">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Disabled </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-md-radios">
                                                        <label>Checkboxes</label>
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio6" name="radio2" class="md-radiobtn">
                                                                <label for="radio6">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 1 </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio7" name="radio2" class="md-radiobtn" checked="">
                                                                <label for="radio7">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 2 </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio8" name="radio2" class="md-radiobtn">
                                                                <label for="radio8">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>
                                                                Option 3 </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>
                                </div>
                            </div>                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        

@endsection