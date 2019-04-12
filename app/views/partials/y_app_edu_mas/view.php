
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
                    <h3 class="record-title">View  Y App Edu Mas</h3>
                    
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
                                        <th class="title"> Users User Id :</th>
                                        <td class="value"> <?php echo $data['users_user_id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Language Spoken Id :</th>
                                        <td class="value"> <?php echo $data['z_Language_Spoken_Id']; ?> </td>
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
                                        <th class="title"> Z Yes No Id Qus01 :</th>
                                        <td class="value"> <?php echo $data['z_yes_no_Id_Qus01']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Language Test Id :</th>
                                        <td class="value"> <?php echo $data['z_language_test_Id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Exam Results Date :</th>
                                        <td class="value"> <?php echo $data['exam_results_date']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Language Score Id Speak :</th>
                                        <td class="value"> <?php echo $data['z_language_score_Id_speak']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Language Score Id Listening :</th>
                                        <td class="value"> <?php echo $data['z_language_score_Id_Listening']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Language Score Id Reading :</th>
                                        <td class="value"> <?php echo $data['z_language_score_Id_Reading']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Language Score Id Writing :</th>
                                        <td class="value"> <?php echo $data['z_language_score_Id_Writing']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Z Yes No Id Other Lang Result :</th>
                                        <td class="value"> <?php echo $data['z_yes_no_id_other_lang_result']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Other Lang Result Date :</th>
                                        <td class="value"> <?php echo $data['other_lang_result_date']; ?> </td>
                                    </tr>
                                    
                                    
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3">
                            
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("y_app_edu_mas/edit/$data[id]"); ?>">
                                <i class="fa fa-edit"></i> 
                            </a>
                            
                            
                            <a class="btn btn-sm btn-danger recordDeletePromptAction"  href="<?php print_link("y_app_edu_mas/delete/$data[id]"); ?>" >
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
