
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
                    <h3 class="record-title">View Education Background</h3>
                    
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
                                        <th class="title"> Level :</th>
                                        <td class="value"> <?php echo $data['z_edu_lvl_Dsc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Field Of Study :</th>
                                        <td class="value"> <?php echo $data['field_of_study']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Name of School/Institution    :</th>
                                        <td class="value"> <?php echo $data['name_of_School_Institution']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Duration (yrs) :</th>
                                        <td class="value"> <?php echo $data['z_duration_yrsDsc']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Country :</th>
                                        <td class="value"> <?php echo $data['z_countryname']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Me / Spouse :</th>
                                        <td class="value"> <?php echo $data['z_me_spouse_desc']; ?> </td>
                                    </tr>
                                    
                                    
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3">
                            
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("y_app_edu_dtl/edit/$data[id]"); ?>">
                                <i class="fa fa-edit"></i> 
                            </a>
                            
                            
                            <a class="btn btn-sm btn-danger recordDeletePromptAction"  href="<?php print_link("y_app_edu_dtl/delete/$data[id]"); ?>" >
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
