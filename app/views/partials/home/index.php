
		<?php 
			$comp_model = new SharedController;
		?>
		<div>
			
		<div  class="bg-light p-3 mb-3">
			<div class="container">
				
				<div class="row ">
					
		<div class="col-md-12 comp-grid">
			<h3 >The Dashboard</h3>

		</div>

				</div>
			</div>
		</div>

		<div  class="">
			<div class="container">
				
				<div class="row ">
					
		<div class="col-md-12 comp-grid">
			
		</div>

		<div class="col-md-4 comp-grid">
			
					<?php $rec_count = $comp_model->getcount_documents();  ?>
					<a class="animated zoomIn record-count alert alert-info"  href="<?php print_link("x_documents/") ?>">
						<div class="row">
							<div class="col-2">
								<i class="fa fa-cloud-upload "></i>
							</div>
							<div class="col-10">
								<div class="flex-column justify-content align-center">
									<div class="title">Documents</div>
									
									<small class="">Total Uploaded Documents</small>
								</div>
							</div>
							<h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
						</div>
						
					</a>
			
		</div>

		<div class="col-md-3 col-sm-4 comp-grid">
			
					<?php $rec_count = $comp_model->getcount_messages();  ?>
					<a class="animated zoomIn record-count alert alert-primary"  href="<?php print_link("x_messages/") ?>">
						<div class="row">
							<div class="col-2">
								<i class="fa fa-envelope "></i>
							</div>
							<div class="col-10">
								<div class="flex-column justify-content align-center">
									<div class="title">Messages</div>
									
									<small class="">Unread</small>
								</div>
							</div>
							<h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
						</div>
						
					</a>
			
		</div>

		<div class="col-md-3 col-sm-4 comp-grid">
			
					<?php $rec_count = $comp_model->getcount_messages_2();  ?>
					<a class="animated zoomIn record-count alert alert-warning"  href="<?php print_link("x_messages/") ?>">
						<div class="row">
							<div class="col-2">
								<i class="fa fa-envelope-o "></i>
							</div>
							<div class="col-10">
								<div class="flex-column justify-content align-center">
									<div class="title">Messages</div>
									
									<small class="">Read</small>
								</div>
							</div>
							<h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
						</div>
						
					</a>
			
		</div>

				</div>
			</div>
		</div>

		</div>
	