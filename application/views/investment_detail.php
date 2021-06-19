<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
	
		<div class="col-lg-9 sidediv property-form">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/investment_guide')?>">Investment Guide</a></li>
				<li>View Investment Guide</li>					
			</ol>
				
			<ul class="nav nav-tabs"> 
				<li class="active">
					<a data-toggle="tab" href="#home">View Investment Guide</a>
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
									<br><?= $investment_guide['name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Email</span>
									<br><?= $investment_guide['email']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Contact</span>
									<br><?= $investment_guide['contact']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Min - Max</span>
									<br><?= $investment_guide['min']; ?>
								</div>
							</div>
						</div><br><br><br>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-2">
									<span class="online3">Type</span>
									<br><?= $investment_guide['type']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">City</span>
									<br><?= $investment_guide['city_name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Society</span>
									<br><?= $investment_guide['society_name']; ?>
								</div>
								<div class="col-sm-2">
									<span class="online3">Phase</span>
									<br><?= $investment_guide['phase_name']; ?>
								</div>
								
							</div>
						</div><br><br><br>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-2">
									<span class="online3">Time Period</span>
									<br><?= $investment_guide['time_period']; ?>
								</div>
								
							</div>
						</div><br><br><br>
						
						<div class="col-sm-8">
							<span class="online3">Description</span>
							<p><?= $investment_guide['description']; ?></p>
						</div>
					</div>
					<br>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>