<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
	
		<div class="col-lg-9 sidediv property-form">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/assesment')?>">Free Assesment</a></li>
				<li>View Free Assesment</li>					
			</ol>
			
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">View Free Assesment</a></li>
			</ul>
			
			<div class="tab-content padding">
				
				<div id="menu1" class="tab-pane fade in active">
					<div class="mail"> 
						
					</div>
					<div class="clearfix"></div><br>
					<div class="container">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-2">
									<span class="online3">Name</span>
									<br><?= $assesment['name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Email</span>
									<br><?= $assesment['email']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Contact</span>
									<br><?= $assesment['contact']; ?>
								</div>
								<!-- <div class="col-sm-2">
									<span class="online3">Min - Max</span>
									<br><?= $assesment['min'].' - '.$assesment['max']; ?>
								</div> --><div class="col-sm-2">
									<span class="online3">Type</span>
									<br><?= $assesment['type']; ?>
								</div>
							</div>
						</div><br><br><br>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-2">
									<span class="online3">Size</span>
									<br><?= $assesment['size']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">City</span>
									<br><?= $assesment['city_name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Society</span>
									<br><?= $assesment['society_name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Phase</span>
									<br><?= $assesment['phase_name']; ?>
								</div>								
							</div>
						</div><br><br><br>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-2">
									<span class="online3">Sector</span>
									<br><?= $assesment['sector_name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Street</span>
									<br><?= $assesment['street']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Plot</span>
									<br><?= $assesment['plot']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Purpose</span>
									<br><?= $assesment['purpose']; ?>
								</div>
							</div>
						</div><br><br><br>
						<div class="col-sm-8">
							<span class="online3">Description</span>
							<p><?= $assesment['description']; ?></p>
						</div>
					</div>
					<br>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>