<?php $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>			

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Habro Real Estate Portal</title>
	<link rel="shortcut icon" href="<?= base_url('assets/ico/fav.png')?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/normalize.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/all.css')?>" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	
	
	
	<div class="container">
		<nav class="navbar nav1">
			<div class="container">
				<div class="navbar-header logo">
				  <img src="<?= base_url('assets/css/habro.png')?>" class="logo1">
					
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right top-nv text-uppercase">
						<li><a href="javascript:;">logged in as <?= $this->session->userdata('email');?></a></li>
						<li><a href="<?= base_url('home/blogs')?>"><i class="fa fa-blogger-b"></i>&nbsp;Blog</a></li>
						<li><a href="<?= base_url('home')?>"><i class="fa fa-houzz"></i>&nbsp;Habro.com</a></li>
						<li><a href="<?= base_url('login/logout')?>"><i class="fa fa-sign-out"></i>&nbsp;logout</a></li>
					</ul>
				</div>
				<p class="inven">
					<?php if($this->session->userdata('user_role') == 0){?>
						<a href="<?= base_url('dashboard/post_listing')?>">
							<button class="btn btn-success post-button">Post listing &nbsp;
							<i class="fa fa-play"></i></button>
						</a>
					<?php } else { if($roles[9] == 10){?>
						<a href="<?= base_url('dashboard/post_listing')?>">
							<button class="btn btn-success post-button">Post listing &nbsp;
							<i class="fa fa-play"></i></button>
						</a>
					<?php }}?>
				</p> 
			</div>
		</nav>

		<div class="navbar navbar-default nav2" role="navigation">
			<div class="">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
						<span class="sr-only">Toggle navigation</span> 
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar2">
					
					
					<ul class="nav navbar-nav navbar-left cust-nav text-uppercase ">
						<?php if($this->session->userdata('user_role') != 0){?>
							<?php if($roles[0] == 1){?>
								<li class="<?php if($current_link == base_url('dashboard')) { echo 'active1'; } ?>">
									<a href="<?= base_url('dashboard')?>">Dashboard</a>
								</li>						
							<?php } ?>
							
							<?php if($roles[1] == 2){?>
								<li class="<?php 
									if($current_link == base_url('dashboard/active_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/active_sale_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/active_rent_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/active_wanted_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/active_hot_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/active_superhot_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/edited_sale_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/edited_rent_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/edited_wanted_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/pending_sale_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/pending_rent_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/pending_wanted_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/expired_sale_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/expired_rent_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/expired_wanted_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/deleted_sale_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/deleted_rent_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/deleted_wanted_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/rejected_sale_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/rejected_rent_property_management')) { echo 'active1'; } 
									elseif($current_link == base_url('dashboard/rejected_wanted_property_management')) { echo 'active1'; } 
									?>">
									<a href="<?= base_url('dashboard/active_property_management')?>">Property Management</a>
								</li>
							
							<?php } ?>
							<?php if($roles[2] == 3){?> 
								<li class="<?php if($current_link == base_url('messagebox')) { echo 'active1'; } ?>">
									<a href="<?= base_url('messagebox')?>">Message Center</a>
								</li>
							
							<?php } ?>
							<?php if($roles[3] == 4){?>
								<li class="<?php if($current_link == base_url('dashboard/profile')) { echo 'active1'; } ?>">
									<a href="<?= base_url('dashboard/profile')?>">My Account & Profile</a>
								</li>
							
							<?php } ?>
							<?php if($roles[4] == 5){?>
								<li class="<?php if($current_link == base_url('reports')) { echo 'active1'; } ?>">
									<a href="<?= base_url('reports')?>">Reports</a>
								</li>
							
							<?php } ?>
							<?php if($roles[5] == 6){?>
								<li class="<?php if($current_link == base_url('agents')) { echo 'active1'; } ?>">
									<a href="<?= base_url('agents')?>">Agent Staff</a>
								</li>
							
							<?php } ?>
							<?php if($roles[6] == 7){?>
								<li class="<?php if($current_link == base_url('agents/listing_quota')) { echo 'active1'; } ?>">
									<a href="<?= base_url('agents/listing_quota')?>">Listing Quota</a>
								</li>
							<?php } ?>
							<div class="hd hidden-md"></div>
						
						<?php } else { ?>
							
							<li class="<?php if($current_link == base_url('dashboard')) { echo 'active1'; } ?>">
								<a href="<?= base_url('dashboard')?>">Dashboard</a>
							</li>						
							
							<li class="<?php 
							if($current_link == base_url('dashboard/active_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/active_sale_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/active_rent_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/active_wanted_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/active_hot_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/active_superhot_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/edited_sale_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/edited_rent_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/edited_wanted_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/pending_sale_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/pending_rent_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/pending_wanted_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/expired_sale_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/expired_rent_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/expired_wanted_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/deleted_sale_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/deleted_rent_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/deleted_wanted_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/rejected_sale_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/rejected_rent_property_management')) { echo 'active1'; } 
							elseif($current_link == base_url('dashboard/rejected_wanted_property_management')) { echo 'active1'; } 
							?>">
								<a href="<?= base_url('dashboard/active_property_management')?>">Property Management</a>
							</li>
							
							<li class="<?php if($current_link == base_url('messagebox')) { echo 'active1'; } ?>">
								<a href="<?= base_url('messagebox')?>">Message Center</a>
							</li>
							
							<li class="<?php if($current_link == base_url('dashboard/profile')) { echo 'active1'; } ?>">
								<a href="<?= base_url('dashboard/profile')?>">My Account & Profile</a>
							</li>
							
							<li class="<?php if($current_link == base_url('reports')) { echo 'active1'; } ?>">
								<a href="<?= base_url('reports')?>">Reports</a>
							</li>
							
							<li class="<?php if($current_link == base_url('agents')) { echo 'active1'; } ?>">
								<a href="<?= base_url('agents')?>">Agent Staff</a>
							</li>
							
							<li class="<?php if($current_link == base_url('agents/listing_quota')) { echo 'active1'; } ?>">
								<a href="<?= base_url('agents/listing_quota')?>">Listing Quota</a>
							</li>
							
							<li class="<?php if($current_link == base_url('dashboard/countries')) { echo 'active1'; } ?>">
								<a href="<?= base_url('dashboard/countries')?>">Extra</a>
							</li>
							
							<div class="hd hidden-md"></div>
						
						
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
 
</head>

<body>