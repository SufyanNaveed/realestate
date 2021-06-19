<?php include_once('includes/header.php'); ?>

<?php include_once('includes/property_managment_sidebar.php'); ?>
	
		<div class="col-lg-9 sidediv property-form">
			<ol class="breadcrumb">
				<li><a href="index.html">Property mangament</a></li>
				<li>Active</li>
				<li>Wanted</li>
			</ol>
						<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Premium listing (5)</a></li> 
				<li><a data-toggle="tab" href="#menu1">Super hot CR (5)</a></li>
				<li><a data-toggle="tab" href="#menu2">Hot CR (5)</a></li>
				<li><a data-toggle="tab" href="#menu4">Refresh CR (5)</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<br>
					<table class="table-bordered col-sm-6">
						<tr style="background-color:#EAEAEA;">
							<th>Total quota</th>
							<th>Quota used</th>
							<th>Available</th>
						</tr>
						
						<tr>
							<td><?= $get_quota['listing_quota']; ?></td>
							<td><?= $get_quota['used_listing_quota']; ?></td>
							<td><?= $get_quota['listing_quota']- $get_quota['used_listing_quota'] ; ?></td>
						</tr>
					</table>
					<div class="clearfix"></div>
					<div class="col-lg-4 active-listing">Active listings: <?php $counter=0; foreach($post_ads as $row){ if($row['status'] == 1 && $row['user_id'] == $this->session->userdata('user_id')){ $counter++; }} echo $counter; ?></div>
					<div class="clearfix"></div><br>
					<p> Refresh Listing :<span class="text-danger"> <?= $get_quota['refresh_credit']; ?></span>&emsp;
						Hot Listing : <span class="text-danger"> <?= $get_quota['hot_credit']; ?></span>&emsp; 
						Super Hot Listing : <span class="text-danger"> <?= $get_quota['superhot_credit']; ?></span>&emsp;
						Used Quota :<span class="text-danger"> <?= $get_quota['used_refresh_credit'] + $get_quota['used_hot_credit'] + $get_quota['used_superhot_credit']; ?></span>
					</p>
				</div>
				
				<div id="menu1" class="tab-pane fade">
					<br>
					<table class="table-bordered col-sm-6 ">
						<tr style="background-color:#EAEAEA;">
							<th>Total Credits</th>
							<th>Currently SuperHot</th>
						</tr>
						
						<tr>
							<td><?= $get_quota['superhot_credit']; ?></td>
							<td><?= $get_quota['superhot_credit'] - $get_quota['used_superhot_credit']; ?></td>
						</tr>
						
						<tr>
							<td>Super hot credits</td>
						</tr>
					</table>
					<div class="clearfix"></div>
					<br>
					<p> Refresh Listing :<span class="text-danger"> <?= $get_quota['refresh_credit']; ?></span>&emsp;
						Hot Listing : <span class="text-danger"> <?= $get_quota['hot_credit']; ?></span>&emsp; 
						Super Hot Listing : <span class="text-danger"> <?= $get_quota['superhot_credit']; ?></span>&emsp;
						Used Quota :<span class="text-danger"> <?= $get_quota['used_refresh_credit'] + $get_quota['used_hot_credit'] + $get_quota['used_superhot_credit']; ?></span>
					</p>
				</div>
				
				<div id="menu2" class="tab-pane fade">
					<br>
					<table class="table-bordered col-sm-6 ">
						<tr style="background-color:#EAEAEA;">
							<th>Total Credits</th>
							<th>Currently Hot</th>
						</tr>
						
						<tr>
							<td><?= $get_quota['hot_credit']; ?></td>
							<td><?= $get_quota['hot_credit'] - $get_quota['used_hot_credit']; ?></td>
						</tr>
						
						<tr>
							<td>Hot credits</td>
						</tr>
					</table>
					<div class="clearfix"></div>
					<br>
					<p> Refresh Listing :<span class="text-danger"> <?= $get_quota['refresh_credit']; ?></span>&emsp;
						Hot Listing : <span class="text-danger"> <?= $get_quota['hot_credit']; ?></span>&emsp; 
						Super Hot Listing : <span class="text-danger"> <?= $get_quota['superhot_credit']; ?></span>&emsp;
						Used Quota :<span class="text-danger"> <?= $get_quota['used_refresh_credit'] + $get_quota['used_hot_credit'] + $get_quota['used_superhot_credit']; ?></span>
					</p>
				</div>
			
				<div id="menu4" class="tab-pane fade">
					<br>
					<table class="table-bordered col-sm-6 ">
						<tr style="background-color:#EAEAEA;">
							<th>Total Credits</th>
						</tr>
						
						<tr>
							<td><?= $get_quota['refresh_credit']; ?></td>
						</tr>
						
						
					</table>
					<div class="clearfix"></div>
					<br>
					<p> Refresh Listing :<span class="text-danger"> <?= $get_quota['refresh_credit']; ?></span>&emsp;
						Hot Listing : <span class="text-danger"> <?= $get_quota['hot_credit']; ?></span>&emsp; 
						Super Hot Listing : <span class="text-danger"> <?= $get_quota['superhot_credit']; ?></span>&emsp;
						Used Quota :<span class="text-danger"> <?= $get_quota['used_refresh_credit'] + $get_quota['used_hot_credit'] + $get_quota['used_superhot_credit']; ?></span>
					</p>
				</div>
			</div>

			<div class="clearfix"></div>
			<br><br>
			
			<!--  wanted Tab -->
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#prof2">Active Listing Super Hot Listing</a></li>
			</ul>
			<div class="tab-content">
				<div id="prof2" class="tab-pane fade in active">
					<br>
					<form class="form-horizontal">
						
						<div class="form-group">
							<label class="control-label col-sm-1">Show:</label>
							<div class="col-md-2">
								<select class="form-control" id="sel1">
									<option>10</option>
								</select> 
							</div>
							<label for="inputValue" class="col-md-3 control-label Listing">Listing per page</label>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-1">Show by:</label>
							<div class="col-md-8">
								<div class="form-group row">
									<div class="col-xs-5 col-md-3">
										<select class="form-control" id="sel1">
											<option>ID</option>
											<option>Type</option>
											<option>Location</option>
											<option>Price</option>
											<option>Expiry</option>
											<option>Views</option>
										</select> 
									</div>
									<label for="inputValue" class="col-md-1 control-label filter">in</label>
									<div class="col-xs-5 col-md-3">
										<select class="form-control" id="sel1">
											<option>Descending</option>
											<option>Descending</option>
										</select> 
									</div>
									<label for="inputValue" class="col-md-3 control-label Listing">order&nbsp;<button class="btn btn-success go">Go</button></a></label>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="col-sm-4">
								<h6 style="color:grey">Total Listings: <?= count($wanted_listing)?></h6>
							</div>
							<div class="col-sm-8">
								<nav aria-label="...">
									<ul class="pagination">
										<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1">Previous</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item active">
											<a class="page-link" href="#">2 <span class="sr-only">(curRent)</span></a>
										</li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						
						<table class="table-bordered" style="width:100%">
							<tr style="background-color:#05a7e5; color:white;">
								<th>ID</th>
								<th>Type</th>
								<th>Location</th>
								<th>Price (PKR)</th>
								<th width="13%">Listed Date</th>
								<th>Quota</th>
								<th>Image</th>
								<th>Views</th>
								<th width="16%">Controls</th>
							</tr>
							
							<?php foreach($wanted_listing as $row){?>
							<tr>
								<td><?= $row['post_ads_id']; ?></td>
								<td>
									<?php if($row['frst_option'])
									{ echo $row['frst_option'];}
									else if($row['scnd_option'])
									{ echo $row['scnd_option'];}
									else if($row['thrd_option'])
									{ echo $row['thrd_option'];}
									?>
								</td>
								<td><?= $row['society_name'].','.$row['phase_name'].','.$row['sector_name']; ?></td>
								<td><?= $row['all_inclusive']; ?></td>
								<td><?php $date = (explode(' ',$row['post_ads_created_date'])); echo $date[0];?></td>
								<td>1</td>
								<td>
									<?= count(explode(',',$row['ads_images'])); ?>
								</td>
								<td><?= $row['views']; ?></td>
								<td>
									<a class="view" aria-hidden="true" 
										data-status= "<?php if($row['status'] == 0){ echo 'Pending';} elseif($row['status'] == 2){ echo 'Rejected'; } else { echo 'Active'; }?>"
										<?php if($row['list_owner']) {?>
											data-listing_owner="<?= $row['list_owner']; ?>" 
										<?php } else { ?>
											data-email="<?= $row['email']; ?>" 
											data-cell="<?= $row['phone']; ?>" 
										<?php } ?> >
										<img src="<?= base_url('assets/css/images/icon0.png')?>">
									</a>
									<a href="<?= base_url('dashboard/edit_post_listing/'.$row['post_ads_id'])?>"><img src="<?= base_url('assets/css/images/icon2.png')?>"></a>
									<a href="<?= base_url('dashboard/delete_ads/'.$row['post_ads_id'])?>" onclick="return dodelete();"><img src="<?= base_url('assets/css/images/icon3.png')?>"></a>
									<?php if($row['hot_ads_type'] == 0) { ?><a href="<?= base_url('dashboard/update_hot_ads_type/'.$row['post_ads_id'])?>"><img src="<?= base_url('assets/css/images/icon9.png')?>"></a><?php } else { ?><img style="width:12px; height:13px;" src="<?= base_url('assets/css/images/fire.png')?>"> <?php } ?>
									<?php if($row['superhot_ads_type'] == 0) { ?><a href="<?= base_url('dashboard/update_superhot_ads_type/'.$row['post_ads_id'])?>"><img src="<?= base_url('assets/css/images/icon5.png')?>"></a><?php } else { ?><img style="width:12px; height:13px;" src="<?= base_url('assets/css/images/fire1.png')?>"> <?php } ?>
									<a href="<?= base_url('dashboard/update_refresh_ads_type/'.$row['post_ads_id'])?>"><img src="<?= base_url('assets/css/images/icon7.png')?>"></a>
								</td>
							</tr>
							<?php } ?>
						</table>
						
					</form>
					<br>
					<!-- <span>
						<strong>Mass action</strong>&emsp;
						<button class="btn btn-default">Add to shortlist</button>&emsp;
						<button class="btn btn-default">Delete selected</button>&emsp;
						<button class="btn btn-default">Change expiry date</button>&emsp;
						<button class="btn btn-default">Refresh Listing</button>
					</span> -->
				</div>
			</div>
		</div>
	</div>
		
<?php include_once('includes/footer.php'); ?>