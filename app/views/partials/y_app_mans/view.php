
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
                    <h3 class="record-title">View  Y App Mans</h3>
                    
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
                                        <th class="title"> Y App Mans Submitted Date :</th>
                                        <td class="value"> <?php echo $data['y_app_mans_submitted_date']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Immigration Program Id :</th>
                                        <td class="value"> <?php echo $data['z_immigration_program_id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z App Sts Id :</th>
                                        <td class="value"> <?php echo $data['z_app_sts_id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Y App Mans Notes :</th>
                                        <td class="value"> <?php echo $data['y_app_mans_notes']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Id :</th>
                                        <td class="value"> <?php echo $data['id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> User User Id Client :</th>
                                        <td class="value"> <?php echo $data['user_user_id_client']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> User User Id Consult :</th>
                                        <td class="value"> <?php echo $data['user_user_id_consult']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Y App Mans Created Date :</th>
                                        <td class="value"> <?php echo $data['y_app_mans_created_date']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Y App Mans Notes Consultant :</th>
                                        <td class="value"> <?php echo $data['y_app_mans_notes_consultant']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Users2 Id :</th>
                                        <td class="value"> <?php echo $data['users2_id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> User Name :</th>
                                        <td class="value"> <?php echo $data['user_name']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Email :</th>
                                        <td class="value"> <?php echo $data['email']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Password :</th>
                                        <td class="value"> <?php echo $data['password']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Photo :</th>
                                        <td class="value"> <?php echo $data['photo']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> User Role :</th>
                                        <td class="value"> <?php echo $data['user_role']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Date Registered :</th>
                                        <td class="value"> <?php echo $data['date_registered']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z App Sts Id :</th>
                                        <td class="value"> <?php echo $data['z_app_sts_Id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z App Sts Dsc :</th>
                                        <td class="value"> <?php echo $data['z_app_sts_Dsc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Immigration Program Id :</th>
                                        <td class="value"> <?php echo $data['z_immigration_program_Id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Immigration Program Name :</th>
                                        <td class="value"> <?php echo $data['z_immigration_program_Name']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Immigration Program Sel :</th>
                                        <td class="value"> <?php echo $data['z_immigration_program_Sel']; ?> </td>
                                    </tr>
                                    
                                    
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3">
                            
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("y_app_mans/edit/$data[id]"); ?>">
                                <i class="fa fa-edit"></i> 
                            </a>
                            
                            
                            <a class="btn btn-sm btn-danger recordDeletePromptAction"  href="<?php print_link("y_app_mans/delete/$data[id]"); ?>" >
                                <i class="fa fa-times"></i> 
                            </a>
                            
                            
                            <button class="btn btn-sm btn-primary export-btn">
                                <i class="fa fa-save"></i> 
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
