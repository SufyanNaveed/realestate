<?php include_once('includes/header.php'); ?>

<?php include_once('includes/profile_sidebar.php'); ?>

	
		<div class="col-lg-9 sidediv property-form">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/profile')?>">My Account & Profile</a></li>
				<li>User Profile</li>			  
            </ol>
			
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#role">My Profile</a></li>
			</ul>
			
			<div class="tab-content" style="margin-bottom:50px">
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
					
					<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('dashboard/update_profile')?>">
						<div class="form-group">
							<label class="control-label col-sm-2">Email:*</label>
							<div class="col-md-4">
							   <?= $this->session->userdata('email'); ?>							
						   </div>
						</div>
						 
						<div class="form-group">
							<label class="control-label col-sm-2">Name:*</label>
							<div class="col-md-4">
								<input type="text" name="username" value="<?= $profile['username']; ?>" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Company Name:*</label>
							<div class="col-md-4">
								<input type="text" name="estate_name" value="<?= $profile['estate_name']; ?>" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Work Experience:*</label>
							<div class="col-md-4">
								<input type="text" name="work_experience" value="<?= $profile['work_experience']; ?>" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Designation:*</label>
							<div class="col-md-4">
								<input type="text" name="designation" value="<?= $profile['designation']; ?>" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Phone:*</label>
							<div class="col-md-4">
								<input type="text" name="phone" value="<?= $profile['phone']; ?>" class="form-control">
							</div>
							<label><button class="btn btn-info side-button">+ Add phone</button></label>							
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Cell:*</label>
							<div class="col-md-4">
								<input type="text" name="cell" value="<?= $profile['cell']; ?>" class="form-control">
							</div>
							<label><button class="btn btn-info side-button">+ Add Cell</button></label>							
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Fax:*</label>
							<div class="col-md-4">
								<input type="text" name="fax" value="<?= $profile['fax']; ?>" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Address:*</label>
							<div class="col-md-4">
							   <input type="text" name="address" value="<?= $profile['address']; ?>" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Zip Code:*</label>
							<div class="col-md-4">
								<input type="text" name="zip_code" value="<?= $profile['zip_code']; ?>" class="form-control">
							</div>
						</div>
						  
						<!--<div class="form-group">
							<label class="control-label col-sm-2">Country:*</label>
							<div class="col-md-4">
								<select class="form-control" name="country" style="background-color:white;">
									<option value="<?= $profile['country']; ?>"><?php if($profile['country']){ echo $profile['country_name'];} else{ ?> Select Country <?php }?></option>						   
									<?php foreach($country as $row){?>
										<option value="<?= $row['country_id']?>"><?= $row['country_name']?></option>
									<?php } ?>										
								</select>
							</div>
						</div> -->
						
						<div class="form-group">
							<label class="control-label col-sm-2">City:*</label>
							<div class="col-md-4">
								<select class="form-control" name="city" style="background-color:white;">
									<option value="<?= $profile['city']; ?>"><?php if($profile['city_name']){ echo $profile['city_name'];} else{ ?> Select City <?php }?></option>						   
									<?php foreach($cities as $row){?>
										<option value="<?= $row['city_id']?>"><?= $row['city_name']?></option>
									<?php } ?>										
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">About yourself:*</label>
							<div class="col-md-4">
								<textarea class="form-control" name="about_self" rows="7"><?= $profile['about_self']; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Picture:*</label>
							<div class="col-md-4">
								<img src="<?= base_url('profile_images/'.$profile['profile_image'])?>"  style="height:46px" class="upload">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2">Upload:*</label>
							<div class="col-md-4">
								<input type="file" name="myFile">(Max 500x500@400KB)
							</div>
						</div>
						   
						<input type="hidden" name="current_profile_image" value="<?= $profile['profile_image']?>">
						<div class="form-group">
							<label class="control-label col-sm-2"></label>
							<div class="col-md-4">
								<button class="btn btn-info" onClick="return doconfirm();">Modify</button>
							</div>						  
						</div>
						
						<!--<div class="form-group">
							<label class="control-label col-sm-2">Phone:*</label>
							<div class="col-sm-10">
								<dl id="phoneNumberParts">
									<dd>
										<span class="form-control-static"></span>
										<input type="text" class="form-control grouped-field height" name="frstprt_phone" id="phonePrefix" placeholder="" size="3" maxlength="3">
										<span class="form-control-static">-</span>
									</dd>
									<dd>
										<input type="text" class="form-control grouped-field height" name="scndprt_phone" id="phonePrefix" placeholder="" size="3" maxlength="4">
										<span class="form-control-static">-</span>
									</dd>
									<dd>
										<input type="text" class="form-control grouped-field height" name="thrdprt_phone" id="phonePrefix" placeholder="" size="12" maxlength="4">
									</dd>
								</dl>
								<label><button class="btn btn-info side-button">+ Add phone</button></label>
							</div>						 
						</div>
						  
						<div class="form-group">
							<label class="control-label col-sm-2">Cell</label>
							<div class="col-sm-10">
								<dl id="phoneNumberParts">
									<dd>
										<span class="form-control-static"></span>
										<input type="text" class="form-control grouped-field height" name="frstprt_cell" id="phonePrefix" placeholder="" size="3" maxlength="3">
										<span class="form-control-static">-</span>
									</dd>							  
									<dd>
										<input type="text" class="form-control grouped-field height" name="scndprt_cell" id="phonePrefix" placeholder="" size="23" maxlength="4">
									</dd>
								</dl>
								<label><button class="btn btn-info side-button">+ Add cell</button></label>
							</div>						 
						</div>
						   
						<div class="form-group">
							<label class="control-label col-sm-2">Fax:*</label>
							<div class="col-sm-10">
								<dl id="phoneNumberParts">
									<dd>
										<span class="form-control-static"></span>
										<input type="text" class="form-control grouped-field height" name="frstprt_fax" id="phonePrefix" placeholder="" size="3" maxlength="3">
										<span class="form-control-static">-</span>
									</dd>
									<dd>
										<input type="text" class="form-control grouped-field height" name="scndprt_fax" id="phonePrefix" placeholder="" size="3" maxlength="3">
										<span class="form-control-static">-</span>
									</dd>
									<dd>
										<input type="text" class="form-control grouped-field height" name="thrdprt_fax" id="phonePrefix" placeholder="" size="12" maxlength="4">
									</dd>
								</dl>
							</div>
						</div>-->					
						
					</form>  
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>