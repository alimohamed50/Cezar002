
<?php
$comp_model = new SharedController;

//Page Data Information from Controller
$data = $this->view_data;

//$rec_id = $data['__tableprimarykey'];
$page_id = Router::$page_id; //Page id from url

$view_title = $this->view_title;

$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;

?>

<section class="page">
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-12 comp-grid">
                    <h3 class="record-title">View Profile Data</h3>
                    
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
                    
                    <?php $this :: display_page_errors(); ?>
                    
                    <div  class="card animated fadeIn">
                        <?php
                        if(!empty($data)){
                        ?>
                        <div class="page-records ">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody>
                                    
                                    <tr>
                                        <th class="title"> Salutation :</th>
                                        <td class="value"> <?php echo $data['z_salutation_desc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Given Name :</th>
                                        <td class="value"> <?php echo $data['y_app_gen_GivenName']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Family Name :</th>
                                        <td class="value"> <?php echo $data['y_app_gen_FamilyName']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Date of Birth :</th>
                                        <td class="value"> <?php echo $data['y_app_gen_DOB']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Maritalstatus Dsc :</th>
                                        <td class="value"> <?php echo $data['z_MaritalStatus_Dsc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Is your spouse or common-law partner a citizen or permanent resident of Canada? :</th>
                                        <td class="value"> <?php echo $data['z_yes_no_Desc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Will your spouse or common-law partner come with you to Canada?   :</th>
                                        <td class="value"> <?php echo $data['z_yes_no_Descr']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Country of Citizenship :</th>
                                        <td class="value"> <?php echo $data['z_countryname']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Country of Residence :</th>
                                        <td class="value"> <?php echo $data['z_countrynamer']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Address :</th>
                                        <td class="value"> <?php echo $data['y_app_gen_Address']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Phone Number :</th>
                                        <td class="value"> <?php echo $data['y_app_gen_PhoneNo']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> How did you hear about us? :</th>
                                        <td class="value"> <?php echo $data['z_hear_Dsc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> What would you like to do in Canada? :</th>
                                        <td class="value"> <?php echo $data['z_do_in_canda_Dsc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Do you have a Visitors or Student Visa for Canada? :</th>
                                        <td class="value"> <?php echo $data['z_yes_no_Descx']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"><i class="fa fa-align-left "></i> Further Information :</th>
                                        <td class="value"> <?php echo $data['y_app_gen_further_information']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Created At :</th>
                                        <td class="value"> <?php echo $data['created_at']; ?> </td>
                                    </tr>
                                    
                                    
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3">
                            
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("y_app_gen/edit/$data[y_app_gen_Id]"); ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            
                            
                            <a class="btn btn-sm btn-danger recordDeletePromptAction"  href="<?php print_link("y_app_gen/delete/$data[y_app_gen_Id]"); ?>" >
                                <i class="fa fa-times"></i> Delete
                            </a>
                            
                            
                            <button class="btn btn-sm btn-primary export-btn">
                                <i class="fa fa-save"></i> Export
                            </button>
                            
                            
                        </div>
                        <?php
                        }
                        else{
                        ?>
                        <!-- Empty Record Message -->
                        <div class="text-muted panel-body">
                            <h3><i class="fa fa-ban"></i> No Record Found</h3>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</section>
