
<?php
$comp_model = new SharedController;
$data = $this->view_data;

//$rec_id = $data['__tableprimarykey'];
$page_id = Router :: $page_id;

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
                    <h3 class="record-title">Edit  Y App Gen</h3>
                    
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
                        <form role="form" enctype="multipart/form-data"  class="form form-horizontal needs-validation" novalidate action="<?php print_link("y_app_gen/edit_page_step/$page_id"); ?>" method="post">
                            <div class="card-body">
                                
                                
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="z_salutation_Id">Salutation <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <select required=""  name="z_salutation_Id" placeholder="Select a value ..."    class="form-control">
                                                    <option selected><?php echo $data['z_salutation_Id']; ?></option>
                                                    
                                                    <?php
                                                    $rec = $data['z_salutation_Id'];
                                                    $z_salutation_Id_options = $comp_model -> y_app_gen_z_salutation_Id_option_list();
                                                    if(!empty($z_salutation_Id_options)){
                                                    foreach($z_salutation_Id_options as $arr){
                                                    $val=array_values($arr);
                                                    $selected = ( $val[0] == $rec ? 'checked' : null ) ;
                                                    ?>
                                                    <option <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?></option>
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
                                                <input  id="y_app_gen_GivenName" value="<?php  echo $data['y_app_gen_GivenName']; ?>" type="text" placeholder="Enter Given Name"  required="" name="y_app_gen_GivenName" class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="y_app_gen_FamilyName">Family Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input  id="y_app_gen_FamilyName" value="<?php  echo $data['y_app_gen_FamilyName']; ?>" type="text" placeholder="Enter Family Name"  required="" name="y_app_gen_FamilyName" class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="y_app_gen_DOB">DOB <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <input  id="y_app_gen_DOB" class="form-control datepicker" required="" value="<?php  echo $data['y_app_gen_DOB']; ?>" type="datetime" name="y_app_gen_DOB" placeholder="Enter DOB" data-enable-time="false"   data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                            
                                                            
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
                                                        <label class="control-label" for="z_MaritalStatus_Id">Marital Status <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <select required=""  name="z_MaritalStatus_Id" placeholder="Select a value ..."    class="form-control">
                                                                <option selected><?php echo $data['z_MaritalStatus_Id']; ?></option>
                                                                
                                                                <?php
                                                                $rec = $data['z_MaritalStatus_Id'];
                                                                $z_MaritalStatus_Id_options = $comp_model -> y_app_gen_z_MaritalStatus_Id_option_list();
                                                                if(!empty($z_MaritalStatus_Id_options)){
                                                                foreach($z_MaritalStatus_Id_options as $arr){
                                                                $val=array_values($arr);
                                                                $selected = ( $val[0] == $rec ? 'checked' : null ) ;
                                                                ?>
                                                                <option <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?></option>
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
                                                                <option selected><?php echo $data['z_yes_no_Id_Qus01']; ?></option>
                                                                
                                                                <?php
                                                                $rec = $data['z_yes_no_Id_Qus01'];
                                                                $z_yes_no_Id_Qus01_options = $comp_model -> y_app_gen_z_yes_no_Id_Qus01_option_list();
                                                                if(!empty($z_yes_no_Id_Qus01_options)){
                                                                foreach($z_yes_no_Id_Qus01_options as $arr){
                                                                $val=array_values($arr);
                                                                $selected = ( $val[0] == $rec ? 'checked' : null ) ;
                                                                ?>
                                                                <option <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?></option>
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
                                                                <option selected><?php echo $data['z_yes_no_Id_Qus02']; ?></option>
                                                                
                                                                <?php
                                                                $rec = $data['z_yes_no_Id_Qus02'];
                                                                $z_yes_no_Id_Qus02_options = $comp_model -> y_app_gen_z_yes_no_Id_Qus02_option_list();
                                                                if(!empty($z_yes_no_Id_Qus02_options)){
                                                                foreach($z_yes_no_Id_Qus02_options as $arr){
                                                                $val=array_values($arr);
                                                                $selected = ( $val[0] == $rec ? 'checked' : null ) ;
                                                                ?>
                                                                <option <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?></option>
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
                                                            <input  id="z_country_Id_CountryofCitizenship" value="<?php  echo $data['z_country_Id_CountryofCitizenship']; ?>" type="number" placeholder="Enter Country of Citizenship" step="1"  required="" name="z_country_Id_CountryofCitizenship" class="form-control " />
                                                                
                                                                
                                                                
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
                                                                <input  id="z_country_Id_CountryofResidence" value="<?php  echo $data['z_country_Id_CountryofResidence']; ?>" type="number" placeholder="Enter Country of Residence" step="1"  required="" name="z_country_Id_CountryofResidence" class="form-control " />
                                                                    
                                                                    
                                                                    
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
                                                                    <textarea placeholder="Enter Address" required="" rows="" name="y_app_gen_Address" class=" form-control"><?php  echo $data['y_app_gen_Address']; ?></textarea>
                                                                    
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="y_app_gen_PhoneNo">Phone No. <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input  id="y_app_gen_PhoneNo" value="<?php  echo $data['y_app_gen_PhoneNo']; ?>" type="text" placeholder="Enter Phone No."  required="" name="y_app_gen_PhoneNo" class="form-control " />
                                                                        
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="z_hear_Id_Qus3">How did you hear about us? <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <select required=""  name="z_hear_Id_Qus3" placeholder="Select a value ..."    class="form-control">
                                                                            <option selected><?php echo $data['z_hear_Id_Qus3']; ?></option>
                                                                            
                                                                            <?php
                                                                            $rec = $data['z_hear_Id_Qus3'];
                                                                            $z_hear_Id_Qus3_options = $comp_model -> y_app_gen_z_hear_Id_Qus3_option_list();
                                                                            if(!empty($z_hear_Id_Qus3_options)){
                                                                            foreach($z_hear_Id_Qus3_options as $arr){
                                                                            $val=array_values($arr);
                                                                            $selected = ( $val[0] == $rec ? 'checked' : null ) ;
                                                                            ?>
                                                                            <option <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?></option>
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
                                                                    <label class="control-label" for="z_do_in_canda_Id_Qus4">What would you like to do in Canada? <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <select required=""  name="z_do_in_canda_Id_Qus4" placeholder="Select a value ..."    class="form-control">
                                                                            <option selected><?php echo $data['z_do_in_canda_Id_Qus4']; ?></option>
                                                                            
                                                                            <?php
                                                                            $rec = $data['z_do_in_canda_Id_Qus4'];
                                                                            $z_do_in_canda_Id_Qus4_options = $comp_model -> y_app_gen_z_do_in_canda_Id_Qus4_option_list();
                                                                            if(!empty($z_do_in_canda_Id_Qus4_options)){
                                                                            foreach($z_do_in_canda_Id_Qus4_options as $arr){
                                                                            $val=array_values($arr);
                                                                            $selected = ( $val[0] == $rec ? 'checked' : null ) ;
                                                                            ?>
                                                                            <option <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?></option>
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
                                                                    <label class="control-label" for="z_yes_no_Id_Qus05">Do you have a Visitors or Student Visa for Canada? <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <select required=""  name="z_yes_no_Id_Qus05" placeholder="Select a value ..."    class="form-control">
                                                                            <option selected><?php echo $data['z_yes_no_Id_Qus05']; ?></option>
                                                                            
                                                                            <?php
                                                                            $rec = $data['z_yes_no_Id_Qus05'];
                                                                            $z_yes_no_Id_Qus05_options = $comp_model -> y_app_gen_z_yes_no_Id_Qus05_option_list();
                                                                            if(!empty($z_yes_no_Id_Qus05_options)){
                                                                            foreach($z_yes_no_Id_Qus05_options as $arr){
                                                                            $val=array_values($arr);
                                                                            $selected = ( $val[0] == $rec ? 'checked' : null ) ;
                                                                            ?>
                                                                            <option <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?></option>
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
                                                                    <label class="control-label" for="y_app_gen_further_information">Any further information? <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <textarea placeholder="Enter Any further information?" required="" rows="" name="y_app_gen_further_information" class=" form-control"><?php  echo $data['y_app_gen_further_information']; ?></textarea>
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div class="form-group text-center">
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
                        