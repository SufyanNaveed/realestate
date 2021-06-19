<?php include('header.php'); ?>
<style>

.color_line
{
	background: #f1eded; 
	padding: 5px 0px 5px 15px;
}
.line
{
	padding: 5px 0px 5px 15px;
}
#image-zoom-wrapper 
{
    margin: 0 auto;
    height: 500px;
    width: 100%;
    overflow: hidden;
}
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
	
		}

		.zoom img::selection { background-color: transparent; }

		#ex2 img:hover { cursor: url(grab.cur), default; }
</style>


<?php 
	$this->db->from('maps');
	$this->db->where('society_id',$posts['society']);
	$this->db->where('phase_id',$posts['phase']);
	$this->db->or_where('sector_id',$posts['sector']);
	$map = $this->db->get()->row_array();
?>	
<?php if($posts) { ?>

    <div class="container">	
		<div class="contain-wrapp padding-top20" style="padding:20px;">	
			<div class="col-xs-12" >
				<div style="color:#00aced;"><?= $posts['society_name'].','.$posts['phase_name'].','.$posts['sector_name'] ?> <label style="color:#00aced;"> » </label> Property ID: <?= $posts['post_ads_id']; ?></div>
			</div>
			<div class="col-xs-8">
				<div><h4  ><?= $posts['property_title']; ?></h4></div>
			</div>
			<div class="col-xs-4">
				<div><h4 style=" font-size: 20px; color:#00aced;" >Rs <?= number_format($posts['all_inclusive']) ?></h4></div>
			</div>
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<div class="row" >
						<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;padding: 15px;">	
						    <div id="myCarousel" class="carousel slide" data-ride="carousel">
						        <div class="carousel-inner" role="listbox">
						            <?php if($posts['video_url']){?>
							            <div class="item active">
							                <?php $video_id = explode('=',$posts['video_url'])?>
												<iframe id="video_id" style="width:100%; " src="https://www.youtube.com/embed/<?= $video_id[1] ?>?autoplay=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe>
										</div>
					            	<?php } ?>

					            	<?php $images = explode(',',$posts['ads_images']); $count = count($images);  ?>
									<?php for($i=0; $i<$count; $i++){?>
						            <div class="item <?php if($posts['video_url'] == "" && $i == 0){ echo 'active'; }else { } ?>">
						                <img src="<?= base_url('assets/frontend/img/'.$images[$i])?>" >
									</div>
						        <?php } ?>
						        </div>
						        <a class="left carousel-control" style="bottom: 48%;" href="#myCarousel" role="button" data-slide="prev">
						            <span class="fa fa-angle-left" aria-hidden="true"></span>
						            <span class="sr-only">Previous</span>
						        </a>
						        <a class="right carousel-control" style="bottom: 48%;" href="#myCarousel" role="button" data-slide="next">
						            <span class="fa fa-angle-right" aria-hidden="true"></span>
						            <span class="sr-only">Next</span>
						        </a>
						    </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top20" style="padding:17px 25px;"> 
					<div class="row" style="margin-top: -8px;">
						<div class="ros_new" style="background-color: #ffffff00;">
							<p style="background-color: #fff; padding:10px; font-family: Arial; text-align: center;">Contact Agent for more information.</p>
							<div class="row" style="padding: 7px 30px;">
				            	<form method="post" action="<?= base_url('home/email')?>">
									<div class="col-md-12">
										<div class="row" style="margin-bottom: 4px;">
											<div class="col-md-12">
												<input type="text" class="form-control" style="height: 40px;" name="name" placeholder="Name" required="">
											</div>
										</div>
										<div class="row" style="margin-bottom: 4px;">
											<div class="col-md-12">
												<div class="input">
													<input type="email" class="form-control" style="height: 40px;" name="email"  placeholder="Email" required="">
												</div>
											</div>
										</div>	
										<div class="row" style="margin-bottom: 4px;">
											<div class="col-md-12">
												<input id="text" type="text" class="form-control" style="height: 40px;"name="mobile" placeholder="Mobile" required="">
											</div>
										</div>
										<div class="row" style="margin-bottom: 4px;">
											<div class="col-md-12">
												<div class="input">
													<textarea class="form-control" rows="4" name="message" placeholder="Message..."></textarea> 	
												</div>
											</div>
										</div>
										<div class="row" style="margin-bottom: 4px;">
											<div class="col-md-12">
												<div class="input">
													<div class="row">
														<div class="col-xs-3 text-nowrap"><label for="agent">I am a:</label></div>
														<div class="col-xs-3"><input  type="radio" name="am_direct" value="Buyer"><span>Buyer</span></div>
														<div class="col-xs-3"><input type="radio" name="am_direct" value="Agent"><span>Agent</span></div>
														<div class="col-xs-3 "><input type="radio" name="am_direct" value="Other"><span>Other</span></div>
													</div>
												</div>
											</div>
										</div>
										<div class="row" style="padding-top: 10px;">
											<div class="col-md-12">
												<div class="input">
													<div class="row">
														<div class="col-xs-6" >
                                    						<button class="btn btn-picton btn-rectangle btn-success btn-sm" data-toggle="modal" data-target="#myModal">Call <i class="fa fa-phone"></i></button>
                                    					</div>
														<div class="col-xs-6">
															<button class="btn btn-picton btn-rectangle" style="background-color: #00aced; class="btn btn-primary btn-sm" type="submit">Email <i class="fa fa-envelope"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>							    
							</div>
						</div>
					</div>
					
				</div>
			</div>
			

			<div class="details_product" style="padding:20px; border-bottom: 1px solid #e0e2e4; margin-top: 0px;" id="overview">
				<div class="row">
					<div class="col-md-8">
						<div id="pdescription" class="">
							<div style="padding-bottom: 10px;">
								<div style="padding-bottom: 15px;"><h5>Overview</h5></div>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<span class="col-xs-4 color_line">Type</span>
										<span class="col-xs-8 color_line"><?= $posts['property_type'] ?></span>
									</div>
									<div class="col-xs-12 col-md-6">
										<span class="col-xs-4 color_line">Area</span>
										<span class="col-xs-8 color_line"><?= $posts['land_area'] ?></span>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12 col-md-6">
										<span class="col-xs-4 line">Price</span>
										<span class="col-xs-8 line"><?= $posts['all_inclusive'] ?></span>
									</div>
									<div class="col-xs-12 col-md-6">
										<span class="col-xs-4 line">Puspose</span>
										<span class="col-xs-8 line"><?= $posts['purpose'] ?></span>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12 col-md-6">
										<span class="col-xs-4 color_line">Location</span>
										<span class="col-xs-8 color_line"><?= $posts['society_name'].', '.$posts['city_name'] ?></span>
									</div>
									<div class="col-xs-12 col-md-6">
										<span class="col-xs-4 color_line">Bedroom(s)</span>
										<span class="col-xs-8 color_line"><?php if($posts['bedroom']) { echo $posts['bedroom']; }else{ echo '-'; } ?></span>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12 col-md-6">
										<span class="col-xs-4 line">Bathroom(s)</span>
										<span class="col-xs-8 line"><?php if($posts['bathroom']) { echo $posts['bathroom']; }else{ echo '-'; } ?></span>
									</div>
									<div class="col-xs-12 col-md-6">
										<span class="col-xs-4 line">Added</span>
										<span class="col-xs-8 line"><?php $date = explode(' ',$posts['post_ads_created_date']); echo $date[0]; ?></span>
									</div>
								</div>
							</div>
							<hr>
							<h5>Description:</h5><?= $posts['description']; ?>
						</div>
					</div>
					<div class="col-md-4" style="padding:17px 25px; "> 
						<div class="row" style="margin-top: -8px; border: solid #eee;">
							<div class="ros_new" style="background-color: #ffffff00;">
								<h6 style="background-color: #fff; border-bottom: 1px solid #e0e2e4; 
								margin-bottom: 0px; padding:10px; font-family: Arial; text-align: center;">
									<?= $posts['estate_name']?></h6>
								<div class="row" style="padding: 7px 30px;">
					            	<img src="<?= base_url('profile_images/'.$posts['profile_image'])?>" class="alignleft" alt="">
									<span style="margin: 30px 20px 7px 0px;" class="user-profile"><i class="fa fa-user"></i> <?= $posts['username']?></span>
									<a style="margin-left:15px;" href="#" class="btn btn-default">Agent Profile</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section style="padding-bottom: 5px; margin-top: -15px;">
		<div class="container">
		<?php if($posts['property_type'] == 'Homes') { ?>
			<div class="row">
				<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;" id="features">
					<div class="heading"> Property Feature</div>
					<div class="contain-wrapp padding-top20 padding-bot20">	
						<div class="row">
							<div class="innerdiv bggry1">
								<div class="fheading font_s">Main Features</div>
								<ul class="ul_list">
									<?php if($posts['f_built_in_year']){?>
										<li class="l">
											<label class="l label">Built In Year</label>
											<span class="l"><?= $posts['f_built_in_year']; ?></span>
										</li>
									<?php } ?>
										
									<?php if($posts['f_view']){?>
										<li class="l">
											<label class="l label">View</label>
											<span class="l"><?= $posts['f_view']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_parking_space']){?>
										<li class="l">
											<label class="l label">Parking Spaces</label>
											<span class="l"><?= $posts['f_parking_space']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_double_glazed']){?>
										<li class="l">
											<label class="l label">Double Glazed Windows</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_central_air_condition']){?>
										<li class="l">
											<label class="l label">Central Air Conditioning</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_central_heating']){?>
										<li class="l">
											<label class="l label">Central Heating</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_flooring']){?>
										<li class="l">
											<label class="l label">Flooring</label>
											<span class="l"><?= $posts['f_flooring']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_electricity_backup']){?>
										<li class="l">
											<label class="l label">Electricity Backup</label>
											<span class="l"><?= $posts['f_electricity_backup']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_waste_disposal']){?>
										<li class="l">
											<label class="l label">Waste Disposal</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_floors']){?>
										<li class="l">
											<label class="l label">Floors</label>
											<span class="l"><?= $posts['f_floors']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_other_main_features']){?>
										<li class="l">
											<label class="l label">Other Main Features</label>
											<span class="l"><?= $posts['Other Main Features']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_furnished']){?>
										<li class="l">
											<label class="l label">Furnished</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="innerdiv bggry1"><div class="fheading font_s">Rooms</div><ul class="ul_list">
									
									<?php if($posts['f_bedrooms']){?>
										<li class="l">
											<label class="l label">Bedrooms</label>
											<span class="l"><?= $posts['f_bedrooms']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_bathrooms']){?>
										<li class="l">
											<label class="l label">Bathrooms</label>
											<span class="l"><?= $posts['f_bathrooms']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_servant_quarter']){?>
										<li class="l">
											<label class="l label">Servant Quarters</label>
											<span class="l"><?= $posts['f_servant_quarter']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_drwaing_room']){?>
										<li class="l">
											<label class="l label">Drawing Room</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_dining_room']){?>
										<li class="l">
											<label class="l label">Dining Room</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_kitchen']){?>
										<li class="l">
											<label class="l label">Kitchens</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_study_room']){?>
										<li class="l">
											<label class="l label">Study Room</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_prayer_room']){?>
										<li class="l">
											<label class="l label">Prayer Room</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_powder_room']){?>
										<li class="l">
											<label class="l label">Powder Room</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_gym']){?>
										<li class="l">
											<label class="l label">Gym</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_store_rooms']){?>
										<li class="l">
											<label class="l label">Store Rooms</label>
											<span class="l"><?= $posts['f_store_rooms'];?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_steam_rooms']){?>
										<li class="l">
											<label class="l label">Steam Room</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_lounge_sitting_room']){?>
										<li class="l">
											<label class="l label">Lounge Or Sitting Room</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_laundry_room']){?>
										<li class="l">
											<label class="l label">Laundry Room</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_other_room']){?>
										<li class="l">
											<label class="l label">Other Rooms</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="innerdiv bggry1"><div class="fheading font_s">Business and Communication</div>
								<ul class="ul_list">
									<?php if($posts['f_broadband_internet']){?>
										<li class="l">
											<label class="l label">Broadband Internet Access</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_satellite_cable_tv']){?>
										<li class="l">
											<label class="l label">Satellite Or Cable TV Ready</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_intercome']){?>
										<li class="l">
											<label class="l label">Intercom</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_other_business_communication']){?>
										<li class="l">
											<label class="l label">Other Business Communication</label>
											<span class="l"><?= $posts['f_other_business_communication'];?></span>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="innerdiv bggry1"><div class="fheading font_s">Healthcare Recreational</div>
								<ul class="ul_list">
									<?php if($posts['f_lawn_garden']){?>
										<li class="l">
											<label class="l label">Lawn Or Garden</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_swimming_pool']){?>
										<li class="l">
											<label class="l label">Swimming Pool</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_sauna']){?>
										<li class="l">
											<label class="l label">Sauna</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_jacuzzi']){?>
										<li class="l">
											<label class="l label">Jacuzzi</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_other_healthcare_recreation']){?>
										<li class="l">
											<label class="l label">Other Healthcare and Recreation Facilities</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="innerdiv bggry1">
								<div class="fheading font_s">Other Facilities</div>
								<ul class="ul_list">
									<?php if($posts['f_maintenance_staff']){?>
										<li class="l">
											<label class="l label">Maintenance Staff</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['security_staff']){?>
										<li class="l">
											<label class="l label">Security Staff</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['f_facilities_disabled']){?>
										<li class="l">
											<label class="l label">Facilities For Disabled</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['other_facilities']){?>
										<li class="l">
											<label class="l label">Other Facilities</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
				    </div>
				</div>
			</div>
		<?php }elseif($posts['property_type'] == 'Plots') {?>
			<div class="row">
				<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;" id="features">
					<div class="heading"> Plot Feature</div>
					<div class="contain-wrapp padding-top20 padding-bot20">	
						<div class="row">
							<div class="innerdiv bggry1">
								<div class="fheading font_s">Main Features</div>
								<ul class="ul_list">
									<?php if($posts['pf_possesion']){?>
										<li class="l">
											<label class="l label">Possesion</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
										
									<?php if($posts['pf_corner']){?>
										<li class="l">
											<label class="l label">Corner</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_park_facing']){?>
										<li class="l">
											<label class="l label">Park Facing</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_disputed']){?>
										<li class="l">
											<label class="l label">Disputed</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_file']){?>
										<li class="l">
											<label class="l label">File</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_balloted']){?>
										<li class="l">
											<label class="l label">Balloted</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_sewerage']){?>
										<li class="l">
											<label class="l label">Sewerage</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_electricity']){?>
										<li class="l">
											<label class="l label">Electricity</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_water_supply']){?>
										<li class="l">
											<label class="l label">Water Supply</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_sui_gas']){?>
										<li class="l">
											<label class="l label">Sui Gas</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_boundary_wall']){?>
										<li class="l">
											<label class="l label">Boundary Wall</label>
											<span class="l"><span class="l bgc grn_tick"></span>
										</li>
									<?php } ?>
									
									<?php if($posts['pf_other_plot_feature']){?>
										<li class="l">
											<label class="l label">Other Plot Features</label>
											<span class="l"><?= $posts['pf_other_plot_feature']; ?></span>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="innerdiv bggry1"><div class="fheading font_s">Nearby Locations and Other Facilities</div>
								<ul class="ul_list">
									<?php if($posts['nearby_school']){?>
										<li class="l">
											<label class="l label">Nearby Schools</label>
											<span class="l"><?= $posts['nearby_school']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['nearby_hospital']){?>
										<li class="l">
											<label class="l label">Nearby Hospitals</label>
											<span class="l"><?= $posts['nearby_hospital']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['nearby_shopping_mall']){?>
										<li class="l">
											<label class="l label">Nearby Shopping Malls</label>
											<span class="l"><?= $posts['nearby_shopping_mall']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['nearby_restaurants']){?>
										<li class="l">
											<label class="l label">Nearby Restaurants</label>
											<span class="l"><?= $posts['nearby_restaurants']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['distance_airport']){?>
										<li class="l">
											<label class="l label">Distance From Airport (kms)</label>
											<span class="l"><?= $posts['distance_airport']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['nearby_public_transport']){?>
										<li class="l">
											<label class="l label">Nearby Public Transport Service</label>
											<span class="l"><?= $posts['nearby_public_transport']; ?></span>
										</li>
									<?php } ?>
									
									<?php if($posts['other_nearby_places']){?>
										<li class="l">
											<label class="l label">Other Nearby Places</label>
											<span class="l"><?= $posts['other_nearby_places']; ?></span>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="innerdiv bggry1">
								<div class="fheading font_s">Other Facilities</div>
								<ul class="ul_list">
									<?php if($posts['f_maintenance_staff']){?>
										<li class="l">
											<label class="l label">Maintenance Staff</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['security_staff']){?>
										<li class="l">
											<label class="l label">Security Staff</label>
											<span class="l"><span class="l bgc grn_tick"></span></span>
										</li>
									<?php } ?>
									
									<?php if($posts['other_facilities']){?>
										<li class="l">
											<label class="l label">Other Facilities</label>
											<span class="l"><?= $posts['other_facilities']; ?></span>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
				    </div>
				</div>
			</div>	
		<?php }?>	
			

			<div class="row">
				<div class="detail-product2" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;" id="g-map">
					<div class="heading">  
						<ul class="nav nav-tabs" role="tablist">
							<li class="active">
								<a href="#tab2" data-toggle="tab"><span class="bgc pv_sm_icn l"></span>Google Map</a>
							</li>
							<li >
								<a href="#tab3" data-toggle="tab"><span class="bgc pv_sm_icn l"></span> Society Map</a>
							</li>
						</ul>
					</div>

					<div class="contain-wrapp padding-top20 padding-bot20">	
						<div class="row">
							<!-- Start Tabs -->
							<div class="col-md-12">
								<div class="custom-tabs tab-lg">
									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane fade in active" id="tab2">
											<!-- Start google map -->
											<div class="map-wrapper">
												<div id="map"></div>
											</div>	
										</div>
										<div class="tab-pane fade" id="tab3">
											<link href="<?= base_url('assets/frontend/css/zoomify.css')?>" rel="stylesheet" type="text/css" media="all"/>


						                    <div id="image-zoom-wrappersed">
					                        	<span class='zoom' id='ex1'>
													<img src='<?= base_url('maps/'.$map['map_image'])?>' width='100%' height='auto' alt='Daisy on the Ohoopee'/>
													<p>Hover</p>
												</span>
					                      	</div>
					                      		

					                      	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="detail-product2" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;" id="trends">
					<div class="heading">  
						<ul class="nav nav-tabs" role="tablist">
							<li>
								<h5>Search Trends</h5>
							</li>
							<li  class="active">
								<a href="#jan" data-toggle="tab">Jan 2018</a>
							</li>
							<li>
								<a href="#feb" data-toggle="tab">Feb 2018</a>
							</li>
							<li>
								<a href="#mar" data-toggle="tab">Mar 2018</a>
							</li>
							<li>
								<a href="#apr" data-toggle="tab">Apr 2018</a>
							</li>
							<li>
								<a href="#may" data-toggle="tab">May 2018</a>
							</li>
							<li>
								<a href="#jun" data-toggle="tab">Jun 2018</a>
							</li>
						</ul>
					</div>

					<div class="contain-wrapp padding-top20 padding-bot20">	
						<div class="row">
							<!-- Start Tabs -->
							<div class="col-md-12">
								<div class="custom-tabs tab-lg">
									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane fade in active" id="jan">
											<div class="table-responsive">          
												<table class="table">
													<thead>
														<tr>
															<th>Rank</th>
															<th>Locality</th>
															<th>Popular Index (PI)</th>
															<th>Charts</th>
															<th>Performance</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="100" style="width: 100%;">
																		<span class="value-progress">100</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="77" style="width: 77%;">
																		<span class="value-progress">77</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal2">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:7px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:5px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="up">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>1</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="new_entry">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-2</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-1</span></span>
																</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="feb">
											<div class="table-responsive">          
												<table class="table">
													<thead>
														<tr>
															<th>Rank</th>
															<th>Locality</th>
															<th>Popular Index (PI)</th>
															<th>Charts</th>
															<th>Performance</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="100" style="width: 100%;">
																		<span class="value-progress">100</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="77" style="width: 77%;">
																		<span class="value-progress">77</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal2">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:7px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:5px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="up">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>1</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="new_entry">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-2</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-1</span></span>
																</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="mar">
											<div class="table-responsive">          
												<table class="table">
													<thead>
														<tr>
															<th>Rank</th>
															<th>Locality</th>
															<th>Popular Index (PI)</th>
															<th>Charts</th>
															<th>Performance</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="100" style="width: 100%;">
																		<span class="value-progress">100</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="77" style="width: 77%;">
																		<span class="value-progress">77</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal2">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:7px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:5px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="up">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>1</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="new_entry">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-2</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-1</span></span>
																</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="apr">
											<div class="table-responsive">          
												<table class="table">
													<thead>
														<tr>
															<th>Rank</th>
															<th>Locality</th>
															<th>Popular Index (PI)</th>
															<th>Charts</th>
															<th>Performance</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="100" style="width: 100%;">
																		<span class="value-progress">100</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="77" style="width: 77%;">
																		<span class="value-progress">77</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal2">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:7px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:5px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="up">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>1</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="new_entry">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-2</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-1</span></span>
																</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="may">
											<div class="table-responsive">          
												<table class="table">
													<thead>
														<tr>
															<th>Rank</th>
															<th>Locality</th>
															<th>Popular Index (PI)</th>
															<th>Charts</th>
															<th>Performance</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="100" style="width: 100%;">
																		<span class="value-progress">100</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="77" style="width: 77%;">
																		<span class="value-progress">77</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal2">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:7px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:5px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="up">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>1</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="new_entry">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-2</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-1</span></span>
																</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="jun">
											<div class="table-responsive">          
												<table class="table">
													<thead>
														<tr>
															<th>Rank</th>
															<th>Locality</th>
															<th>Popular Index (PI)</th>
															<th>Charts</th>
															<th>Performance</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="100" style="width: 100%;">
																		<span class="value-progress">100</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																			<li style="height:10px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="77" style="width: 77%;">
																		<span class="value-progress">77</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal2">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:7px;margin-top:5px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:4px;"></li>
																			<li style="height:7px;margin-top:4px;"></li>
																			<li style="height:8px;margin-top:5px;"></li>
																			<li style="height:6px;margin-top:6px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="no_change">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="up">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>1</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="new_entry">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>No Change</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>	
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-2</span></span>
																</span>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>Gulberg Greens</td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" data-value-progress="1" style="width: 1%;">
																		<span class="value-progress">1</span>
																	</div>
											                    </div>
															</td>
															<td>
																<a href="#" data-toggle="modal" data-target="#chartModal10">
																	<div class="sml_crt">
																		<ul>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																			<li style="height:0px;margin-top:10px;"></li>
																		</ul>
																	</div>
																</a> 												
															</td>
															<td>
																<span>
						   											 <span class="down">&nbsp;</span>&nbsp;&nbsp;<span class="pos_no">&nbsp;<span>-1</span></span>
																</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>    
								<!-- End Tabs -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;" id="indexes">
					<div class="heading"> Islamabad, 5 Marla Plot Price Index</div>
					<div class="contain-wrapp padding-top20 padding-bot20">	
						<div class="detail-page1">
							<div class="row">
								<div class="detail-page1" >
									<!-- Start Tabs -->
									<div class="col-md-12">
										<div class="custom-tabs tab-lg">
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane fade in active" id="index-tab">
													<div class="col-xs-12">
														<div class="point_index l">
															<span class="current_head l">PKR 322.76</span>
															<span class="downward_txt">
																<span class="downward"></span>1.4 
																(0.43 %)
															</span>
														</div>
													</div>
													<div class="col-xs-12">
														<div class="point_description">
															<!-- First Column -->
															<div class="desc_col">
																<div class="col-xs-12">
																	<label>Range:</label>
																	<span>100.00 - 322.76</span>
																</div>
																<div class="col-xs-12">
																	<label>52 weeks:</label>
																	<span>267.47 - 322.76</span>
																</div>
																<div class="col-xs-12">
																	<label>This year:</label>
																	<!--<span>267.35 - 324.15</span>-->
																	<span>306.75 - 322.76</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xs-12">
														<div class="point_description">
															<!-- Second Column -->
															<div class="desc_col">
																<div class="col-xs-12">
																	<label>Start date:</label>
																	<span>Jan 2011</span>
																</div>
																<div class="col-xs-12">
																	<label>End date:</label>
																	<span>Jun 2018</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="price1">
													<div class="col-md-4">
														<div class="price_index l">
															<span class="last_val l">
																<span class="current_head">PKR 4,670<span>/ft<sup>2</sup></span> </span>
															</span>
															<span class="downward_txt">
																<span class="downward"></span>
																<span class="sm_pc">PKR</span> 
																20 (0.43 %)
															</span>
														</div>
													</div>
													<div class="col-md-3">
														<div class="point_description">
															<!-- First Column -->
															<div class="desc_col">
																<div>
																	<label>Range:</label>
																	<span>100.00 - 322.76</span>
																</div>
																<div>
																	<label>52 weeks:</label>
																	<span>267.47 - 322.76</span>
																</div>
																<div>
																	<label>This year:</label>
																	<!--<span>267.35 - 324.15</span>-->
																	<span>306.75 - 322.76</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="point_description">
															<!-- Second Column -->
															<div class="desc_col">
																<div>
																	<label>Start date:</label>
																	<span>Jan 2011</span>
																</div>
																<div>
																	<label>End date:</label>
																	<span>Jun 2018</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="price">
													<div class="col-md-4">
														<div class="price_index l" style="margin-right:0">
															<span class="last_val l">
																<span class="current_head">PKR 5,253,750 </span>
															</span>
															<span class="downward_txt">
																<span class="downward"></span>
																<span class="sm_pc">PKR</span> 
																22,500	(0.43 %)
															</span>
														</div>
													</div>
													<div class="col-md-3">
														<div class="point_description">
															<!-- First Column -->
															<div class="desc_col">
																<div>
																	<label>Range:</label>
																	<span>100.00 - 322.76</span>
																</div>
																<div>
																	<label>52 weeks:</label>
																	<span>267.47 - 322.76</span>
																</div>
																<div>
																	<label>This year:</label>
																	<!--<span>267.35 - 324.15</span>-->
																	<span>306.75 - 322.76</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="point_description">
															<!-- Second Column -->
															<div class="desc_col">
																<div>
																	<label>Start date:</label>
																	<span>Jan 2011</span>
																</div>
																<div>
																	<label>End date:</label>
																	<span>Jun 2018</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active">
										<a href="#index-tab" data-toggle="tab">Index</a>
									</li>
									<li>
										<a href="#price1" data-toggle="tab" href="">Price/<span class="area_unit">ft<sup>2</sup></span></a>
									</li>
									<li>
										<a href="#price" data-toggle="tab">Price</a>
									</li>
								</ul>
								<div class="row">
									<div class="detail-page1">
										<!-- Start Tabs -->
										<div class="col-md-12">
											<div class="custom-tabs tab-lg">
												<!-- Tab panes -->
												<div class="tab-content">
													<div class="tab-pane fade in active" id="index-tab">
														<div id="index" style="height: 300px; width: 100%;"></div>
													</div>
													<div class="tab-pane fade" id="price1">
														<div id="index2" style="height: 300px; width: 100%;"></div>
													</div>
													<div class="tab-pane fade" id="price">
														<div id="index2" style="height: 300px; width: 100%;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- <div class="col-md-6">
					<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb; margin:10px 0px">
						<div class="heading" style="background-color: #00abec;    color: #ffffff;"><i class="fa fa-list"></i> Contact Us</div>
						<div class="contain-wrapp padding-top20 padding-bot20">	
							<div class="detail-page1">
								<form method="post" action="<?= base_url('home/email')?>">
									<?php if($this->session->flashdata('success')){?>
											<div class="alert alert-success">      
												<?php echo $this->session->flashdata('success')?>
											</div>
									<?php } ?>
						
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label for="name">Your Name: <span class="red">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" name="name">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label for="email">Email: <span class="red">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="email" class="form-control" name="email">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label for="mobile">Mobile: <span class="red">*</span></label>	
											</div>
											<div class="col-md-9 input-group">	
												<span class="input-group-addon" style="border-radius: 7px 0px 0px 7px;"><img style="width:29px; padding-right: 5px;" src="<?= base_url('assets/frontend/images/pakistan_flag.jpg')?>"> +92</span>
												<input id="text" type="text" class="form-control" name="mobile">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label for="phone">Phone: <span class="red">*</span></label>	
											</div>
											<div class="col-md-9 input-group">	
												<span class="input-group-addon" style="border-radius: 7px 0px 0px 7px;"><img style="width:29px; padding-right: 5px;" src="<?= base_url('assets/frontend/images/pakistan_flag.jpg')?>"> +92</span>
												<input id="text" type="text" class="form-control" name="phone">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label for="message">Message: <span class="red">*</span></label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" rows="4" name="message"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label for="agent">I am direct :</label>
											</div>
											<div class="col-md-3">
												<input type="radio" name="am_direct" value="Buyer"> Direct Buyer
											</div>
											<div class="col-md-3">
												<input type="radio" name="am_direct" value="Agent"> Agent
											</div>
											<div class="col-md-3">
												<input type="radio" name="am_direct" value="Other"> Other
											</div>
										</div>
									</div>
									<input type="hidden" name="post_id" value="<?= $posts['post_ads_id']?>">
									<div style="text-align: center">
										<button class="btn btn-picton btn-rectangle" style="background-color: #00aced; class="btn btn-primary btn-sm" type="submit">Send Email <i class="fa fa-envelope"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> -->
				<!--<div class="col-md-6">
					<div class="detail-page1">
						<div class="row">
							<div class="email_alert_container">
								<input type="text" name="email_alert_input" id="email_alert_input" value="" style="width:150px;" class="rfield l " placeholder="Enter your email address...">						
								<span onclick="" class="r" id="email_alert_button"></span>
							</div>
						</div>
						<div class="row">
							<div class="ros bggry2 clr useful_link">
								<div class="h">Useful links</div>
								<a class="quick_box_links" href="#">  Property for sale  in  Islamabad</a>
								<a class="quick_box_links" href="#">  Property for sale  in  Gulberg</a>
								<a class="quick_box_links" href="#">  Property for sale  in  Gulberg Greens</a>
								<a class="quick_box_links" href="#">   Flats &amp; Apartments for sale  in  Islamabad</a>
								<a class="quick_box_links" href="#">   Flats &amp; Apartments for sale  in  Gulberg</a>
								<a class="quick_box_links" href="#">   Flats &amp; Apartments for sale  in  Gulberg Greens</a>
								<a class="quick_box_links" href="#">  2 Bed  Flats &amp; Apartments for sale  in  Islamabad</a>
								<a class="quick_box_links" href="#">  2 Bed  Flats &amp; Apartments for sale  in  Gulberg</a>
								<a class="quick_box_links" href="#">  2 Bed  Flats &amp; Apartments for sale  in  Gulberg Greens</a>					
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</section>
<?php }else{?>
	<div class="container padding-top40 padding-bot40">
		<div style="font-size:50px; font-family:all; color:#00aced; text-align: center;">Record Not Found.</div>
	</div>
<?php } ?>

			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    	<!-- Modal content-->
			      	<div class="modal-content">
			        	<!-- <div class="modal-header">
			          		<button type="button" class="close" data-dismiss="modal">&times;</button>
			          		<h4 class="modal-title">Contact Us</h4>
			        	</div> -->
			        	<div class="modal-body" style="text-align: center;">
			          		<h5>Contact Us</h5><hr>
			          		<p><span><strong>Mobile: </strong></span> <?= $posts['phone']; ?></p><hr>
			          		<p><span><strong>Phone: </strong></span> <?= $posts['cell']; ?></p><hr>
			          		<p><span><strong>Fax: </strong></span> <?= $posts['fax']; ?></p><hr>
			          		<p><span><strong>Agent Name: </strong></span> <?= $posts['username']; ?></p><hr>
			          		<p style="margin: 0px;">Please Quote Property reference</p>
			          		<p style="margin: 0px;"><strong>Habro - ID<?= $posts['post_ads_id']?></strong></p>
			          		<p style="margin: 0px;">When Calling us.</p>
			       		</div>
				        <div class="modal-footer">
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
			      	</div>
			    </div>
		  	</div><script>
												$(document).ready(function(){
													$('#ex1').zoom();
												});
											</script>
<?php include_once('footer.php')?>
											

<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: new google.maps.LatLng(<?= $posts['lat_val']?>,<?= $posts['long_val']?>),
          mapTypeId: 'roadmap'
        });
        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          info: {
            icon: iconBase + 'parking_lot_maps.png'
          }
        };
		
		var features = [
			{
				position: new google.maps.LatLng(<?= $posts['lat_val']?>,<?= $posts['long_val']?>),
				type: 'info'
			  },
		];
		
		
		features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
           // icon: icons[feature.type].icon,
            map: map
          });
        });
		
      }
    </script>

    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARA9cUr2g0JA0eXIjNE2IQmdwP5uj-xFs&libraries=places&callback=initMap"-->
    <!--    async defer></script>-->

