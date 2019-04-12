
<?php
$comp_model = new SharedController;

//Page Data From Controller
$view_data = $this->view_data;

$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = Router :: $field_name;
$field_value = Router :: $field_value;

$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;

?>

<section class="page">
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            
            <div class="row ">
                
                <div class="col-sm-4 comp-grid">
                    <h3 class="record-title">Profile</h3>
                    
                </div>
                
                <div class="col-sm-3 comp-grid">
                    
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("y_app_gen/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add Profile Data 
                    </a>
                    
                </div>
                
                <div class="col-md-12 comp-grid">
                    <div class="">
                        <?php
                        if(!empty($field_name) || !empty($field_name)){
                        ?>
                        <hr class="sm d-block d-sm-none" />
                        <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                            <ul class="breadcrumb m-0 p-1">
                                <?php
                                if(!empty($field_name)){
                                ?>
                                <li class="breadcrumb-item"><a class="text-capitalize" href="<?php print_link('y_app_gen') ?>"><?php echo $field_name ?></a></li>
                                <li  class="breadcrumb-item active text-capitalize"><?php echo urldecode($field_value) ?></li>
                                <?php 
                                }   
                                ?>
                                <?php
                                if(!empty($_GET['search'])){
                                ?>
                                <li class="breadcrumb-item">
                                    <a class="text-capitalize" href="<?php print_link('y_app_gen') ?>">Search</a>
                                </li>
                                <li  class="breadcrumb-item active text-capitalize"> <strong><?php echo get_value('search'); ?></strong></li>
                                <?php
                                }
                                ?>
                                
                            </ul>
                        </nav>  
                        <?php
                        }
                        ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>
    
    <div  class="">
        <div class="container-fluid">
            
            <div class="row ">
                
                <div class="col-md-12 comp-grid">
                    
                    <?php $this :: display_page_errors(); ?>
                    
                    <div  class="card animated fadeIn">
                        <div id="y_app_gen-list-records">
                            
                            <?php
                            if(!empty($records)){
                            ?>
                            <div class="page-records table-responsive">
                                <table class="table  table-striped table-sm">
                                    <thead class="table-header bg-light">
                                        <tr>
                                            <th class="td-sno td-checkbox"><input class="toggle-check-all" type="checkbox" /></th>
                                            
                                            <th class="td-sno">#</th>
                                            <th > Salutation</th>
                                            <th > Given Name</th>
                                            <th > Family Name</th>
                                            <th > Date of Birth</th>
                                            
                                            <th class="td-btn"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $counter++;
                                        ?>
                                        <tr>
                                            
                                            <th class=" td-checkbox">
                                                <label>
                                                    <input class="optioncheck" name="optioncheck[]" value="<?php echo $data['y_app_gen_Id'] ?>" type="checkbox" />
                                                    </label>
                                                </th>
                                                
                                                <th class="td-sno"><?php echo $counter; ?></th>
                                                <td> <?php echo $data['z_salutation_desc']; ?> </td>
                                                <td> <?php echo $data['y_app_gen_GivenName']; ?> </td>
                                                <td> <?php echo $data['y_app_gen_FamilyName']; ?> </td>
                                                <td> <?php echo $data['y_app_gen_DOB']; ?> </td>
                                                
                                                
                                                <td class="page-list-action">
                                                    
                                                    <div class="dropdown" >
                                                        <button data-toggle="dropdown" class="dropdown-toggle btn btn-primary btn-sm">
                                                            <i class="fa fa-bars"></i> 
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            
                                                            <a class="dropdown-item" href="<?php print_link("y_app_gen/view/$data[y_app_gen_Id]"); ?>">
                                                                <i class="fa fa-eye"></i> View 
                                                            </a>
                                                            
                                                            
                                                            <a class="dropdown-item" href="<?php print_link("y_app_gen/edit/$data[y_app_gen_Id]"); ?>">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </a>
                                                            
                                                            
                                                            <a  class="recordDeletePromptAction dropdown-item" href="<?php print_link("y_app_gen/delete/$data[y_app_gen_Id]"); ?>" >
                                                                <i class="fa fa-times"></i> Delete 
                                                            </a>
                                                            
                                                        </ul>
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                if( $show_footer == true ){
                                ?>
                                <div class="card-footer">
                                    <div class="row">   
                                        <div class="col-sm-3">  
                                            
                                            <button data-prompt-msg="Are you sure you want to delete these records" data-url="<?php print_link("y_app_gen/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                                <i class="material-icons">clear</i> Delete Selected
                                            </button>
                                            
                                            
                                            <button class="btn btn-sm btn-primary export-btn"><i class="fa fa-save"></i> </button>
                                            
                                            
                                            <?php Html :: import_form('y_app_gen/import_data' , "", 'CSV , JSON'); ?>
                                            
                                        </div>
                                        <div class="col">   
                                            
                                            <?php
                                            if( $show_pagination == true ){
                                            $pager = new Pagination($total_records,$record_count);
                                            $pager->page_name='y_app_gen';
                                            $pager->show_page_count=true;
                                            $pager->show_record_count=true;
                                            $pager->show_page_limit=true;
                                            $pager->show_page_number_list=true;
                                            $pager->pager_link_range=5;
                                            
                                            $pager->render();
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                }
                                else{
                                ?>
                                <div class="text-muted animated bounce">
                                    <h4><i class="fa fa-ban"></i> </h4>
                                </div>
                                <?php
                                }
                                ?>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
    