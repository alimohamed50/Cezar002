
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
                    <h3 class="record-title">Y App Gen</h3>
                    
                </div>
                
                <div class="col-sm-3 comp-grid">
                    
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("y_app_gen/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Y App Gen 
                    </a>
                    
                </div>
                
                <div class="col-sm-5 comp-grid">
                    
                    <form  class="search" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_query_str_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        
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
                            <div id="y_app_gen-application_wizard-records">
                                
                                <?php
                                if(!empty($records)){
                                ?>
                                <div class="page-records table-responsive">
                                    <table class="table  table-striped table-sm">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th class="td-sno td-checkbox"><input class="toggle-check-all" type="checkbox" /></th>
                                                
                                                <th class="td-sno">#</th>
                                                <th > Y App Gen Id</th>
                                                <th > Y App Mans Id</th>
                                                <th > Z Salutation Id</th>
                                                <th > Y App Gen Givenname</th>
                                                <th > Y App Gen Familyname</th>
                                                <th > Y App Gen Dob</th>
                                                <th > Z Maritalstatus Id</th>
                                                <th > Z Yes No Id Qus01</th>
                                                <th > Z Yes No Id Qus02</th>
                                                <th > Z Country Id Countryofcitizenship</th>
                                                <th > Z Country Id Countryofresidence</th>
                                                <th > Y App Gen Address</th>
                                                <th > Y App Gen Phoneno</th>
                                                <th > Z Hear Id Qus3</th>
                                                <th > Z Do In Canda Id Qus4</th>
                                                <th > Z Yes No Id Qus05</th>
                                                <th > Y App Gen Further Information</th>
                                                <th > Created At</th>
                                                <th > Updated At</th>
                                                <th > Users User Id</th>
                                                <th > Z App Sts Id</th>
                                                
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
                                                    <td><a href="<?php print_link("y_app_gen/view/$data[y_app_gen_Id]") ?>"><?php echo $data['y_app_gen_Id']; ?></a></td>
                                                    <td> <?php echo $data['y_app_mans_id']; ?> </td>
                                                    <td> <?php echo $data['z_salutation_Id']; ?> </td>
                                                    <td> <?php echo $data['y_app_gen_GivenName']; ?> </td>
                                                    <td> <?php echo $data['y_app_gen_FamilyName']; ?> </td>
                                                    <td> <?php echo $data['y_app_gen_DOB']; ?> </td>
                                                    <td> <?php echo $data['z_MaritalStatus_Id']; ?> </td>
                                                    <td> <?php echo $data['z_yes_no_Id_Qus01']; ?> </td>
                                                    <td> <?php echo $data['z_yes_no_Id_Qus02']; ?> </td>
                                                    <td> <?php echo $data['z_country_Id_CountryofCitizenship']; ?> </td>
                                                    <td> <?php echo $data['z_country_Id_CountryofResidence']; ?> </td>
                                                    <td> <?php echo $data['y_app_gen_Address']; ?> </td>
                                                    <td> <?php echo $data['y_app_gen_PhoneNo']; ?> </td>
                                                    <td> <?php echo $data['z_hear_Id_Qus3']; ?> </td>
                                                    <td> <?php echo $data['z_do_in_canda_Id_Qus4']; ?> </td>
                                                    <td> <?php echo $data['z_yes_no_Id_Qus05']; ?> </td>
                                                    <td> <?php echo $data['y_app_gen_further_information']; ?> </td>
                                                    <td> <?php echo $data['created_at']; ?> </td>
                                                    <td> <?php echo $data['updated_at']; ?> </td>
                                                    <td> <?php echo $data['users_user_id']; ?> </td>
                                                    <td> <?php echo $data['z_app_sts_id']; ?> </td>
                                                    
                                                    
                                                    <th class="td-btn">
                                                        
                                                        
                                                        <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link('y_app_gen/view/'.$data['y_app_gen_Id']); ?>">
                                                            <i class="fa fa-eye"></i> 
                                                        </a>
                                                        
                                                        
                                                        <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link('y_app_gen/edit/'.$data['y_app_gen_Id']); ?>">
                                                            <i class="fa fa-edit"></i> 
                                                        </a>
                                                        
                                                        
                                                        <a class="btn btn-sm btn-danger recordDeletePromptAction has-tooltip" title="Delete this record" href="<?php print_link("y_app_gen/delete/$data[y_app_gen_Id]"); ?>" >
                                                            <i class="fa fa-times"></i>
                                                            
                                                        </a>
                                                        
                                                        
                                                    </th>
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
        