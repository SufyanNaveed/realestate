<?php include_once('includes/header.php'); ?>

<?php include_once('includes/profile_sidebar.php'); ?>
 
		<div class="col-lg-9 sidediv property-form">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/profile')?>">My Account & Profile</a></li>
				<li>Change Password</li>		  
            </ol>
 
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#role">Change Password</a>
				</li>  
			</ul>
			
			<div class="tab-content">
				<div id="role" class="tab-pane fade in active"><br>
					
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
					
					<form method="post" action="<?= base_url('dashboard/change_password')?>">					
						<div class="form-group row password-form">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Current Password:</label>
							<div class="col-sm-4">
								<input type="password" class="form-control height" name="current_pass" id="inputEmail3" placeholder="Current Password" required>
							</div>
						</div>
						
						<div class="form-group row password-form">
							<label for="inputPassword3" class="col-sm-3 col-form-label">New Password:</label>
							<div class="col-sm-4">
								<input type="password" class="form-control height" name="new_pass" id="inputPassword3" placeholder="New Password" required>
							</div>
						</div>
						
						<div class="form-group row password-form">
							<label for="inputPassword3" class="col-sm-3 col-form-label">Confirm Password:</label>
							<div class="col-sm-4">
								<input type="password" class="form-control height" name="confirm_pass" id="inputPassword3" placeholder="Confirm Password" required>
							</div>
						</div>
						  
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-3 col-form-label"></label>
							<div class="col-sm-4">
								<button type="submit" onClick="return doconfirm();" class="btn btn-info">Modify</button>
							</div>
						</div> 
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>