
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
                    <h3 class="record-title">Add New Users</h3>
                    
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
                        <form id="users-add-form" role="form" enctype="multipart/form-data" class="form form-horizontal needs-validation"  novalidate action="<?php print_link("users/add") ?>" method="post">
                            <div class="card-body">
                                
                                
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input  id="email" value="<?php  echo $this->set_field_value('email',''); ?>" type="email" placeholder="Enter Email"  required="" name="email" class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="password">Password <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input  id="password" value="<?php  echo $this->set_field_value('password',''); ?>" type="password" placeholder="Enter Password"  required="" name="password" class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        
                                                        <input class="form-control " type="password" name="confirm_password" placeholder="Confirm Password" />
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="permissions">Permissions <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <textarea placeholder="Enter Permissions" required="" rows="" name="permissions" class=" form-control"><?php  echo $this->set_field_value('permissions',''); ?></textarea>
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="last_login">Last Login <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input  id="last_login" value="<?php  echo $this->set_field_value('last_login',''); ?>" type="text" placeholder="Enter Last Login"  required="" name="last_login" class="form-control " />
                                                            
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="first_name">First Name <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input  id="first_name" value="<?php  echo $this->set_field_value('first_name',''); ?>" type="password" placeholder="Enter First Name"  required="" name="first_name" class="form-control " />
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                
                                                                <input class="form-control " type="password" name="confirm_password" placeholder="Confirm Password" />
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="last_name">Last Name <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input  id="last_name" value="<?php  echo $this->set_field_value('last_name',''); ?>" type="text" placeholder="Enter Last Name"  required="" name="last_name" class="form-control " />
                                                                    
                                                                    
                                                                    
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
                                                                        <label class="control-label" for="deleted_at">Deleted At <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input  id="deleted_at" value="<?php  echo $this->set_field_value('deleted_at',''); ?>" type="text" placeholder="Enter Deleted At"  required="" name="deleted_at" class="form-control " />
                                                                                
                                                                                
                                                                                
                                                                            </div>
                                                                            
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                                
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="bio">Bio <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <textarea placeholder="Enter Bio" required="" rows="" name="bio" class=" form-control"><?php  echo $this->set_field_value('bio',''); ?></textarea>
                                                                                
                                                                                
                                                                            </div>
                                                                            
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                                
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="gender">Gender <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                
                                                                                <label class="">
                                                                                    <input <?php echo $this->set_field_checked('gender','Male'); ?> value="Male" type="radio" required=""  name="gender" />
                                                                                        Male
                                                                                    </label>
                                                                                    <label class="">
                                                                                        <input <?php echo $this->set_field_checked('gender','Female'); ?> value="Female" type="radio" required=""  name="gender" />
                                                                                            Female
                                                                                        </label> 
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="dob">Dob <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input  id="dob" class="form-control datepicker" required="" value="<?php  echo $this->set_field_value('dob',''); ?>" type="datetime" name="dob" placeholder="Enter Dob" data-enable-time="false"   data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                            
                                                                                            
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
                                                                                        <label class="control-label" for="pic">Pic <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            
                                                                                            <div class="dropzone" id="pic_upload" input="#pic_input" data-multiple="false" control-class="upload-control" drop="true" dropmsg="Drop files here to upload" uploadpath="uploads/files/" filenameformat="random" btntext="Browse" extensions="jpg,png,gif,jpeg" filesize="3" maximum="1">
                                                                                            </div>
                                                                                            <input name="pic" id="pic_input" required="" class="d-none" value="<?php  echo $this->set_field_value('pic',''); ?>" type="text"  />
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="country">Country <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <input  id="country" value="<?php  echo $this->set_field_value('country',''); ?>" type="text" placeholder="Enter Country"  required="" name="country" class="form-control " />
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    
                                                                                    
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="user_state">User State <span class="text-danger">*</span></label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="">
                                                                                                    <input  id="user_state" value="<?php  echo $this->set_field_value('user_state',''); ?>" type="text" placeholder="Enter User State"  required="" name="user_state" class="form-control " />
                                                                                                        
                                                                                                        
                                                                                                        
                                                                                                    </div>
                                                                                                    
                                                                                                    
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        
                                                                                        <div class="form-group ">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4">
                                                                                                    <label class="control-label" for="city">City <span class="text-danger">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="">
                                                                                                        <input  id="city" value="<?php  echo $this->set_field_value('city',''); ?>" type="text" placeholder="Enter City"  required="" name="city" class="form-control " />
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                        </div>
                                                                                                        
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="address">Address <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <input  id="address" value="<?php  echo $this->set_field_value('address',''); ?>" type="text" placeholder="Enter Address"  required="" name="address" class="form-control " />
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            </div>
                                                                                                            
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                                
                                                                                                
                                                                                                <div class="form-group ">
                                                                                                    <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <label class="control-label" for="postal">Postal <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <input  id="postal" value="<?php  echo $this->set_field_value('postal',''); ?>" type="text" placeholder="Enter Postal"  required="" name="postal" class="form-control " />
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                                                                                                </div>
                                                                                                                
                                                                                                                
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    <div class="form-group ">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-4">
                                                                                                                <label class="control-label" for="provider">Provider <span class="text-danger">*</span></label>
                                                                                                            </div>
                                                                                                            <div class="col-sm-8">
                                                                                                                <div class="">
                                                                                                                    <input  id="provider" value="<?php  echo $this->set_field_value('provider',''); ?>" type="text" placeholder="Enter Provider"  required="" name="provider" class="form-control " />
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                    </div>
                                                                                                                    
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        
                                                                                                        
                                                                                                        
                                                                                                        
                                                                                                        <div class="form-group ">
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4">
                                                                                                                    <label class="control-label" for="provider_id">Provider Id <span class="text-danger">*</span></label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                        <input  id="provider_id" value="<?php  echo $this->set_field_value('provider_id',''); ?>" type="text" placeholder="Enter Provider Id"  required="" name="provider_id" class="form-control " />
                                                                                                                            
                                                                                                                            
                                                                                                                            
                                                                                                                        </div>
                                                                                                                        
                                                                                                                        
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            <div class="form-group ">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-4">
                                                                                                                        <label class="control-label" for="full_name">Full Name <span class="text-danger">*</span></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-8">
                                                                                                                        <div class="">
                                                                                                                            <input  id="full_name" value="<?php  echo $this->set_field_value('full_name',''); ?>" type="text" placeholder="Enter Full Name"  required="" name="full_name" class="form-control " />
                                                                                                                                
                                                                                                                                
                                                                                                                                
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
                                                                                