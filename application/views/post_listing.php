<?php include_once('includes/header.php'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<?php if($this->session->userdata('user_role') == 0){?>
<?php include_once('includes/property_managment_sidebar.php'); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
		
		<!-- styles -->
		<link href="<?= base_url()?>assets/upload_images/css/jquery.fileuploader.min.css" media="all" rel="stylesheet">
		
		<!-- js -->
		
		<script src="<?= base_url()?>assets/upload_images/js/jquery.fileuploader.min.js" type="text/javascript"></script>
		<script src="<?= base_url()?>assets/upload_images/js/custom.js" type="text/javascript"></script>		
<style>
	  #map {
		height: 35%;
	  }
	  #map {
		width: 440px;
	  } 
	  #controls {
		position: absolute;
		left: 300px;
		width: 140px;
		top: 0px;
		z-index: 5;
		background-color: #fff; 
	  }
	  #autocomplete {
		width: 100%;
	  }
		input[type="number"]::-webkit-outer-spin-button,
		input[type="number"]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	  }
		input[type="number"] {
		-moz-appearance: textfield;
	  }
	  input[type="time"]::-webkit-outer-spin-button,
		input[type="time"]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	  }
		input[type="time"] {
		-moz-appearance: textfield;
	  }
		input[type="date"]::-webkit-outer-spin-button,
		input[type="date"]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	  }
		input[type="date"] {
		-moz-appearance: textfield;
	  }
	  
  	.cke_1 .cke_top {
    background-color: #ccc !important;
    border-bottom-color: #fff !important;
}
.cke_1 .cke_bottom {
    background-color: #ccc !important;
    border-top-color: #fff !important;
}
	input[type=file]{
      display: inline;
    }
    #image_preview{
      border: 1px solid black;
      padding: 10px;
    }
    #image_preview img{
      width: 200px;
      padding: 5px;
    }
</style>

		<div class="col-lg-9 sidediv">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/property_management')?>">Property mangament</a></li>
				<li>Post listing</li>				
			</ol>
			
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
							
			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('dashboard/insert_post_listing')?>">
				<div class="panel panel-default side-form">
					<div class="panel-heading">PROPERTY TYPE AND LOCATION</div>
					<div class="panel-body">
							<div class="form-group">
								<label class="control-label col-sm-2">Purpose: *</label>
								<div class="col-sm-6">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="sale" value="Sale" name="purpose[]"> For Sale
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="rent" value="Rent" name="purpose[]"> Rent
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="wanted"  value="Wanted" name="purpose[]"> Wanted
										</button>
									</div>
								</div>
							</div>
							
							<div class="form-group" style="display:none" id="wanted_for">
								<label class="control-label col-sm-2">Wanted for: *</label>
								<div class="col-sm-6">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="buy"  value="Buy" name="wanted_for[]"> Buy
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="rent"  value="Rent" name="wanted_for[]"> Rent
										</button>
									</div>
								</div>
							</div>
							  
							<div class="form-group">
								<label class="control-label col-sm-2">Property Type: *</label>
								<div class="col-sm-6">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="homes"  value="Homes" name="property_type[]"> Homes
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="plots"  value="Plots" name="property_type[]"> Plots
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="commercial"  value="Commercial" name="property_type[]"> Commercial
										</button>
									</div>
								</div>
							</div>
							
							<div class="form-group" style="display:none" id="house"> 
								<label class="control-label col-sm-2"></label>
								<div class="col-sm-6">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="houses"  value="House" name="frst_option[]"> House
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="flat"  value="Flat" name="frst_option[]"> Flat
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="upper_portion"  value="Upper Portion" name="frst_option[]"> Upper Portion
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="lower_portion"  value="Lower Portion" name="frst_option[]"> Lower Portion
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="farm_house"  value="Farm House" name="frst_option[]"> Farm House
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="room"  value="Room" name="frst_option[]"> Room
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="penthouse"  value="Penthouse" name="frst_option[]"> Penthouse
										</button>
										
									</div>
								</div>
							</div>
							
							<div class="form-group" style="display:none" id="plot">
								<label class="control-label col-sm-2"></label>
								<div class="col-sm-8">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="residential_plot"  value="Residential Plot" name="scnd_option[]"> Residential Plot
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="commercial_plot"  value="Commercial Plot" name="scnd_option[]"> Commercial Plot
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="agricultural_land"  value="Agricultural Land" name="scnd_option[]"> Agricultural Land
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="industrial_land"  value="Industrial Land" name="scnd_option[]"> Industrial Land
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="plot_file"  value="Plot File" name="scnd_option[]"> Plot File
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="plot_form"  value="Plot Form" name="scnd_option[]"> Plot Form
										</button>
										
									</div>
								</div>
							</div>
							
							<div class="form-group" style="display:none" id="commercials"> 
								<label class="control-label col-sm-2"></label>
								<div class="col-sm-8">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="office"  value="Office" name="thrd_option[]">Office
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="shop"  value="Shop" name="thrd_option[]"> Shop
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="ware_house"  value="Ware House" name="thrd_option[]"> Ware House
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="factory"  value="Factory" name="thrd_option[]"> Factory
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="building"  value="Building" name="thrd_option[]"> Building
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="other"  value="Other" name="thrd_option[]"> Other
											</button>
										
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">City: *</label>
								<div class="col-sm-4">
									<select class="form-control" name="city" id="city_id" style="background-color:white;">
										<option>Select City</option>
										<?php foreach($city as $row){?>
											<option value="<?= $row['city_id']?>"><?= $row['city_name']?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							
							<input type="hidden" id="lat" name="lat_val">
							<input type="hidden" id="long" name="long_val">
							
							<div class="form-group">
								<!-- <div class="col-sm-4">
									<input type="text" class="form-control height" id="pac-input" name="location" placeholder="Then enter location here ...">
								</div> -->
								
								<div id="society_list" style="display:none;">
									<label class="control-label col-sm-2">Society</label>
									<div class="col-sm-4">
										<select class="form-control height" id="society" name="frst_location" style="background-color:white;">
											
										</select>
									</div>							  
								</div>							  
							</div>
							
							<div class="form-group" id="phase_list" style="display:none;">
								<label class="control-label col-sm-2">Phase</label>
								<div class="col-sm-4">
									<select class="form-control height" id="phase" name="scnd_location" style="background-color:white;">
										
									</select>
								</div>
							</div>
						  
							<div class="form-group" id="sector_list" style="display:none;">
								<label class="control-label col-sm-2">Sector</label>
								<div class="col-sm-4">
									<select class="form-control height" id="sector" name="thrd_location" style="background-color:white;">
										
									</select>
								</div>
							</div><br>
						  
							<!--<div class="form-group">
								<label class="control-label col-sm-2">Selected location</label>
								<div class="col-sm-4">
									<span>KARACHI??ABC</span>						  
								</div>
							</div>-->
							
							<div class="form-group">
								<label class="control-label col-sm-2">Map</label>
								<div class="col-sm-4">
									<div id="map" style="width:238;height:183px"></div>						  
								</div>
							</div>
							
						<!--</form>  -->
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="sidediv">
					<div class="panel panel-default secondside-form">
						<div class="panel-heading">PROPERTY DETAILS</div>
						
						<div class="panel-body">
							<div class="form-group">
								<label class="control-label col-sm-3">Property Title: *</label>
								<div class="col-sm-6">
									<input type="text" name="property_title" class="form-control height" required>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3">Description: *</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" required rows="5" id="comment"></textarea>
								</div>
							</div>
							
							<div class="form-group" id="inclusive">
								<label class="control-label col-sm-3">All inclusive(PKR): *</label>
								<div class="col-sm-4">
									<input type="text" name="all_inclusive" id="amount1" class="form-control height numbers">
									<br>
									<input type="text" class="form-control height" id="amount-rupees" readonly="">
								</div>
							</div>
							
							<div class="form-group">				   
								<label class="control-label col-sm-3">Land Area: *</label>
								<div class="col-md-8">
									<div class="form-group row">											
										<div class="col-md-4">
											<input type="text" name="land_area" class="form-control height" id="inputKey" placeholder="Land Area">
										</div>
										<div class="col-md-4">
											<select class="form-control" name="units" id="units" style="background-color:white;">
												<option value="">Select Units</option>
												<option value="Sqft">Sqft</option>
												<option value="Sq.Yd">Sq. Yd</option>
												<option value="Sq.M">Sq. M</option>
												<option value="Marla">Marla</option>
												<option value="Kanal">Kanal</option>
											</select>
										</div>										   
									</div>
								</div>							   
							</div>
							
							<div class="form-group" id="bedrooms" style="display:none">
								<label class="control-label col-sm-3">Bedrooms</label>
								<div class="col-sm-4">
									<select class="form-control" style="background-color:white;" name="bedroom" id="sel1">
										<option value="">Please select</option>								  
										<option value="Studio">Studio</option>								  
										<option value="1">1</option>								  
										<option value="2">2</option>								  
										<option value="3">3</option>								  
										<option value="4">4</option>								  
										<option value="5">5</option>								  
										<option value="6">6</option>								  
										<option value="7">7</option>								  
										<option value="8">8</option>								  
										<option value="9">9</option>								  
										<option value="10">10</option>								  
										<option value="10+">10+</option>								  
									</select> 
								</div>
							</div>
							
							<div class="form-group" id="bathrooms" style="display:none">
								<label class="control-label col-sm-3">Bathrooms</label>
								<div class="col-sm-4">
									<select class="form-control" style="background-color:white;" name="bathroom" id="sel1">
										<option value="">Please select</option>
										<option value="1">1</option>								  
										<option value="2">2</option>								  
										<option value="3">3</option>								  
										<option value="4">4</option>								  
										<option value="5">5</option>								  
										<option value="6">6</option>								  
										<option value="7">7</option>								  
										<option value="8">8</option>								  
										<option value="9">9</option>								  
										<option value="10">10</option>										
									</select> 
								</div>
							</div>
			   
							<div class="form-group" id="features_plot" style="display:none">
								<label class="control-label col-sm-3">Features</label>
								<div class="col-sm-4">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Add features</button>
								</div>
							</div>
			   
							<div class="form-group" id="features" style="display:none">
								<label class="control-label col-sm-3">Features</label>
								<div class="col-sm-4">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add features</button>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3"></label>
								<div class="col-sm-4">
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h6 class="modal-title">Property features</h6>
												</div>
												
												<div class="modal-body">				  
													
													<div class="form-group">
														<label class="control-label col-sm-5"><h5>Main features</h5></label>
														<div class="col-sm-1"></div>
														<label class="control-label col-sm-3"><h5>Rooms</h5></label>
														<div class="col-sm-3"></div>
													</div>
					
													<div class="form-group">
														<label class="control-label col-sm-3">Built in Year</label>
														<div class="col-sm-3">
															<input type="text" name="f_built_in_year" class="form-control">
														</div>
														<label class="control-label col-sm-3">Bedrooms</label>
														<div class="col-sm-3">
															<input type="text" name="f_bedrooms" class="form-control">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">View</label>
														<div class="col-sm-3">
															<input type="text" name="f_view" class="form-control">
														</div>
														<label class="control-label col-sm-3">Bathrooms</label>
														<div class="col-sm-3">
															<input type="text" name="f_bathrooms" class="form-control">
														</div>
													</div>	
					
													<div class="form-group">
														<label class="control-label col-sm-3">Parking Space</label>
														<div class="col-sm-3">
															<input type="text" name="f_parking_space" class="form-control">
														</div>
														<label class="control-label col-sm-3">Servant Quarters</label>
														<div class="col-sm-3">
															<input type="text" name="f_servant_quarter" class="form-control">
														</div>
													</div>	
													
													<div class="form-group">
														<label class="control-label col-sm-3">Double Glazed Windows</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_double_glazed" value="Double glazed windows">
														</div>
														<label class="control-label col-sm-3">Drawing Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_drwaing_room" value="Drawing Room">
														</div>
													</div>	
													
													<div class="form-group">
														<label class="control-label col-sm-3">Central Air Conditioning</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_central_air_condition" value="Central Air Conditioning">
														</div>
														<label class="control-label col-sm-3">Dining Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_dining_room" value="Dining Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Central Heating</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_central_heating" value="Central Heating">
														</div>
														<label class="control-label col-sm-3">Kitchens</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_kitchen" value="Kitchens">
														</div>
													</div>

													
													<div class="form-group">
														<label class="control-label col-sm-3">Flooring</label>
														<div class="col-sm-3">
															<select class="form-control" style="background-color:white;" name="f_flooring" id="sel1">
																<option value="">Please select</option>														  
																<option value="Tiles">Tiles</option>														  
																<option value="Marble">Marble</option>														  
																<option value="Wooden">Wooden</option>														  
																<option value="Chip">Chip</option>														  
																<option value="Cement">Cement</option>														  
																<option value="Other">Other</option>														  
															</select> 
														</div>
														<label class="control-label col-sm-3">Study room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_study_room" value="Study Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Electricity Backup</label>
														<div class="col-sm-3">
															<select class="form-control" style="background-color:white;" name="f_electricity_backup" value="Electricity Backup" id="sel1">
																<option Value="">Please select</option>														  
																<option Value="None">None</option>														  
																<option Value="Generator">Generator</option>														  
																<option Value="UPS">UPS</option>														  
																<option Value="Solar">Solar</option>														  
																<option Value="Other">Other</option>														  
															</select> 
														</div>
														<label class="control-label col-sm-3">Prayer Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_prayer_room" value="Prayer Room">
														</div>
													</div> 
													
													<div class="form-group">
														<label class="control-label col-sm-3">Waste Disposal</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_waste_disposal" value="Waste Disposal">
														</div>
														<label class="control-label col-sm-3">Powder Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_powder_room" value="Powder Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Floors</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_floors">
														</div>
														<label class="control-label col-sm-3">Gym</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_gym" value="Gym">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Other Main Features</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_other_main_features">
														</div>
														<label class="control-label col-sm-3">Store Rooms</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_store_rooms">
														</div>
													</div>
			  
													<div class="form-group">
														<label class="control-label col-sm-3">Furnished</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_furnished" value="Furnished">
														</div>
														<label class="control-label col-sm-3">Steam Rooms</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_steam_rooms" value="Steam Rooms">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-3">Lounge or Sitting Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_lounge_sitting_room" value="Lounge or Sitting Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-3">Laundry Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_laundry_room" value="Laundry Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-3">Other Rooms</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_other_room" value="Other Room">
														</div>
													</div>
			  
													<div class="form-group">
														<label class="control-label col-sm-5"><h5>Business and communication</h5></label>
														<div class="col-sm-1">
														
														</div>
														<label class="control-label col-sm-5"><h5>Healthcare Recreational</h5></label>
														<div class="col-sm-1">
													 
														</div>
													</div>
														
													<div class="form-group">
														<label class="control-label col-sm-3">Broadband Internet Access</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_broadband_internet" value="Broadband Internet Access">
														</div>
														<label class="control-label col-sm-3">Lawn or Garden</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_lawn_garden" value="Lawn or Garden">
														</div>
													</div>
														
													<div class="form-group">
														<label class="control-label col-sm-3">Satellite or Cable TV Ready</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_satellite_cable_tv" value="Satellite or Cable TV Ready">
														</div>
														<label class="control-label col-sm-3">Swimming Pool</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_swimming_pool" value="Swimming Pool">
														</div>
													</div>
			  
													<div class="form-group">
														<label class="control-label col-sm-3">Intercome</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_intercome" value="Intercome">
														</div>
														<label class="control-label col-sm-3">Sauna</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_sauna" value="Sauna">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Other business and communication Facilities</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_other_business_communication">
														</div>
														<label class="control-label col-sm-3">Jacuzzi</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_jacuzzi" value="Jacuzzi">
														</div>
													</div>
														
													<div class="form-group">
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-3">Other Healthcare and Recreation Facilities</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_other_healthcare_recreation" value="Other Healthcare and Recreation Facilities">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-4"><h5>Nearby location and other facilities</h5></label>
														<div class="col-sm-1">
														
														</div>
														<label class="control-label col-sm-3"><h5>Other facilities</h5></label>
														<div class="col-sm-1">
													 
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Schools</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_nearby_school" >
														</div>
														<label class="control-label col-sm-3">Maintenance Staff</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_maintenance_staff" value="Maintenance Staff">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Hospitals</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_nearby_hospital">
														</div>
														<label class="control-label col-sm-3">Security Staff</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_security_staff" value="Security Staff">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Shopping Malls</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_nearby_shopping_mall">
														</div>
														<label class="control-label col-sm-3">Facilities for Disabled</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_facilities_disabled" value="Facilities for Disabled">
														</div>
													</div> 
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Restaurants</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_nearby_restaurants">
														</div>
														<label class="control-label col-sm-3">Other facilities</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_other_facilities">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Distance From Airport(kms)</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_distance_airport">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
													  
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Public Transport Service</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_public_transport">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
													  
														</div>
													</div>
			  
													<div class="form-group">
														<label class="control-label col-sm-3">Other Nearby Places</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_other_nearby_places">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
												  
														</div>
													</div>
												</div>
												
												<div class="modal-footer">
													<button type="button" class="btn btn-info" data-dismiss="modal">Save and continue</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3"></label>
								<div class="col-sm-4">
									<div class="modal fade" id="myModal1" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h6 class="modal-title">Property features</h6>
												</div>
												
												<div class="modal-body">

													<div class="form-group">
														<label class="control-label col-sm-6"><h5>Plot Features</h5></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-6"><h5>Nearby Locations and Other Facilities</h5></label>
														<div class="col-sm-2">
													 
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Possesion</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_possesion" value="Possesion">
														</div>
														<label class="control-label col-sm-3">Nearby Schools</label>
														<div class="col-sm-3">
															<input type="text" name="pf_nearby_school" class="form-control">
														</div>
													</div>
															
													<div class="form-group">
														<label class="control-label col-sm-3">Corner</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_corner" value="Corner">
														</div>
														<label class="control-label col-sm-3">Nearby Hospitals</label>
														<div class="col-sm-3">
															<input type="text" name="pf_nearby_hospital" class="form-control">
														</div>
													</div>	
															
													<div class="form-group">
														<label class="control-label col-sm-3">Park Facing</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_park_facing" value="Park Facing"> 
														</div>
														<label class="control-label col-sm-3">Nearby Shopping Malls</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_nearby_shopping_mall">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Disputed</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_disputed" value="Disputed">
														</div>
														<label class="control-label col-sm-3">Nearby Restaurants</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_nearby_restaurants">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">File</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_file" value="File">
														</div>
														<label class="control-label col-sm-3">Distance From Airport (kms)</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_distance_airport">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Balloted</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_balloted" value="Balloted">
														</div>
														<label class="control-label col-sm-3">Nearby Public Transport Service</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_nearby_public_transport">
														</div>
													</div>	
													
													<div class="form-group">
														<label class="control-label col-sm-3">Sewerage</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_sewerage" value="Sewerage">
														</div>
														<label class="control-label col-sm-3">Other Nearby Places</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_other_nearby_places">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Electricity</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_electricity" value="Electricity">
														</div>
														<label class="control-label col-sm-3"><h5>Other Facilities</h5></label>
														<div class="col-sm-3">

														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Water Supply</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_water_supply" value="Water Supply">
														</div>
														<label class="control-label col-sm-3">Security Staff</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_security_staff" value="Security Staff">
														</div>
													</div>
													  
													<div class="form-group">
														<label class="control-label col-sm-3">Sui Gas</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_sui_gas" value="Sui Gas">
														</div>
														<label class="control-label col-sm-3">Other Facilities</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_other_facilities">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Boundary Wall</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_boundary_wall" value="Boundary Wall">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">

														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-sm-3">Other Plot Features</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_other_plot_feature">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
													 
														</div>
													</div>														 
												</div>
												
												<div class="modal-footer">
													<button type="button" class="btn btn-info" data-dismiss="modal">Save and continue</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	 
				<div class="sidediv" id="rental_price" style="display:none">
					<div class="panel panel-default thirdside-form">
						<div class="panel-heading">Rental Price Details</div>
						<div class="panel-body">
							
							<!--<form class="form-horizontal">-->
								<div class="form-group">
									<label class="control-label col-sm-3">Minimum Contact Period</label>
									<div class="col-md-3">
										<select class="form-control" style="background-color:white;" name="min_contract_period">
											<option value="">Please select</option>
											<option value="1">1</option>								  
											<option value="2">2</option>								  
											<option value="3">3</option>								  
											<option value="4">4</option>								  
											<option value="5">5</option>								  
											<option value="6">6</option>								  
											<option value="7">7</option>								  
											<option value="8">8</option>								  
											<option value="9">9</option>								  
											<option value="10">10</option>									   
											<option value="11">11</option>									   
											<option value="12">12</option>									   
										</select>
									</div>
									<span>or</span>
									<div class="col-md-3">
										<select class="form-control" style="background-color:white;" name="min_contract_duration">
											<option value="">Please select</option>								   
											<option value="Year">Year</option>								   
											<option value="Month">Month</option>								   
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Rental Price(PKR)</label>
									<div class="col-sm-3">
										<input type="text" name="rental_price" class="form-control height">
										<br>
										<input type="text" class="form-control height" disabled>
									</div>
								</div>
									
								<div class="form-group">
									<label class="control-label col-sm-3">Number of Cheques</label>
									<div class="col-md-3">
										<select class="form-control" style="background-color:white;" name="number_of_cheques">
											<option value="">Please select</option>
											<option value="1">1</option>								  
											<option value="2">2</option>								  
											<option value="3">3</option>								  
											<option value="4">4</option>								  
											<option value="5">5</option>								  
											<option value="6">6</option>								  
											<option value="7">7</option>								  
											<option value="8">8</option>								  
											<option value="9">9</option>								  
											<option value="10">10</option>									   
											<option value="11">11</option>									   
											<option value="12">12</option>							   
											<option value="13">13</option>							   
											<option value="14">14</option>							   
											<option value="15">15</option>							   
											<option value="16">16</option>							   
											<option value="17">17</option>							   
											<option value="18">18</option>							   
											<option value="19">19</option>							   
											<option value="20">20</option>							   
										</select>
									</div>
								</div>
									
								<div class="form-group">
									<label class="control-label col-sm-3">Security Deposit</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="security_deposit">
									</div>
									<span>or</span>
									<div class="col-md-2">
										<input type="text" class="form-control" name="or_security_deposit">
									</div>
									<span>number of month's rental amount</span>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Agent Commission(Tenant)</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="agent_commission_tenant">
									</div>
									<span>or</span>
									<div class="col-md-2">
										<input type="text" class="form-control" name="or_agent_commission_tenant">
									</div>
									<span>number of month's rental amount</span>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Agent Commission Landlord</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="agent_commission_landlord">
									</div>
									<span>or</span>
									<div class="col-md-2">
										<input type="text" class="form-control" name="or_agent_commission_landlord">
									</div>
									<span>number of month's rental amount</span>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Advance Rent</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="advance_rent">
									</div>
									<span>or</span>
									<div class="col-md-2">
										<input type="text" class="form-control" name="or_advance_rent">
									</div>
									<span>number of month's rental amount</span>
								</div>
										
								<div class="form-group">
									<label class="control-label col-sm-3">Vacating Notice Period</label>
										<div class="col-md-2">
											<input type="text" class="form-control" name="vacating_notice_period">
										</div>
										<span>Month(s)</span>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Who will Pay Maintenance Fee</label>
									<div class="col-md-3">
										<select class="form-control" style="background-color:white;" name="pay_maintenance_fee">
											<option value="">Please select</option>								   
											<option value="Landlord">Landlord</option>								   
											<option value="Tenant">Tenant</option>								   
										</select>
									</div>
								</div>
									   
								<div class="form-group">
									<label class="control-label col-sm-3">Amount of Maintenance Fee</label>
									<div class="col-md-3">
										<input type="text" class="form-control" name="amount_maintenance_fee">
									</div>										
								</div>
								
								<div class="form-group" id="features_plot_other" style="display:none">
									<label class="control-label col-sm-3">Features</label>
									<div class="col-sm-4">
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Add features</button>
									</div>
								</div>
								
								<div class="form-group" id="features_other" style="display:none">
									<label class="control-label col-sm-3">Features</label>
									<div class="col-sm-4">
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add features</button>
									</div>
								</div>
							<!--</form>-->
						</div>
					</div>
				</div>	 
				<div class="clearfix"></div>

				<div class="sidediv">
					<div class="panel panel-default thirdside-form">
						<div class="panel-heading">ADD IMAGES</div>
						<div class="panel-body">
							<div class="form-group" style="margin-right: 0px;margin-left: 0px;">
								<input style="margin-left:20px" class="btn btn-info col-sm-4" type="file" id="files" name="files" >
							</div>
							<!--<div id="image_preview"> </div>-->
							
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
	 
				<div class="sidediv">
					<div class="panel panel-default thirdside-form">
						<div class="panel-heading">ADD VIDEO</div>
						<div class="panel-body">
							<div class="form-group" style="margin-right: 0px;margin-left: 0px;">
								<input class="form-control" type="url" name="video_url" placeholder="https://www.youtube.com">
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
	 
				<div class="sidediv">
					<div class="panel panel-default secondside-form">
						<div class="panel-heading">CONTACT DETAILS</div>
						<div class="panel-body">
							<div class="form-group">
								<label class="control-label col-sm-2">Lisiting Owner</label>
								<div class="col-md-4">
									<select class="form-control height" id="listing_detail" name="list_owner" style="background-color:white;">
										<option>Please Select</option>
										<option value="<?= $this->session->userdata('user_id') ?>">My Self</option>
									</select>
								</div>
								<!-- <label for="inputValue" class="col-md-3 control-label">
									<a id="listing_detail" data-val="<?= $this->session->userdata('user_id')?>">Load user info</a>
								</label> -->
							</div> 
							
							<div class="form-group">
								<label class="control-label col-sm-2">Phone:</label>
								<div class="col-sm-4">
									<div id="phone">
										<input type="text" name="phone" id="phone" class="form-control height">
									</div>
								</div>
								
								<!--<div class="col-sm-10">
									<dl id="phoneNumberParts">
										<dd>
											<span class="form-control-static"></span>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="3" maxlength="3">
											<span class="form-control-static">-</span>
										</dd>
										<dd>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="3" maxlength="3">
											<span class="form-control-static">-</span>
										</dd>
										<dd>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="11" maxlength="4">
										</dd>
									</dl>
								</div>	-->						 
							</div>
			 
							<div class="form-group">
								<label class="control-label col-sm-2">Cell:</label>
								<div class="col-sm-4">
									<div id="cell">
										<input type="text" name="cell" data-val="cell" class="form-control height">
									</div>
								</div>
								
								<!--<div class="col-sm-10">
									<dl id="phoneNumberParts">
										<dd>
											<span class="form-control-static"></span>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="3" maxlength="3">
											<span class="form-control-static">-</span>
										</dd>								  
										<dd>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="22" maxlength="4">
										</dd>
									</dl>
								</div>-->			 
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">Fax:</label>
								<div class="col-sm-4">
									<div id="fax">
										<input type="text" name="fax" id="fax" class="form-control height">
									</div>
								</div>
								
								<!--<div class="col-sm-10">
									<dl id="phoneNumberParts">
										<dd>
											<span class="form-control-static"></span>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="3" maxlength="3">
											<span class="form-control-static">-</span>
										</dd>
										<dd>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="3" maxlength="3">
											<span class="form-control-static">-</span>
										</dd>
										<dd>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="11" maxlength="4">
										</dd>
									</dl>
								</div>-->						 
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">Email: *</label>
								<div class="col-sm-4">
									<div id="email">
										<input type="text" name="email" id="email" class="form-control height">
									</div>
								</div>
							</div>
							  
							<div class="form-group">
								<label class="control-label col-sm-2"></label>
								<div class="col-sm-4">
									<button class="btn btn-info btn-lg">Submit Property</button>
								</div>
							</div> 
							
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
		
<?php include_once('includes/footer.php'); ?>

<script>
$('#city_id').change(function(){     
	var id = $('#city_id').val();
	function insertText()
	{
		document.getElementById('cityId').InnerHTML = id;
	}
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_society',
		data: {id:id},
		success: function(data) {
			if(data == "empty") {
				$("#society_list").hide();
			}else {
				$("#society_list").show();
				$("#society").html(data);
			}
		}
	});
}); 

$('#society').change(function(){     
	var society = $('#society').val();
	//document.getElementById('societyId').InnerHTML = id; 
	//alert(society);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_phase',
		data: {id:society},
		success: function(data) {
			if(data == "empty") {
				$("#phase_list").hide();
			}else {
				$("#phase_list").show();
				$("#phase").html(data);
			}
		}
	});
}); 

$('#phase').change(function(){     
	var phase = $('#phase').val();
	//alert(phase);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_sector',
		data: {id:phase},
		success: function(data) {
			if(data == "empty") {
				$("#sector_list").hide();
			}else {
				$("#sector_list").show();
				$("#sector").html(data);
			}
		}
	});
}); 

$('#listing_detail').change(function(){     
	var id = $('#listing_detail').val();
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/get_agent_id',
		data: {id:id},
		success: function(data) {
			if(data == "empty") {
				
			}else {
			var myObj = data;
			var obj = JSON.parse(myObj);
			
			$("#phone").html(obj.phone);
			$("#cell").html(obj.cell);
			$("#fax").html(obj.fax);
			$("#email").html(obj.email);
			}
		}
	});
}); 
</script>

<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 30.3753, lng: 69.3451},
          zoom: 5
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
		var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
	  
	  
	 
$("#images").change(function(){
	$('#image_preview').html("");
	var total_file = document.getElementById("images").files.length;
	for(var i=0;i<total_file;i++)
	{
		$('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
	}


  });

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARA9cUr2g0JA0eXIjNE2IQmdwP5uj-xFs&libraries=places&callback=initMap"
        async defer></script>



        

<!-- <?php } else { if($roles[9] == 10){?>
<?php include_once('includes/property_managment_sidebar.php'); ?>
		
<style>
	  #map {
		height: 35%;
	  }
	  #map {
		width: 440px;
	  } 
	  #controls {
		position: absolute;
		left: 300px;
		width: 140px;
		top: 0px;
		z-index: 5;
		background-color: #fff; 
	  }
	  #autocomplete {
		width: 100%;
	  }
		input[type="number"]::-webkit-outer-spin-button,
		input[type="number"]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	  }
		input[type="number"] {
		-moz-appearance: textfield;
	  }
	  input[type="time"]::-webkit-outer-spin-button,
		input[type="time"]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	  }
		input[type="time"] {
		-moz-appearance: textfield;
	  }
		input[type="date"]::-webkit-outer-spin-button,
		input[type="date"]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	  }
		input[type="date"] {
		-moz-appearance: textfield;
	  }
	  
  	.cke_1 .cke_top {
    background-color: #ccc !important;
    border-bottom-color: #fff !important;
}
.cke_1 .cke_bottom {
    background-color: #ccc !important;
    border-top-color: #fff !important;
}
	input[type=file]{
      display: inline;
    }
    #image_preview{
      border: 1px solid black;
      padding: 10px;
    }
    #image_preview img{
      width: 200px;
      padding: 5px;
    }
</style>

		<div class="col-lg-9 sidediv">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/property_management')?>">Property mangament</a></li>
				<li>Post listing</li>				
			</ol>
			
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
							
			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('dashboard/insert_post_listing')?>">
				<div class="panel panel-default side-form">
					<div class="panel-heading">PROPERTY TYPE AND LOCATION</div>
					<div class="panel-body">
							<div class="form-group">
								<label class="control-label col-sm-2">Purpose: *</label>
								<div class="col-sm-6">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="sale" value="Sale" name="purpose[]" checked > For Sale
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="rent" value="Rent" name="purpose[]"> Rent
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="wanted"  value="Wanted" name="purpose[]"> Wanted
										</button>
									</div>
								</div>
							</div>
							
							<div class="form-group" style="display:none" id="wanted_for">
								<label class="control-label col-sm-2">Wanted for: *</label>
								<div class="col-sm-6">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="buy"  value="Buy" name="wanted_for[]"> Buy
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="rent"  value="Rent" name="wanted_for[]"> Rent
										</button>
									</div>
								</div>
							</div>
							  
							<div class="form-group">
								<label class="control-label col-sm-2">Property Type: *</label>
								<div class="col-sm-6">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="homes"  value="Homes" name="property_type[]"> Homes
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="plots"  value="Plots" name="property_type[]"> Plots
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="commercial"  value="Commercial" name="property_type[]"> Commercial
										</button>
									</div>
								</div>
							</div>
							
							<div class="form-group" style="display:none" id="house"> 
								<label class="control-label col-sm-2"></label>
								<div class="col-sm-6">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="houses"  value="House" name="frst_option[]"> House
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="flat"  value="Flat" name="frst_option[]"> Flat
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="upper_portion"  value="Upper Portion" name="frst_option[]"> Upper Portion
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="lower_portion"  value="Lower Portion" name="frst_option[]"> Lower Portion
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="farm_house"  value="Farm House" name="frst_option[]"> Farm House
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="room"  value="Room" name="frst_option[]"> Room
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="penthouse"  value="Penthouse" name="frst_option[]"> Penthouse
										</button>
										
									</div>
								</div>
							</div>
							
							<div class="form-group" style="display:none" id="plot">
								<label class="control-label col-sm-2"></label>
								<div class="col-sm-8">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="residential_plot"  value="Residential Plot" name="scnd_option[]"> Residential Plot
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="commercial_plot"  value="Commercial Plot" name="scnd_option[]"> Commercial Plot
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="agricultural_land"  value="Agricultural Land" name="scnd_option[]"> Agricultural Land
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="industrial_land"  value="Industrial Land" name="scnd_option[]"> Industrial Land
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="plot_file"  value="Plot File" name="scnd_option[]"> Plot File
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="plot_form"  value="Plot Form" name="scnd_option[]"> Plot Form
										</button>
										
									</div>
								</div>
							</div>
							
							<div class="form-group" style="display:none" id="commercials"> 
								<label class="control-label col-sm-2"></label>
								<div class="col-sm-8">
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="office"  value="Office" name="thrd_option[]">Office
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="shop"  value="Shop" name="thrd_option[]"> Shop
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="ware_house"  value="Ware House" name="thrd_option[]"> Ware House
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="factory"  value="Factory" name="thrd_option[]"> Factory
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="building"  value="Building" name="thrd_option[]"> Building
										</button>
										<button type="button" class="btn btn-default"> 
											<input type="checkbox" id="other"  value="Other" name="thrd_option[]"> Other
										</button>
										
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">City: *</label>
								<div class="col-sm-4">
									<select class="form-control" name="city" id="city_id" style="background-color:white;">
										<option>Select City</option>
										<?php foreach($city as $row){?>
											<option value="<?= $row['city_id']?>"><?= $row['city_name']?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">Location: *</label>
								<div class="col-sm-4">
									<input type="text" class="form-control height" id="pac-input" name="location" placeholder="Then enter location here ...">
								</div>
								
								<div id="location_list" style="display:none;">
									<span class="">or</span>
									<div class="col-sm-4">
										<select class="form-control height" id="location" name="frst_location" style="background-color:white;">
											
										</select>
									</div>							  
								</div>							  
							</div>
							
							<div class="form-group" id="sub_location_list" style="display:none;">
								<label class="control-label col-sm-6"></label>
								<span class="">&emsp;</span>
								<div class="col-sm-4">
									<select class="form-control height" id="sub_location" name="scnd_location" style="background-color:white;">
										
									</select>
								</div>
							</div>
						  
							<div class="form-group" id="sub_sub_location_list" style="display:none;">
								<label class="control-label col-sm-6"></label>
								<span class="">&emsp;</span>
								<div class="col-sm-4">
									<select class="form-control height" id="sub_sub_location" name="thrd_location" style="background-color:white;">
										
									</select>
								</div>
							</div>
						  
							div class="form-group">
								<label class="control-label col-sm-2">Selected location</label>
								<div class="col-sm-4">
									<span>KARACHI??ABC</span>						  
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">Map</label>
								<div class="col-sm-4">
									<div id="map" style="width:238;height:183px"></div>						  
								</div>
							</div>
							
						</form>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="sidediv">
					<div class="panel panel-default secondside-form">
						<div class="panel-heading">PROPERTY DETAILS</div>
						
						<div class="panel-body">
							<div class="form-group">
								<label class="control-label col-sm-3">Property Title: *</label>
								<div class="col-sm-6">
									<input type="text" name="property_title" class="form-control height" required>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3">Description: *</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" required rows="5" id="comment"></textarea>
								</div>
							</div>
							
							<div class="form-group" id="inclusive">
								<label class="control-label col-sm-3">All inclusive(PKR): *</label>
								<div class="col-sm-4">
									<input type="text" name="all_inclusive" class="form-control height">
									<br>
									<input type="text" class="form-control height" id="amount-rupees" readonly="">
								</div>
							</div>
							
							<div class="form-group">				   
								<label class="control-label col-sm-3">Land Area: *</label>
								<div class="col-md-8">
									<div class="form-group row">											
										<div class="col-md-4">
											<input type="text" name="land_area" class="form-control height" id="inputKey" placeholder="Land Area">
										</div>										   
										<label for="inputValue" class="col-md-4 control-label">
											<i class="fa fa-calculator"></i>&nbsp;
											<a href="javascript:;">Area Calculator</a>
										</label>										
									</div>
								</div>							   
							</div>
							
							<div class="form-group" id="bedrooms" style="display:none">
								<label class="control-label col-sm-3">Bedrooms</label>
								<div class="col-sm-4">
									<select class="form-control" style="background-color:white;" name="bedroom" id="sel1">
										<option value="">Please select</option>								  
										<option value="Studio">Studio</option>								  
										<option value="1">1</option>								  
										<option value="2">2</option>								  
										<option value="3">3</option>								  
										<option value="4">4</option>								  
										<option value="5">5</option>								  
										<option value="6">6</option>								  
										<option value="7">7</option>								  
										<option value="8">8</option>								  
										<option value="9">9</option>								  
										<option value="10">10</option>								  
										<option value="10+">10+</option>								  
									</select> 
								</div>
							</div>
							
							<div class="form-group" id="bathrooms" style="display:none">
								<label class="control-label col-sm-3">Bathrooms</label>
								<div class="col-sm-4">
									<select class="form-control" style="background-color:white;" name="bathroom" id="sel1">
										<option value="">Please select</option>
										<option value="1">1</option>								  
										<option value="2">2</option>								  
										<option value="3">3</option>								  
										<option value="4">4</option>								  
										<option value="5">5</option>								  
										<option value="6">6</option>								  
										<option value="7">7</option>								  
										<option value="8">8</option>								  
										<option value="9">9</option>								  
										<option value="10">10</option>										
									</select> 
								</div>
							</div>
			   
							<div class="form-group" id="features_plot" style="display:none">
								<label class="control-label col-sm-3">Features</label>
								<div class="col-sm-4">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Add features</button>
								</div>
							</div>
			   
							<div class="form-group" id="features" style="display:none">
								<label class="control-label col-sm-3">Features</label>
								<div class="col-sm-4">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add features</button>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3"></label>
								<div class="col-sm-4">
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h6 class="modal-title">Property features</h6>
												</div>
												
												<div class="modal-body">				  
													
													<div class="form-group">
														<label class="control-label col-sm-5"><h5>Main features</h5></label>
														<div class="col-sm-1"></div>
														<label class="control-label col-sm-3"><h5>Rooms</h5></label>
														<div class="col-sm-3"></div>
													</div>
					
													<div class="form-group">
														<label class="control-label col-sm-3">Built in Year</label>
														<div class="col-sm-3">
															<input type="text" name="f_built_in_year" class="form-control">
														</div>
														<label class="control-label col-sm-3">Bedrooms</label>
														<div class="col-sm-3">
															<input type="text" name="f_bedrooms" class="form-control">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">View</label>
														<div class="col-sm-3">
															<input type="text" name="f_view" class="form-control">
														</div>
														<label class="control-label col-sm-3">Bathrooms</label>
														<div class="col-sm-3">
															<input type="text" name="f_bathrooms" class="form-control">
														</div>
													</div>	
					
													<div class="form-group">
														<label class="control-label col-sm-3">Parking Space</label>
														<div class="col-sm-3">
															<input type="text" name="f_parking_space" class="form-control">
														</div>
														<label class="control-label col-sm-3">Servant Quarters</label>
														<div class="col-sm-3">
															<input type="text" name="f_servant_quarter" class="form-control">
														</div>
													</div>	
													
													<div class="form-group">
														<label class="control-label col-sm-3">Double Glazed Windows</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_double_glazed" value="Double glazed windows">
														</div>
														<label class="control-label col-sm-3">Drawing Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_drwaing_room" value="Drawing Room">
														</div>
													</div>	
													
													<div class="form-group">
														<label class="control-label col-sm-3">Central Air Conditioning</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_central_air_condition" value="Central Air Conditioning">
														</div>
														<label class="control-label col-sm-3">Dining Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_dining_room" value="Dining Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Central Heating</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_central_heating" value="Central Heating">
														</div>
														<label class="control-label col-sm-3">Kitchens</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_kitchen" value="Kitchens">
														</div>
													</div>

													
													<div class="form-group">
														<label class="control-label col-sm-3">Flooring</label>
														<div class="col-sm-3">
															<select class="form-control" style="background-color:white;" name="f_flooring" id="sel1">
																<option value="">Please select</option>														  
																<option value="Tiles">Tiles</option>														  
																<option value="Marble">Marble</option>														  
																<option value="Wooden">Wooden</option>														  
																<option value="Chip">Chip</option>														  
																<option value="Cement">Cement</option>														  
																<option value="Other">Other</option>														  
															</select> 
														</div>
														<label class="control-label col-sm-3">Study room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_study_room" value="Study Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Electricity Backup</label>
														<div class="col-sm-3">
															<select class="form-control" style="background-color:white;" name="f_electricity_backup" value="Electricity Backup" id="sel1">
																<option Value="">Please select</option>														  
																<option Value="None">None</option>														  
																<option Value="Generator">Generator</option>														  
																<option Value="UPS">UPS</option>														  
																<option Value="Solar">Solar</option>														  
																<option Value="Other">Other</option>														  
															</select> 
														</div>
														<label class="control-label col-sm-3">Prayer Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_prayer_room" value="Prayer Room">
														</div>
													</div> 
													
													<div class="form-group">
														<label class="control-label col-sm-3">Waste Disposal</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_waste_disposal" value="Waste Disposal">
														</div>
														<label class="control-label col-sm-3">Powder Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_powder_room" value="Powder Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Floors</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_floors">
														</div>
														<label class="control-label col-sm-3">Gym</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_gym" value="Gym">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Other Main Features</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_other_main_features">
														</div>
														<label class="control-label col-sm-3">Store Rooms</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_store_rooms">
														</div>
													</div>
			  
													<div class="form-group">
														<label class="control-label col-sm-3">Furnished</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_furnished" value="Furnished">
														</div>
														<label class="control-label col-sm-3">Steam Rooms</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_steam_rooms" value="Steam Rooms">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-3">Lounge or Sitting Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_lounge_sitting_room" value="Lounge or Sitting Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-3">Laundry Room</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_laundry_room" value="Laundry Room">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-3">Other Rooms</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_other_room" value="Other Room">
														</div>
													</div>
			  
													<div class="form-group">
														<label class="control-label col-sm-5"><h5>Business and communication</h5></label>
														<div class="col-sm-1">
														
														</div>
														<label class="control-label col-sm-5"><h5>Healthcare Recreational</h5></label>
														<div class="col-sm-1">
													 
														</div>
													</div>
														
													<div class="form-group">
														<label class="control-label col-sm-3">Broadband Internet Access</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_broadband_internet" value="Broadband Internet Access">
														</div>
														<label class="control-label col-sm-3">Lawn or Garden</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_lawn_garden" value="Lawn or Garden">
														</div>
													</div>
														
													<div class="form-group">
														<label class="control-label col-sm-3">Satellite or Cable TV Ready</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_satellite_cable_tv" value="Satellite or Cable TV Ready">
														</div>
														<label class="control-label col-sm-3">Swimming Pool</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_swimming_pool" value="Swimming Pool">
														</div>
													</div>
			  
													<div class="form-group">
														<label class="control-label col-sm-3">Intercome</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_intercome" value="Intercome">
														</div>
														<label class="control-label col-sm-3">Sauna</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_sauna" value="Sauna">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Other business and communication Facilities</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_other_business_communication">
														</div>
														<label class="control-label col-sm-3">Jacuzzi</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_jacuzzi" value="Jacuzzi">
														</div>
													</div>
														
													<div class="form-group">
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-3">Other Healthcare and Recreation Facilities</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_other_healthcare_recreation" value="Other Healthcare and Recreation Facilities">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-4"><h5>Nearby location and other facilities</h5></label>
														<div class="col-sm-1">
														
														</div>
														<label class="control-label col-sm-3"><h5>Other facilities</h5></label>
														<div class="col-sm-1">
													 
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Schools</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_nearby_school" >
														</div>
														<label class="control-label col-sm-3">Maintenance Staff</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_maintenance_staff" value="Maintenance Staff">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Hospitals</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_nearby_hospital">
														</div>
														<label class="control-label col-sm-3">Security Staff</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_security_staff" value="Security Staff">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Shopping Malls</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_nearby_shopping_mall">
														</div>
														<label class="control-label col-sm-3">Facilities for Disabled</label>
														<div class="col-sm-3">
															<input type="checkbox" name="f_facilities_disabled" value="Facilities for Disabled">
														</div>
													</div> 
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Restaurants</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_nearby_restaurants">
														</div>
														<label class="control-label col-sm-3">Other facilities</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_other_facilities">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Distance From Airport(kms)</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_distance_airport">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
													  
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Nearby Public Transport Service</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_public_transport">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
													  
														</div>
													</div>
			  
													<div class="form-group">
														<label class="control-label col-sm-3">Other Nearby Places</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="f_other_nearby_places">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
												  
														</div>
													</div>
												</div>
												
												<div class="modal-footer">
													<button type="button" class="btn btn-info" data-dismiss="modal">Save and continue</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3"></label>
								<div class="col-sm-4">
									<div class="modal fade" id="myModal1" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h6 class="modal-title">Property features</h6>
												</div>
												
												<div class="modal-body">

													<div class="form-group">
														<label class="control-label col-sm-6"><h5>Plot Features</h5></label>
														<div class="col-sm-3">
														
														</div>
														<label class="control-label col-sm-6"><h5>Nearby Locations and Other Facilities</h5></label>
														<div class="col-sm-2">
													 
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Possesion</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_possesion" value="Possesion">
														</div>
														<label class="control-label col-sm-3">Nearby Schools</label>
														<div class="col-sm-3">
															<input type="text" name="pf_nearby_school" class="form-control">
														</div>
													</div>
															
													<div class="form-group">
														<label class="control-label col-sm-3">Corner</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_corner" value="Corner">
														</div>
														<label class="control-label col-sm-3">Nearby Hospitals</label>
														<div class="col-sm-3">
															<input type="text" name="pf_nearby_hospital" class="form-control">
														</div>
													</div>	
															
													<div class="form-group">
														<label class="control-label col-sm-3">Park Facing</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_park_facing" value="Park Facing"> 
														</div>
														<label class="control-label col-sm-3">Nearby Shopping Malls</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_nearby_shopping_mall">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Disputed</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_disputed" value="Disputed">
														</div>
														<label class="control-label col-sm-3">Nearby Restaurants</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_nearby_restaurants">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">File</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_file" value="File">
														</div>
														<label class="control-label col-sm-3">Distance From Airport (kms)</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_distance_airport">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Balloted</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_balloted" value="Balloted">
														</div>
														<label class="control-label col-sm-3">Nearby Public Transport Service</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_nearby_public_transport">
														</div>
													</div>	
													
													<div class="form-group">
														<label class="control-label col-sm-3">Sewerage</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_sewerage" value="Sewerage">
														</div>
														<label class="control-label col-sm-3">Other Nearby Places</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_other_nearby_places">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Electricity</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_electricity" value="Electricity">
														</div>
														<label class="control-label col-sm-3"><h5>Other Facilities</h5></label>
														<div class="col-sm-3">

														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Water Supply</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_water_supply" value="Water Supply">
														</div>
														<label class="control-label col-sm-3">Security Staff</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_security_staff" value="Security Staff">
														</div>
													</div>
													  
													<div class="form-group">
														<label class="control-label col-sm-3">Sui Gas</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_sui_gas" value="Sui Gas">
														</div>
														<label class="control-label col-sm-3">Other Facilities</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_other_facilities">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-sm-3">Boundary Wall</label>
														<div class="col-sm-3">
															<input type="checkbox" name="pf_boundary_wall" value="Boundary Wall">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">

														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-sm-3">Other Plot Features</label>
														<div class="col-sm-3">
															<input type="text" class="form-control" name="pf_other_plot_feature">
														</div>
														<label class="control-label col-sm-3"></label>
														<div class="col-sm-3">
													 
														</div>
													</div>														 
												</div>
												
												<div class="modal-footer">
													<button type="button" class="btn btn-info" data-dismiss="modal">Save and continue</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	 
				<div class="sidediv" id="rental_price" style="display:none">
					<div class="panel panel-default thirdside-form">
						<div class="panel-heading">Rental Price Details</div>
						<div class="panel-body">
							
								<div class="form-group">
									<label class="control-label col-sm-3">Minimum Contact Period</label>
									<div class="col-md-3">
										<select class="form-control" style="background-color:white;" name="min_contract_period">
											<option value="">Please select</option>
											<option value="1">1</option>								  
											<option value="2">2</option>								  
											<option value="3">3</option>								  
											<option value="4">4</option>								  
											<option value="5">5</option>								  
											<option value="6">6</option>								  
											<option value="7">7</option>								  
											<option value="8">8</option>								  
											<option value="9">9</option>								  
											<option value="10">10</option>									   
											<option value="11">11</option>									   
											<option value="12">12</option>									   
										</select>
									</div>
									<span>or</span>
									<div class="col-md-3">
										<select class="form-control" style="background-color:white;" name="min_contract_duration">
											<option value="">Please select</option>								   
											<option value="Year">Year</option>								   
											<option value="Month">Month</option>								   
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Rental Price(PKR)</label>
									<div class="col-sm-3">
										<input type="text" name="rental_price" class="form-control height">
										<br>
										<input type="text" class="form-control height" disabled>
									</div>
								</div>
									
								<div class="form-group">
									<label class="control-label col-sm-3">Number of Cheques</label>
									<div class="col-md-3">
										<select class="form-control" style="background-color:white;" name="number_of_cheques">
											<option value="">Please select</option>
											<option value="1">1</option>								  
											<option value="2">2</option>								  
											<option value="3">3</option>								  
											<option value="4">4</option>								  
											<option value="5">5</option>								  
											<option value="6">6</option>								  
											<option value="7">7</option>								  
											<option value="8">8</option>								  
											<option value="9">9</option>								  
											<option value="10">10</option>									   
											<option value="11">11</option>									   
											<option value="12">12</option>							   
											<option value="13">13</option>							   
											<option value="14">14</option>							   
											<option value="15">15</option>							   
											<option value="16">16</option>							   
											<option value="17">17</option>							   
											<option value="18">18</option>							   
											<option value="19">19</option>							   
											<option value="20">20</option>							   
										</select>
									</div>
								</div>
									
								<div class="form-group">
									<label class="control-label col-sm-3">Security Deposit</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="security_deposit">
									</div>
									<span>or</span>
									<div class="col-md-2">
										<input type="text" class="form-control" name="or_security_deposit">
									</div>
									<span>number of month's rental amount</span>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Agent Commission(Tenant)</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="agent_commission_tenant">
									</div>
									<span>or</span>
									<div class="col-md-2">
										<input type="text" class="form-control" name="or_agent_commission_tenant">
									</div>
									<span>number of month's rental amount</span>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Agent Commission Landlord</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="agent_commission_landlord">
									</div>
									<span>or</span>
									<div class="col-md-2">
										<input type="text" class="form-control" name="or_agent_commission_landlord">
									</div>
									<span>number of month's rental amount</span>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Advance Rent</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="advance_rent">
									</div>
									<span>or</span>
									<div class="col-md-2">
										<input type="text" class="form-control" name="or_advance_rent">
									</div>
									<span>number of month's rental amount</span>
								</div>
										
								<div class="form-group">
									<label class="control-label col-sm-3">Vacating Notice Period</label>
										<div class="col-md-2">
											<input type="text" class="form-control" name="vacating_notice_period">
										</div>
										<span>Month(s)</span>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3">Who will Pay Maintenance Fee</label>
									<div class="col-md-3">
										<select class="form-control" style="background-color:white;" name="pay_maintenance_fee">
											<option value="">Please select</option>								   
											<option value="Landlord">Landlord</option>								   
											<option value="Tenant">Tenant</option>								   
										</select>
									</div>
								</div>
									   
								<div class="form-group">
									<label class="control-label col-sm-3">Amount of Maintenance Fee</label>
									<div class="col-md-3">
										<input type="text" class="form-control" name="amount_maintenance_fee">
									</div>										
								</div>
								
								<div class="form-group" id="features_plot_other" style="display:none">
									<label class="control-label col-sm-3">Features</label>
									<div class="col-sm-4">
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Add features</button>
									</div>
								</div>
								
								<div class="form-group" id="features_other" style="display:none">
									<label class="control-label col-sm-3">Features</label>
									<div class="col-sm-4">
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add features</button>
									</div>
								</div>
						</div>
					</div>
				</div>	 
				<div class="clearfix"></div>

				<div class="sidediv">
					<div class="panel panel-default thirdside-form">
						<div class="panel-heading">ADD IMAGES</div>
						<div class="panel-body">
							<div class="form-group">
								<input style="margin-left:20px" class="btn btn-info col-sm-4" type="file" id="files" name="files[]" multiple>
							</div>
							<div id="image_preview"> </div>
							
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
	 
				<div class="sidediv">
					<div class="panel panel-default secondside-form">
						<div class="panel-heading">CONTACT DETAILS</div>
						<div class="panel-body">
							<div class="form-group">
								<label class="control-label col-sm-2">Lisiting Owner</label>
								<div class="col-md-4">
									<select class="form-control" id="listing_detail" name="list_owner" style="background-color:white;">
										<option value="">Please Select</option>
										<option value="<?= $this->session->userdata('user_id')?>">Myself</option>
										<?php foreach($agents as $row){?>
											<option value="<?= $row["user_id"]?>"><?= $row["username"]?></option>
										<?php } ?>
									</select> 								 
								</div>
							</div> 
							
							<div class="form-group">
								<label class="control-label col-sm-2">Contact person:*</label>
								<div class="col-sm-4">
									<input type="text" name="contact_person" class="form-control height" >
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">Phone:</label>
								<div class="col-sm-4">
									<div id="phone">
										<input type="text" name="phone" id="phone" class="form-control height">
									</div>
								</div>
								
														 
							</div>
			 
							<div class="form-group">
								<label class="control-label col-sm-2">Cell:</label>
								<div class="col-sm-4">
									<div id="cell">
										<input type="text" name="cell" data-val="cell" class="form-control height">
									</div>
								</div>			 
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">Fax:</label>
								<div class="col-sm-4">
									<div id="fax">
										<input type="text" name="fax" id="fax" class="form-control height">
									</div>
								</div>
								
								<div class="col-sm-10">
									<dl id="phoneNumberParts">
										<dd>
											<span class="form-control-static"></span>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="3" maxlength="3">
											<span class="form-control-static">-</span>
										</dd>
										<dd>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="3" maxlength="3">
											<span class="form-control-static">-</span>
										</dd>
										<dd>
											<input type="text" class="form-control grouped-field height" id="phonePrefix" placeholder="" size="11" maxlength="4">
										</dd>
									</dl>
								</div>						 
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">Email: *</label>
								<div class="col-sm-4">
									<div id="email">
										<input type="text" name="email" id="email" class="form-control height">
									</div>
								</div>
							</div>
							  
							<div class="form-group">
								<label class="control-label col-sm-2"></label>
								<div class="col-sm-4">
									<button class="btn btn-info btn-lg">Submit Property</button>
								</div>
							</div> 
							
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
		 -->
<?php include_once('includes/footer.php'); ?>

<script>
$('#city_id').change(function(){     
	var id = $('#city_id').val();
	function insertText()
	{
		document.getElementById('cityId').InnerHTML = id;
	}
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_society',
		data: {id:id},
		success: function(data) {
			if(data == "empty") {
				$("#society_list").hide();
			}else {
				$("#society_list").show();
				$("#society").html(data);
			}
		}
	});
}); 

$('#location').change(function(){     
	var id = $('#location').val();
	document.getElementById('locationId').InnerHTML = id;
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_sub_location',
		data: {id:id},
		success: function(data) {
			if(data == "empty") {
				$("#sub_location_list").hide();
			}else {
				$("#sub_location_list").show();
				$("#sub_location").html(data);
			}
		}
	});
}); 

$('#sub_location').change(function(){     
	var id = $('#sub_location').val();
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_sub_location',
		data: {id:id},
		success: function(data) {
			if(data == "empty") {
				$("#sub_sub_location_list").hide();
			}else {
				$("#sub_sub_location_list").show();
				$("#sub_sub_location").html(data);
			}
		}
	});
}); 

$('#listing_detail').change(function(){     
	var id = $('#listing_detail').val();
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/get_agent_id',
		data: {id:id},
		success: function(data) {
			if(data == "empty") {
				
			}else {
			var myObj = data;
			var obj = JSON.parse(myObj);
			
			$("#phone").html(obj.phone);
			$("#cell").html(obj.cell);
			$("#fax").html(obj.fax);
			$("#email").html(obj.email);
			}
		}
	});
}); 
</script>


<!-- 		
<?php }elseif ($roles[10] == 11)
		{ 
			redirect('dashboard/active_property_management');
		} else { redirect('dashboard');
} }?>
	 -->	
		

<script src="<?= base_url('assets/js/num-to-words.js')?>" type="text/javascript"></script>
<script type="text/javascript">
	$(".numbers").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
               return false;
     }
});
 
var words="";
$(function() {
    $("#amount1").on("keydown keyup", per);
	function per() {
		var totalamount = (Number($("#amount1").val()));
		$("#totalval").val(totalamount);
		words = toWords(totalamount);
		$("#amount-rupees").val(words + "Rupees Only");
	}
});
</script>		


<script>


      function initMap() {
		  
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 30.3753, lng: 69.3451},
          zoom: 13
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
		var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');
		
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);
		
        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
			
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
		  var lat=place.geometry.location.lat();
		  var lng=place.geometry.location.lng();
			initialize(lat,lng)
          // if (!place.geometry) {
            
            // window.alert("No details available for input: '" + place.name + "'");
            // return;
          // }

          
          // if (place.geometry.viewport) {
			  
            // map.fitBounds(place.geometry.viewport);
          // } else {
			  
            // map.setCenter(place.geometry.location);
            // map.setZoom(17);  
          // }
		   // console.log(place.geometry.location.lat());
			// console.log(place.geometry.location.lng());
          // marker.setPosition(place.geometry.location);
          // marker.setVisible(true);
		
          // var address = '';
          // if (place.address_components) {
            // address = [
              // (place.address_components[0] && place.address_components[0].short_name || ''),
              // (place.address_components[1] && place.address_components[1].short_name || ''),
              // (place.address_components[2] && place.address_components[2].short_name || '')
            // ].join(' ');
          // }
			
          // infowindowContent.children['place-icon'].src = place.icon;
          // infowindowContent.children['place-name'].textContent = place.name;
          // infowindowContent.children['place-address'].textContent = address;
          // infowindow.open(map, marker);
        });

        
        function setupClickListener(id, types) {
			
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
	  
	  
	 
$("#images").change(function(){
	$('#image_preview').html("");
	var total_file = document.getElementById("images").files.length;
	for(var i=0;i<total_file;i++)
	{
		$('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
	}


  });

</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARA9cUr2g0JA0eXIjNE2IQmdwP5uj-xFs&libraries=places&callback=initMap"
        async defer></script>
		
<script>
	$(document).on('change', '#society , #phase,#sector', function() {
	var address='';
	var socity=$("#society option:selected").text();
	
	var phase=$("#phase option:selected").text();
	var sector=$("#sector option:selected").text();
	var city_id=$("#city_id option:selected").text();
	if(city_id != ''){
		
		address=city_id+',pakistan';
	}
	if(socity != ''){
		socity=socity.split(" ");
		address=socity[0]+','+address;
		
	}
	if(phase != ''){
		//phase=phase.split(" ");
		//address=phase[0]+' '+phase[1]+','+address;
		address=phase+','+address;
	}
	if(sector != ''){
		//sector=sector.split("-");
		//address=sector[1]+' '+address;
		address=sector+','+address;
	}
	//alert(address)
	
	getAddress(address);
});
function getAddress(socity){
	var geocoder = new google.maps.Geocoder();
var address = socity;

geocoder.geocode( { 'address': address}, function(results, status) {

if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
	var longitude = results[0].geometry.location.lng();
    console.log(latitude);
	initialize(latitude,longitude);
    } 
});
}
function initialize(latitude,longitude){
     var myLatlng = new google.maps.LatLng(latitude,longitude);
     var myOptions = {
         zoom: 15,
         center: myLatlng,
         mapTypeId: google.maps.MapTypeId.ROADMAP
         }
      map = new google.maps.Map(document.getElementById("map"), myOptions);
      var marker = new google.maps.Marker({
          position: myLatlng, 
          map: map,
      title:""
     });
 	$('#lat').val(latitude);
	$('#long').val(longitude);
} 

	
</script>
		
		