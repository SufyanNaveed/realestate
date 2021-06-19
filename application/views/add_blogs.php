<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
			
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/blog')?>">Blogs</a></li>
				<li>Add Blog</li>				
			</ol>
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Add Blog</a> 
				</li>
			</ul>
				
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
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
					
					<br>
					<br>
					<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('dashboard/insert_blog')?>"> 
						<div class="form-group">
							<label class="control-label col-sm-3">Category:*</label>
							<div class="col-md-8">
								<select name="category[]" required class="form-control" multiple style="background-color:white;">
									<option value="">Select Category</option>
									<option value="Buying">Buying</option>
									<option value="Commercial">Commercial</option>
									<option value="Construction">Construction</option>
									<option value="Development_Authority">Development Authority</option>
									<option value="General">General</option>
									<option value="Home_Decor">Home Decor</option>
									<option value="Housing_Schemes">Housing Schemes</option>
									<option value="Interiors">Interiors</option>
									<option value="Investment_Tips">Investment Tips</option>
									<option value="Leasing">Leasing</option>
									<option value="News_Updates">News & Updates</option>
									<option value="Pakistan_Real_Estate">Pakistan Real Estate</option>
									<option value="Renting">Renting</option>
									<option value="Selling">Selling</option>
									<option value="Taxation">Taxation</option>
									<option value="Tourism">Tourism</option>
									
								</select>
							</div> 
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Blog Title:*</label>
							<div class="col-md-8">
								<input type="text" name="title" required class="form-control" placeholder = "Enter Blog Title">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Blog Description:*</label>
							<div class="col-md-8">
								<textarea name="description" required class="form-control" rows="10" ></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Select Image:*</label>
							<div class="col-md-8">
								<input type="file" name="image" required>
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
