
<?php
	$comp_model = new SharedController;

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
					
		<div class="col-sm-6 comp-grid">
			<h3 class="record-title">User registration</h3>

		</div>

		<div class="col-sm-6 comp-grid">
			<div class="">
	<div class="text-center">
		Already have an account?  <a class="btn btn-primary" href="<?php print_link('') ?>"> Login</a>
	</div>
</div>
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
		<form id="users2-userregister-form" role="form" enctype="multipart/form-data" class="form form-horizontal needs-validation" novalidate action="<?php print_link("index/register") ?>" method="post">
		<div class="card-body">
		
								
								<div class="form-group ">
									<div class="row">
										<div class="col-sm-4">
											<label class="control-label" for="user_name">User Name <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<div class="">
												<input  id="user_name" value="<?php  echo $this->set_field_value('user_name',''); ?>" type="text" placeholder="Enter User Name"  required="" name="user_name" class="form-control " />
									 
 
												
											</div>
											 
											
										</div>
									</div>
								</div>
				
				

								
								<div class="form-group ">
									<div class="row">
										<div class="col-sm-4">
											<label class="control-label" for="email">Email <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<div class="">
												<input  id="email" value="<?php  echo $this->set_field_value('email',''); ?>" type="email" placeholder="Enter Email"  required="" name="email" class="form-control " />
									 
 
												
											</div>
											 
											
										</div>
									</div>
								</div>
				
				

								
								<div class="form-group ">
									<div class="row">
										<div class="col-sm-4">
											<label class="control-label" for="password">Password <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<div class="">
												<input  id="password" value="<?php  echo $this->set_field_value('password',''); ?>" type="password" placeholder="Enter Password"  required="" name="password" class="form-control " />
									 
 
												
											</div>
											 
											
										</div>
									</div>
								</div>
				
				
								
								<div class="form-group ">
									<div class="row">
										<div class="col-sm-4">
											<label class="control-label" for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<div class="">
												
<input class="form-control " type="password" name="confirm_password" placeholder="Confirm Password" />
 
												
											</div>
											 
											
										</div>
									</div>
								</div>
				
				

								
								<div class="form-group ">
									<div class="row">
										<div class="col-sm-4">
											<label class="control-label" for="photo">Photo <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<div class="">
												
		<div class="dropzone" id="photo_upload" input="#photo_input" data-multiple="false" control-class="upload-control" drop="true" dropmsg="Drop files here to upload" uploadpath="uploads/files/" filenameformat="random" btntext="Browse" extensions="jpg,png,gif,jpeg" filesize="3" maximum="1">
		</div>
		<input name="photo" id="photo_input" required="" class="d-none" value="<?php  echo $this->set_field_value('photo',''); ?>" type="text"  />
 
												
											</div>
											 
											
										</div>
									</div>
								</div>
				
				

								
								<div class="form-group ">
									<div class="row">
										<div class="col-sm-4">
											<label class="control-label" for="user_role">User Role <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<div class="">
												<input  id="user_role" value="<?php  echo $this->set_field_value('user_role',''); ?>" type="number" placeholder="Enter User Role" step="1"  required="" name="user_role" class="form-control " />
									 
 
												
											</div>
											 
											
										</div>
									</div>
								</div>
				
				

								
								<div class="form-group ">
									<div class="row">
										<div class="col-sm-4">
											<label class="control-label" for="date_registered">Date Registered <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<div class="input-group">
												
<input id="date_registered" class="form-control datepicker" required="" value="<?php  echo $this->set_field_value('date_registered',''); ?>" type="datetime" name="date_registered" placeholder="Enter Date Registered" data-enable-time="true"   data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" />
							
							 
												
								<div class="input-group-append">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
							
											</div>
											 
											
										</div>
									</div>
								</div>
				
				


		</div>
		<div class="form-group form-submit-btn-holder text-center">
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
