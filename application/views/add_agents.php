<?php include_once('includes/header.php'); ?>

<?php include_once('includes/agent_sidebar.php'); ?>
			
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('agents')?>">Agent staff</a></li>
				<li>Add Agent</li>				
			</ol>
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Add Agent</a>
				</li>
			</ul>
				
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h5 class="hr-line"><span>User details</span></h5>
					
					<?php if($this->session->flashdata('success')){?>
						<div class="alert alert-success">      
							<?php echo $this->session->flashdata('success')?>
						</div>
					<?php } ?>												
					<?php if($this->session->flashdata('error')){?>
						<div class="alert alert-danger">
						<?php echo $this->session->flashdata('error')?>
						</div>														
					<?php } ?>
					
					<form class="form-horizontal" method="post" action="<?= base_url('agents/insert_agents')?>">
						<div class="form-group">
							<label class="control-label col-sm-3">Email :*</label>
							<div class="col-md-4">
								<input type="text" name="email" class="form-control">
							</div>
						</div>
						 
						<div class="form-group">
							<label class="control-label col-sm-3">Password :*</label>
							<div class="col-md-4">
								<input type="password" name="password" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Confirm Password:*</label>
							<div class="col-md-4">
								<input type="password" name="confirm_password" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Name :*</label>
							<div class="col-md-4">
								<input type="text" name="username" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Phone :*</label>
							<div class="col-md-4">
								<input type="text" name="phone" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Cell :*</label>
							<div class="col-md-4">
								<input type="text" name="cell" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Fax :*</label>
							<div class="col-md-4">
								<input type="text" name="fax" class="form-control">
							</div>
						</div>
						
						
						  
						<div class="form-group">
							<label class="control-label col-sm-3">Address</label>
							<div class="col-md-4">
								<input type="text" name="address" class="form-control">
							</div>									
						</div>
						 
						<div class="form-group">
							<label class="control-label col-sm-3">Zip code</label>
							<div class="col-md-4">
								<input type="text" name="zip_code" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Country:*</label>
							<div class="col-md-4">
								<select class="form-control" name="country" style="background-color:white;">
									<option value="">Select Country</option>						   
									<?php foreach($country as $row){?>
										<option value="<?= $row['country_id']?>"><?= $row['country_name']?></option>
									<?php } ?>										
								</select>
							</div>
						</div>
						<br><br>
						
						<h5 class="hr-line"><span>Assigning Listing Quota</span></h5>
						<br><br>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Listing Quota</label>
							<div class="col-md-4">
								<input type="text" name="listing_quota" class="form-control">
							</div>
						</div>
						   
						<div class="form-group">
							<label class="control-label col-sm-3">Hot Credit</label>
							<div class="col-md-4">
								<input type="text" name="hot_credit" class="form-control">
							</div>
						</div>
								 
						<div class="form-group">
							<label class="control-label col-sm-3">SuperHot Credit</label>
							<div class="col-md-4">
								<input type="text" name="superhot_credit" class="form-control">
							</div>
						</div>
								   
						<div class="form-group">
							<label class="control-label col-sm-3">Refresh Credit</label>
							<div class="col-md-4">
								<input type="text" name="refresh_credit" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3"></label>
							<div class="col-md-4">
								<button class="btn btn-info">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>