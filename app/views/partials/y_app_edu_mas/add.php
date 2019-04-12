
<?php
$comp_model = new SharedController;

$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;

?>

<section class="page">
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-12 comp-grid">
                    <h3 class="record-title">Add New Y App Edu Mas</h3>
                    
                </div>
                
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>
    
    <div  class="">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-md-7 comp-grid">
                    
                    <?php $this :: display_page_errors(); ?>
                    
                    <div  class="card animated fadeIn">
                        <form id="y_app_edu_mas-add-form" role="form" enctype="multipart/form-data" class="form form-horizontal needs-validation"  novalidate action="<?php print_link("y_app_edu_mas/add") ?>" method="post">
                            <div class="card-body">
                                
                                
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="users_user_id">Users User Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input  id="users_user_id" value="<?php  echo $this->set_field_value('users_user_id',''); ?>" type="number" placeholder="Enter Users User Id" step="1"  required="" name="users_user_id" class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="z_Language_Spoken_Id">Z Language Spoken Id <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input  id="z_Language_Spoken_Id" value="<?php  echo $this->set_field_value('z_Language_Spoken_Id',''); ?>" type="number" placeholder="Enter Z Language Spoken Id" step="1"  required="" name="z_Language_Spoken_Id" class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="z_yes_no_Id_Qus01">Z Yes No Id Qus01 <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input  id="z_yes_no_Id_Qus01" value="<?php  echo $this->set_field_value('z_yes_no_Id_Qus01',''); ?>" type="number" placeholder="Enter Z Yes No Id Qus01" step="1"  required="" name="z_yes_no_Id_Qus01" class="form-control " />
                                                            
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="z_language_test_Id">Z Language Test Id <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input  id="z_language_test_Id" value="<?php  echo $this->set_field_value('z_language_test_Id',''); ?>" type="number" placeholder="Enter Z Language Test Id" step="1"  required="" name="z_language_test_Id" class="form-control " />
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="exam_results_date">Exam Results Date <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="input-group">
                                                                <input  id="exam_results_date" class="form-control datepicker" required="" value="<?php  echo $this->set_field_value('exam_results_date',''); ?>" type="datetime" name="exam_results_date" placeholder="Enter Exam Results Date" data-enable-time="false"   data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                    
                                                                    
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="z_language_score_Id_speak">Z Language Score Id Speak <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input  id="z_language_score_Id_speak" value="<?php  echo $this->set_field_value('z_language_score_Id_speak',''); ?>" type="number" placeholder="Enter Z Language Score Id Speak" step="1"  required="" name="z_language_score_Id_speak" class="form-control " />
                                                                        
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="z_language_score_Id_Listening">Z Language Score Id Listening <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input  id="z_language_score_Id_Listening" value="<?php  echo $this->set_field_value('z_language_score_Id_Listening',''); ?>" type="number" placeholder="Enter Z Language Score Id Listening" step="1"  required="" name="z_language_score_Id_Listening" class="form-control " />
                                                                            
                                                                            
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                            
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="z_language_score_Id_Reading">Z Language Score Id Reading <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input  id="z_language_score_Id_Reading" value="<?php  echo $this->set_field_value('z_language_score_Id_Reading',''); ?>" type="number" placeholder="Enter Z Language Score Id Reading" step="1"  required="" name="z_language_score_Id_Reading" class="form-control " />
                                                                                
                                                                                
                                                                                
                                                                            </div>
                                                                            
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                                
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="z_language_score_Id_Writing">Z Language Score Id Writing <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <input  id="z_language_score_Id_Writing" value="<?php  echo $this->set_field_value('z_language_score_Id_Writing',''); ?>" type="number" placeholder="Enter Z Language Score Id Writing" step="1"  required="" name="z_language_score_Id_Writing" class="form-control " />
                                                                                    
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="z_yes_no_id_other_lang_result">Z Yes No Id Other Lang Result <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <input  id="z_yes_no_id_other_lang_result" value="<?php  echo $this->set_field_value('z_yes_no_id_other_lang_result',''); ?>" type="number" placeholder="Enter Z Yes No Id Other Lang Result" step="1"  required="" name="z_yes_no_id_other_lang_result" class="form-control " />
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="other_lang_result_date">Other Lang Result Date <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input  id="other_lang_result_date" class="form-control datepicker" required="" value="<?php  echo $this->set_field_value('other_lang_result_date',''); ?>" type="datetime" name="other_lang_result_date" placeholder="Enter Other Lang Result Date" data-enable-time="false"   data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                            
                                                                                            
                                                                                            <div class="input-group-append">
                                                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            
                                                                        </div>
                                                                        <div class="form-group form-submit-btn-holder text-center">
                                                                            <button class="btn btn-primary" type="submit">
                                                                                
                                                                                <i class="fa fa-send"></i>
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </section>
                                            