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
				<div id="home" class="tab-pane fade in active">
					<div class="mail2">
						
					</div>
					<div class="clearfix"></div><br>
					
					<div class="mail-boxing">
						<?php foreach($purchaser_guide as $row){?>
						<div class="container">
							<a href="<?= base_url('dashboard/purchaser_detail/'.$row['purchaser_guide_id'])?>">
								<div class="mailbox">
									<div class="col-sm-2 online1">
										<span class="online3"><?= $row['name']?></span>
										<br><?php $date = explode(' ',$row['pguide_created_date']);  echo $date[0]; ?>
									</div>
									
									<div class="col-sm-2">
										<strong>Description</strong><br>
										<p><?= substr($row['description'],0,20); ?>...</p>
									</div>
									
									<div class="col-sm-1">
										<strong>City</strong><br>
										<p><?= $row['city_name']?></p>
									</div>
									<div class="col-sm-1">
										<strong>Society</strong><br>
										<p><?= $row['society_name']?></p>
									</div>
									
									<div class="col-sm-2">
										<strong>Sector-Plot/Street</strong><br>
										<p><?= $row['sector'].'-'.$row['plot'].'/'.$row['street']?></p>
									</div>
									
									<!--<label class="col-sm-1 online"><i class="fas fa-times"></i></label>-->
								</div>
							</a>
						</div>
						<hr>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>