
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
                
                <div class="col-md-12 comp-grid">
                    
                    <div class="text-left">
                        <h4></h4>
                        <p class="text-muted"></p>
                    </div>
                    <div class="smartwizard" data-theme="dots" data-form-action="">
                        <ul>
                            
                            <li>
                                <a href="#FormWizard-1-Page1">
                                    <i class="fa fa-info-circle "></i> Introduction
                                    <br /><small>This is description</small>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#FormWizard-1-Page2">
                                    <i class="fa fa-male "></i> Profile
                                    <br /><small>This is description</small>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#FormWizard-1-Page3">
                                    <i class="fa fa-graduation-cap "></i> Eduction
                                    <br /><small>This is description</small>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#FormWizard-1-Page4">
                                    <i class="fa fa-suitcase "></i> Work
                                    <br /><small>This is description</small>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#FormWizard-1-Page5">
                                    <i class="fa fa-users "></i> Family & Business
                                    <br /><small>This is description</small>
                                </a>
                            </li>
                            
                        </ul>
                        <div>
                            
                            <div class="card formtab" id="FormWizard-1-Page1" data-next-page="FormWizard-1-Page2" data-submit-action="MOVE-NEXT">
                                <div class="">
                                    <div class="text-center">
                                        <div class="p-3">
                                            <p><i class="material-icons mi-xlg animated bounceIn text-info">account_box</i></p>
                                            <h3>Welcome To Application Wizard</h3>
                                            <hr />
                                            <p class="text-muted">Please follow the steps to complete application  </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-center p-3">
                                    
                                    <button class="btn btn-success sw-btn-next">Getting Started</button>
                                </div>
                                
                            </div>
                            
                            <div class="card formtab" id="FormWizard-1-Page2" data-next-page="FormWizard-1-Page3" data-submit-action="SUBMIT-ALL-FORMS">
                                
                                <?php $this :: display_page_errors(); ?>
                                
                                <div  class="card animated fadeIn">
                                    <form id="y_app_gen-application_wizad_1-form" role="form" enctype="multipart/form-data" class="form form-horizontal needs-validation"  novalidate action="<?php print_link("y_app_gen/add") ?>" method="post">
                                        <div class="card-body">
                                            
                                            
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="z_salutation_Id">Salutation <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <select required=""  name="z_salutation_Id" placeholder="Select a value ..."    class="form-control">
                                                                <option value="">Select a value ...</option>
                                                                
                                                                <?php 
                                                                $z_salutation_Id_options = $comp_model -> y_app_gen_z_salutation_Id_option_list();
                                                                
                                                                if(!empty($z_salutation_Id_options)){
                                                                foreach($z_salutation_Id_options as $arr){
                                                                $val=array_values($arr);
                                                                ?>
                                                                <option <?php echo $this->set_field_selected('z_salutation_Id',$val[0]) ?> value="<?php echo $val[0]; ?>">
                                                                    <?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                                </option>
                                                                <?php
                                                                }
                                                                }
                                                                ?>
                                                                
                                                            </select> 
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="y_app_gen_GivenName">Given Name <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input  id="y_app_gen_GivenName" value="<?php  echo $this->set_field_value('y_app_gen_GivenName',''); ?>" type="text" placeholder="Enter Given Name"  required="" name="y_app_gen_GivenName" class="form-control " />
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="y_app_gen_FamilyName">Family name <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input  id="y_app_gen_FamilyName" value="<?php  echo $this->set_field_value('y_app_gen_FamilyName',''); ?>" type="text" placeholder="Enter Family name"  required="" name="y_app_gen_FamilyName" class="form-control " />
                                                                    
                                                                    
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="y_app_gen_DOB">DOB (yyyy-MM-dd) <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="input-group">
                                                                    <input  id="y_app_gen_DOB" class="form-control datepicker" required="" value="<?php  echo $this->set_field_value('y_app_gen_DOB',''); ?>" type="datetime" name="y_app_gen_DOB" placeholder="Enter DOB (yyyy-MM-dd)" data-enable-time="false"   data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                        
                                                                        
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
                                                                    <label class="control-label" for="z_MaritalStatus_Id">Marital status <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <select required=""  name="z_MaritalStatus_Id" placeholder="Select a value ..."    class="form-control">
                                                                            <option value="">Select a value ...</option>
                                                                            
                                                                            <?php 
                                                                            $z_MaritalStatus_Id_options = $comp_model -> y_app_gen_z_MaritalStatus_Id_option_list();
                                                                            
                                                                            if(!empty($z_MaritalStatus_Id_options)){
                                                                            foreach($z_MaritalStatus_Id_options as $arr){
                                                                            $val=array_values($arr);
                                                                            ?>
                                                                            <option <?php echo $this->set_field_selected('z_MaritalStatus_Id',$val[0]) ?> value="<?php echo $val[0]; ?>">
                                                                                <?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                                            </option>
                                                                            <?php
                                                                            }
                                                                            }
                                                                            ?>
                                                                            
                                                                        </select> 
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="z_yes_no_Id_Qus01">Is your spouse or common-law partner a citizen or permanent resident of Canada? <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <select required=""  name="z_yes_no_Id_Qus01" placeholder="Select a value ..."    class="form-control">
                                                                            <option value="">Select a value ...</option>
                                                                            
                                                                            <?php 
                                                                            $z_yes_no_Id_Qus01_options = $comp_model -> y_app_gen_z_yes_no_Id_Qus01_option_list_2();
                                                                            
                                                                            if(!empty($z_yes_no_Id_Qus01_options)){
                                                                            foreach($z_yes_no_Id_Qus01_options as $arr){
                                                                            $val=array_values($arr);
                                                                            ?>
                                                                            <option <?php echo $this->set_field_selected('z_yes_no_Id_Qus01',$val[0]) ?> value="<?php echo $val[0]; ?>">
                                                                                <?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                                            </option>
                                                                            <?php
                                                                            }
                                                                            }
                                                                            ?>
                                                                            
                                                                        </select> 
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="z_yes_no_Id_Qus02">Will your spouse or common-law partner come with you to Canada?   <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <select required=""  name="z_yes_no_Id_Qus02" placeholder="Select a value ..."    class="form-control">
                                                                            <option value="">Select a value ...</option>
                                                                            
                                                                            <?php 
                                                                            $z_yes_no_Id_Qus02_options = $comp_model -> y_app_gen_z_yes_no_Id_Qus02_option_list();
                                                                            
                                                                            if(!empty($z_yes_no_Id_Qus02_options)){
                                                                            foreach($z_yes_no_Id_Qus02_options as $arr){
                                                                            $val=array_values($arr);
                                                                            ?>
                                                                            <option <?php echo $this->set_field_selected('z_yes_no_Id_Qus02',$val[0]) ?> value="<?php echo $val[0]; ?>">
                                                                                <?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                                            </option>
                                                                            <?php
                                                                            }
                                                                            }
                                                                            ?>
                                                                            
                                                                        </select> 
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="z_country_Id_CountryofCitizenship">Country of Citizenship <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <select required=""  name="z_country_Id_CountryofCitizenship" placeholder="Select a value ..."    class="form-control">
                                                                            <option value="">Select a value ...</option>
                                                                            
                                                                            <?php 
                                                                            $z_country_Id_CountryofCitizenship_options = $comp_model -> y_app_gen_z_country_Id_CountryofCitizenship_option_list();
                                                                            
                                                                            if(!empty($z_country_Id_CountryofCitizenship_options)){
                                                                            foreach($z_country_Id_CountryofCitizenship_options as $arr){
                                                                            $val=array_values($arr);
                                                                            ?>
                                                                            <option <?php echo $this->set_field_selected('z_country_Id_CountryofCitizenship',$val[0]) ?> value="<?php echo $val[0]; ?>">
                                                                                <?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                                            </option>
                                                                            <?php
                                                                            }
                                                                            }
                                                                            ?>
                                                                            
                                                                        </select> 
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="z_country_Id_CountryofResidence">Country of Residence <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <select required=""  name="z_country_Id_CountryofResidence" placeholder="Select a value ..."    class="form-control">
                                                                            <option value="">Select a value ...</option>
                                                                            
                                                                            <?php 
                                                                            $z_country_Id_CountryofResidence_options = $comp_model -> y_app_gen_z_country_Id_CountryofResidence_option_list();
                                                                            
                                                                            if(!empty($z_country_Id_CountryofResidence_options)){
                                                                            foreach($z_country_Id_CountryofResidence_options as $arr){
                                                                            $val=array_values($arr);
                                                                            ?>
                                                                            <option <?php echo $this->set_field_selected('z_country_Id_CountryofResidence',$val[0]) ?> value="<?php echo $val[0]; ?>">
                                                                                <?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                                            </option>
                                                                            <?php
                                                                            }
                                                                            }
                                                                            ?>
                                                                            
                                                                        </select> 
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="y_app_gen_Address">Address <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <textarea placeholder="Enter Address" required="" rows="" name="y_app_gen_Address" class=" form-control"><?php  echo $this->set_field_value('y_app_gen_Address',''); ?></textarea>
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="y_app_gen_PhoneNo">Y App Gen Phoneno <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input  id="y_app_gen_PhoneNo" value="<?php  echo $this->set_field_value('y_app_gen_PhoneNo',''); ?>" type="text" placeholder="Enter Y App Gen Phoneno"  required="" name="y_app_gen_PhoneNo" class="form-control " />
                                                                            
                                                                            
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                            
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="z_hear_Id_Qus3">Z Hear Id Qus3 <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input  id="z_hear_Id_Qus3" value="<?php  echo $this->set_field_value('z_hear_Id_Qus3',''); ?>" type="number" placeholder="Enter Z Hear Id Qus3" step="1"  required="" name="z_hear_Id_Qus3" class="form-control " />
                                                                                
                                                                                
                                                                                
                                                                            </div>
                                                                            
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                                
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="z_do_in_canda_Id_Qus4">Z Do In Canda Id Qus4 <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <input  id="z_do_in_canda_Id_Qus4" value="<?php  echo $this->set_field_value('z_do_in_canda_Id_Qus4',''); ?>" type="number" placeholder="Enter Z Do In Canda Id Qus4" step="1"  required="" name="z_do_in_canda_Id_Qus4" class="form-control " />
                                                                                    
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="z_yes_no_Id_Qus05">Z Yes No Id Qus05 <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <input  id="z_yes_no_Id_Qus05" value="<?php  echo $this->set_field_value('z_yes_no_Id_Qus05',''); ?>" type="number" placeholder="Enter Z Yes No Id Qus05" step="1"  required="" name="z_yes_no_Id_Qus05" class="form-control " />
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="y_app_gen_further_information">Y App Gen Further Information <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <input  id="y_app_gen_further_information" value="<?php  echo $this->set_field_value('y_app_gen_further_information',''); ?>" type="text" placeholder="Enter Y App Gen Further Information"  required="" name="y_app_gen_further_information" class="form-control " />
                                                                                            
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="created_at">Created At <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <input  id="created_at" value="<?php  echo $this->set_field_value('created_at',''); ?>" type="text" placeholder="Enter Created At"  required="" name="created_at" class="form-control " />
                                                                                                
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="updated_at">Updated At <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="input-group">
                                                                                                
                                                                                                <input id="updated_at" class="form-control datepicker" required="" value="<?php  echo $this->set_field_value('updated_at',''); ?>" type="datetime" name="updated_at" placeholder="Enter Updated At" data-enable-time="true"   data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                                    
                                                                                                    
                                                                                                    
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
                                                                                                    <label class="control-label" for="z_app_sts_id">Z App Sts Id <span class="text-danger">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="">
                                                                                                        <input  id="z_app_sts_id" value="<?php  echo $this->set_field_value('z_app_sts_id',''); ?>" type="number" placeholder="Enter Z App Sts Id" step="1"  required="" name="z_app_sts_id" class="form-control " />
                                                                                                            
                                                                                                            
                                                                                                            
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
                                                                                
                                                                                
                                                                                <div class="text-center p-3">
                                                                                    
                                                                                    <button class="btn btn-success sw-btn-next">Profile</button>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                            <div class="card formtab" id="FormWizard-1-Page3" data-next-page="FormWizard-1-Page4" data-submit-action="SUBMIT-STEP-FORM">
                                                                                
                                                                                
                                                                                <div class=" p-3">
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                            <div class="card formtab" id="FormWizard-1-Page4" data-next-page="FormWizard-1-Page5" data-submit-action="SUBMIT-STEP-FORM">
                                                                                
                                                                                
                                                                                <div class=" p-3">
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                            <div class="card formtab" id="FormWizard-1-Page5" data-next-page="FormWizard-1-Page6" data-submit-action="">
                                                                                <div class="">
                                                                                    <div class="text-center">
                                                                                        <p><i class="material-icons mi-xlg animated bounceIn text-success">check_circle</i></p>
                                                                                        <h3>Form Wizard Completed</h3>
                                                                                        <hr />
                                                                                        <p class="text-muted">Thank you for your support</p>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div class=" p-3">
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </section>
                                                