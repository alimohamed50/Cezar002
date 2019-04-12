
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
                    <h3 class="record-title">View  Users</h3>
                    
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
                                        <th class="title"> Id :</th>
                                        <td class="value"> <?php echo $data['id']; ?> </td>
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
                                        <th class="title"> Permissions :</th>
                                        <td class="value"> <?php echo $data['permissions']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Last Login :</th>
                                        <td class="value"> <?php echo $data['last_login']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Last Name :</th>
                                        <td class="value"> <?php echo $data['last_name']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Created At :</th>
                                        <td class="value"> <?php echo $data['created_at']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Updated At :</th>
                                        <td class="value"> <?php echo $data['updated_at']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Deleted At :</th>
                                        <td class="value"> <?php echo $data['deleted_at']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Bio :</th>
                                        <td class="value"> <?php echo $data['bio']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Gender :</th>
                                        <td class="value"> <?php echo $data['gender']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Dob :</th>
                                        <td class="value"> <?php echo $data['dob']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Pic :</th>
                                        <td class="value"><?php Html::page_img($data['pic'],400,400); ?></td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Country :</th>
                                        <td class="value"> <?php echo $data['country']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> User State :</th>
                                        <td class="value"> <?php echo $data['user_state']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> City :</th>
                                        <td class="value"> <?php echo $data['city']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Address :</th>
                                        <td class="value"> <?php echo $data['address']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Postal :</th>
                                        <td class="value"> <?php echo $data['postal']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Provider :</th>
                                        <td class="value"> <?php echo $data['provider']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Provider Id :</th>
                                        <td class="value"> <?php echo $data['provider_id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Full Name :</th>
                                        <td class="value"> <?php echo $data['full_name']; ?> </td>
                                    </tr>
                                    
                                    
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3">
                            
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("users/edit/$data[id]"); ?>">
                                <i class="fa fa-edit"></i> 
                            </a>
                            
                            
                            <a class="btn btn-sm btn-danger recordDeletePromptAction"  href="<?php print_link("users/delete/$data[id]"); ?>" >
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
