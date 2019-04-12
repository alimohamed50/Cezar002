
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
                    <h3 class="record-title">View Documents</h3>
                    
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
                                        <th class="title"> Document Type :</th>
                                        <td class="value"> <?php echo $data['document_type_desc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Document Status :</th>
                                        <td class="value"> <?php echo $data['document_status_desc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Document Name :</th>
                                        <td class="value"> <?php echo $data['doc_name']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Client Notes :</th>
                                        <td class="value"> <?php echo $data['user_notes']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Staff Notes :</th>
                                        <td class="value"> <?php echo $data['staff_notes']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> User Send Date :</th>
                                        <td class="value"> <?php echo $data['user_send_date']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Staff Review Date :</th>
                                        <td class="value"> <?php echo $data['staff_review_date']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Doc Image :</th>
                                        <td class="value"><?php Html::page_img($data['doc_image'],400,400); ?></td>
                                    </tr>
                                    
                                    
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3">
                            
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("x_documents/edit/$data[id]"); ?>">
                                <i class="fa fa-edit"></i> 
                            </a>
                            
                            
                            <a class="btn btn-sm btn-danger recordDeletePromptAction"  href="<?php print_link("x_documents/delete/$data[id]"); ?>" >
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
