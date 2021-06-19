<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
			
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/market_updates')?>">Market Updates</a></li>
				<li>Add Market Updates</li>				
			</ol>
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Add Market Updates</a> 
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
					<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url('dashboard/insert_market_updates')?>">
						<div class="form-group">
							<label class="control-label col-sm-3">Title:*</label>
							<div class="col-md-4">
								<input type="text" name="title" required class="form-control" placeholder = "Enter Title">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Description:*</label>
							<div class="col-md-4">
								<textarea name="description" required class="form-control" rows="10"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Select Image:*</label>
							<div class="col-md-4">
								<input type="file" name="image" class="form-control">
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
