
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
                    <h3 class="record-title">Edit Education Background</h3>
                    
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
                        <form role="form" enctype="multipart/form-data"  class="form form-horizontal needs-validation" novalidate action="<?php print_link("y_app_edu_dtl/edit/$page_id"); ?>" method="post">
                            <div class="card-body">
                                
                                
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="z_edu_lvl_Id">Level <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <select required=""  name="z_edu_lvl_Id" placeholder="Select a value ..."    class="form-control">
                                                    <option selected><?php echo $data['z_edu_lvl_Id']; ?></option>
                                                    
                                                    <?php
                                                    $rec = $data['z_edu_lvl_Id'];
                                                    $z_edu_lvl_Id_options = $comp_model -> y_app_edu_dtl_z_edu_lvl_Id_option_list();
                                                    if(!empty($z_edu_lvl_Id_options)){
                                                    foreach($z_edu_lvl_Id_options as $arr){
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
                                            <label class="control-label" for="field_of_study">Field Of Study <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input  id="field_of_study" value="<?php  echo $data['field_of_study']; ?>" type="text" placeholder="Enter Field Of Study"  required="" name="field_of_study" class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="name_of_School_Institution">Name Of School Institution <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input  id="name_of_School_Institution" value="<?php  echo $data['name_of_School_Institution']; ?>" type="text" placeholder="Enter Name Of School Institution"  required="" name="name_of_School_Institution" class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="z_duration_yrs_Id">Duration (yrs) <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <select required=""  name="z_duration_yrs_Id" placeholder="Select a value ..."    class="form-control">
                                                            <option selected><?php echo $data['z_duration_yrs_Id']; ?></option>
                                                            
                                                            <?php
                                                            $rec = $data['z_duration_yrs_Id'];
                                                            $z_duration_yrs_Id_options = $comp_model -> y_app_edu_dtl_z_duration_yrs_Id_option_list();
                                                            if(!empty($z_duration_yrs_Id_options)){
                                                            foreach($z_duration_yrs_Id_options as $arr){
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
                                                    <label class="control-label" for="z_country_Id">Country <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <select required=""  name="z_country_Id" placeholder="Select a value ..."    class="form-control">
                                                            <option selected><?php echo $data['z_country_Id']; ?></option>
                                                            
                                                            <?php
                                                            $rec = $data['z_country_Id'];
                                                            $z_country_Id_options = $comp_model -> y_app_edu_dtl_z_country_Id_option_list();
                                                            if(!empty($z_country_Id_options)){
                                                            foreach($z_country_Id_options as $arr){
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
                                                    <label class="control-label" for="z_me_spouse_id">Me / Spouse <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <select required=""  name="z_me_spouse_id" placeholder="Select a value ..."    class="form-control">
                                                            <option selected><?php echo $data['z_me_spouse_id']; ?></option>
                                                            
                                                            <?php
                                                            $rec = $data['z_me_spouse_id'];
                                                            $z_me_spouse_id_options = $comp_model -> y_app_edu_dtl_z_me_spouse_id_option_list();
                                                            if(!empty($z_me_spouse_id_options)){
                                                            foreach($z_me_spouse_id_options as $arr){
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
        