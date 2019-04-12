
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
                    <h3 class="record-title">View  Datatables</h3>
                    
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
                                        <th class="title"> Firstname :</th>
                                        <td class="value"> <?php echo $data['firstname']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Lastname :</th>
                                        <td class="value"> <?php echo $data['lastname']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Email :</th>
                                        <td class="value"> <?php echo $data['email']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Points :</th>
                                        <td class="value"> <?php echo $data['points']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Notes :</th>
                                        <td class="value"> <?php echo $data['notes']; ?> </td>
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
                                        <th class="title"> Age :</th>
                                        <td class="value"> <?php echo $data['age']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Job :</th>
                                        <td class="value"> <?php echo $data['job']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Gender :</th>
                                        <td class="value"> <?php echo $data['gender']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Country :</th>
                                        <td class="value"> <?php echo $data['country']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Sale Date :</th>
                                        <td class="value"> <?php echo $data['sale_date']; ?> </td>
                                    </tr>
                                    
                                    
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3">
                            
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("datatables/edit/$data[id]"); ?>">
                                <i class="fa fa-edit"></i> 
                            </a>
                            
                            
                            <a class="btn btn-sm btn-danger recordDeletePromptAction"  href="<?php print_link("datatables/delete/$data[id]"); ?>" >
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
