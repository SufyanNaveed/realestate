<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
	
		<div class="col-lg-9 sidediv property-form">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/purchaser_guide')?>">Purchaser Guide</a></li>
				<li>View Purchaser Guide</li>					
			</ol>
				
			<ul class="nav nav-tabs"> 
				<li class="active">
					<a data-toggle="tab" href="#home">View Purchaser Guide</a>
				</li>		
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
									<br><?= $purchaser_guide['name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Email</span>
									<br><?= $purchaser_guide['email']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Contact</span>
									<br><?= $purchaser_guide['contact']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Min - Max</span>
									<br><?= $purchaser_guide['min']; ?>
								</div>
							</div>
						</div><br><br><br>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-2">
									<span class="online3">Type</span>
									<br><?= $purchaser_guide['type']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Size</span>
									<br><?= $purchaser_guide['size']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">City</span>
									<br><?= $purchaser_guide['city_name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Society</span>
									<br><?= $purchaser_guide['society_name']; ?>
								</div>
								
							</div>
						</div><br><br><br>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-2">
									<span class="online3">Phase</span>
									<br><?= $purchaser_guide['phase_name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Sector</span>
									<br><?= $purchaser_guide['sector_name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Street</span>
									<br><?= $purchaser_guide['street']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Plot</span>
									<br><?= $purchaser_guide['plot']; ?>
								</div>
								
							</div>
						</div><br><br><br>
						<div class="col-sm-8">
							<span class="online3">Description</span>
							<p><?= $purchaser_guide['description']; ?></p>
						</div>
					</div>
					<br>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>