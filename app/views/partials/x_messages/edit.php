
<?php
$comp_model = new SharedController;
$data = $this->view_data;

//$rec_id = $data['__tableprimarykey'];
$page_id = Router :: $page_id;

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
                    <h3 class="record-title">Messages Info.</h3>
                    
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
                        <form role="form" enctype="multipart/form-data"  class="form form-horizontal needs-validation" novalidate action="<?php print_link("x_messages/edit/$page_id"); ?>" method="post">
                            <div class="card-body">
                                
                                
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="message_subject">Message Subject </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input  id="message_subject" value="<?php  echo $data['message_subject']; ?>" type="text" placeholder="Enter Message Subject" disabled  name="message_subject" class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="message_body">Message Body </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <textarea placeholder="Enter Message Body" readonly rows="" name="message_body" class=" form-control"><?php  echo $data['message_body']; ?></textarea>
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="message_sent_date">Received Date </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    
                                                    <input id="message_sent_date" class="form-control datepicker" value="<?php  echo $data['message_sent_date']; ?>" type="datetime" name="message_sent_date" placeholder="Enter Received Date" data-enable-time="true"   data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                        
                                                        
                                                        
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
                                                    <label class="control-label" for="z_read_unread_id">Status <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <select required=""  name="z_read_unread_id" placeholder="Select a value ..."    class="form-control">
                                                            <option selected><?php echo $data['z_read_unread_id']; ?></option>
                                                            
                                                            <?php
                                                            $rec = $data['z_read_unread_id'];
                                                            $z_read_unread_id_options = $comp_model -> x_messages_z_read_unread_id_option_list();
                                                            if(!empty($z_read_unread_id_options)){
                                                            foreach($z_read_unread_id_options as $arr){
                                                            $val=array_values($arr);
                                                            $selected = ( $val[0] == $rec ? 'checked' : null ) ;
                                                            ?>
                                                            <option <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?></option>
                                                            <?php
                                                            }
                                                            }
                                                            ?>
                                                            
                                                        </select> 
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                    </div>
                                    <div class="form-group text-center">
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
        