<?php include_once('header.php'); ?>
	
<div class="content">
	<div class="container_bg">
		
			<div class="col-md-4">
				<div class="bmargin loc_container ros_new vs1p"> 
					<div class="arrow arrowTop"><span class="arrowIcon">&nbsp;</span></div>
					<div class="loc_slider lt_slide vs1 vs_a rsDefault" >
					<?php $counter = 0;
						for($i=0; $i< (count($cities)/8); $i++){  ?>
						<ul>
							<?php for($y=0; $y <8; $y++){ if(($counter/8) != (count($cities)/8)) {?>
								<li><a href="<?= base_url('home/city_posts_plot/'.$cities[$counter]['city_id'] )?>"><?= $cities[$counter]['city_name'] ?>
									<span class='r count'>
									(<?php 
										$this->db->from('post_ads');
										$this->db->where('city',$cities[$counter]['city_id']);
										$this->db->where('property_type','Plots');
										$res = $this->db->get('');
										$query =  $res->num_rows();
										print_r($query);
									?>)</span>
								</a></li>
								<?php  $counter++; ?>
							
							<?php } else { ?> 
									<?php break; ?>
								<?php  }} ?>
						</ul>
						<?php }?>
					</div>
					<div class="arrow arrowBottom"><span class="arrowIcon">&nbsp;</span></div>
				</div>
				<div class='inner_content' style="padding-top: 20px;">
	
					<div class="bmargin new_prop_slider bgw ros" style="display:none; padding-bottom:12px;">
						<div class="hot_prop hs2 rsDefault">
							<div>	
								<script language='javascript'>var call_recording_1 = 'a:2:{s:3:"imp";a:2:{i:3387050;a:8:{s:3:"uid";s:6:"581165";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"3041";s:3:"loc";s:3:"632";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}i:7890799;a:8:{s:3:"uid";s:6:"432963";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"1447";s:3:"loc";s:1:"9";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}}s:9:"plateform";s:7:"desktop";}'; </script>
									
							</div>

							<div>
								
								<script language='javascript'>var call_recording_2 = 'a:2:{s:3:"imp";a:2:{i:8766421;a:8:{s:3:"uid";s:6:"739950";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"1586";s:3:"loc";s:1:"9";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}i:8814825;a:8:{s:3:"uid";s:5:"35360";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"4195";s:3:"loc";s:3:"487";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}}s:9:"plateform";s:7:"desktop";}'; </script>

								
							</div>

							<div>	
								<script language='javascript'>var call_recording_3 = 'a:2:{s:3:"imp";a:2:{i:8986739;a:8:{s:3:"uid";s:7:"1086756";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"4014";s:3:"loc";s:4:"1047";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}i:9070842;a:8:{s:3:"uid";s:6:"842712";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"6885";s:3:"loc";s:3:"495";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}}s:9:"plateform";s:7:"desktop";}'; </script>	
							</div>
							<div>	
								<script language='javascript'>var call_recording_4 = 'a:2:{s:3:"imp";a:2:{i:9148805;a:8:{s:3:"uid";s:6:"449999";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"1448";s:3:"loc";s:1:"9";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}i:9180813;a:8:{s:3:"uid";s:7:"1142047";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"4198";s:3:"loc";s:3:"487";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}}s:9:"plateform";s:7:"desktop";}'; </script>
								
							</div>
							<div>	
								<script language='javascript'>var call_recording_5 = 'a:2:{s:3:"imp";a:2:{i:9207668;a:8:{s:3:"uid";s:7:"1003463";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"4510";s:3:"loc";s:4:"4510";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}i:9271598;a:8:{s:3:"uid";s:6:"317434";s:9:"is_active";i:1;s:7:"purpose";s:1:"1";s:4:"type";s:1:"9";s:3:"cat";s:4:"1447";s:3:"loc";s:1:"9";s:8:"superhot";i:1;s:7:"wo_logo";i:1;}}s:9:"plateform";s:7:"desktop";}'; </script>

							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
                <!-- Start Tabs -->
                <div class="tabbable">
                    <ul class="nav nav-tabs" role="tablist">
                        <li  class="">
                            <a href="<?= base_url('home/purchaser_guide')?>" >Purchaser Guide</a>
                        </li>
                        <li class="active">
                            <a href="#buy" data-toggle="tab" aria-expanded="false">Buy</a>
                        </li>
                        <li class="">
                            <a href="#rent" data-toggle="tab" aria-expanded="false">Rent</a>
                        </li>
                    </ul>	
                    <!-- Tab panes --> 
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="buy">
                        	<form method="post" action="<?= base_url('home/plot_buy')?>">
								<div class="row">
									<div class="col-md-6">
										<p>
											<div class="col-md-2">
												<i class="fa fa-map-marker fa-3x"></i>
											</div>
											<div class="col-md-10">
												<select name="city" id="city_id" autocomplete="off">
													<option value="" selected="">Select City</option>
													<?php foreach($cities as $row){?>
														<option value="<?= $row['city_id']?>"><?= $row['city_name']?></option>
													<?php } ?>
												</select>
											</div>
										</p>
										<p>
											<div class="col-md-10 col-md-offset-2" id="society_list" style="display: none;">
												<div class="input">
													<select name="society" id="society" autocomplete="off">
													
													</select>
												</div>
											</div>
										</p>
										<p>
											<div class="col-md-10 col-md-offset-2" id="phase_list" style="display: none;">
												<div class="input">
													<select name="phase" id="phase" autocomplete="off">
													
													</select>
												</div>
											</div>
										</p>
										<p>
											<div class="col-md-10 col-md-offset-2" id="sector_list" style="display: none;">
												<div class="input">
													<select name="sector" id="sector" autocomplete="off">
													
													</select>
												</div>
											</div>
										</p>
									</div>
									<div class="col-md-6">
										<p>
											<div class="col-md-2">
												<img class="fa-3x" style="height:20px; width:20px;" src="<?= base_url('assets/frontend/img/dimension.png')?>">
											</div>
											<div class="col-md-10">
												<select name="type" id="tab_type" autocomplete="off">
													<option value="" data-cval="All Plots" class="sb_type_bold">--------- Plots ---------</option>
													<option value="Residential Plot" class="tabbed">Residential Plots</option>
													<option value="Commercial Plot" class="tabbed">Commercial Plots</option>
													<option value="Agricultural Land" class="tabbed">Agricultural Land</option>
													<option value="Industrial Land" class="tabbed">Industrial Land</option>
													<option value="Plot File" class="tabbed">Plot Files</option>
													<option value="Plot Form" class="tabbed">Plot Forms</option>
												</select>
											</div>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<span class="tp_heading head1 font_s font_r_en small_label" style="color:black">Price Range (Rs)</span> <img src="<?= base_url('assets/frontend/img/info.png')?>">
										</div>
										<div class="rangebox">
										    <div class="col-xs-6 col-md-12">
											<div class="row">
												<div class="input">
													<div class="col-md-2">
														<span class="font_r_en small_label">From</span>
													</div>
													<div class="col-md-9">
														<input id="price_1" class="range" type="text" name="price_from" placeholder="No Min" autocomplete="off" title="title">
													</div>
												</div>
											</div></div>
											<div class="col-xs-6 col-md-12">
											<div class="row">
												<div class="input">
													<div class="col-md-2">
														<span class="font_r_en small_label">To</span>
													</div>
													<div class="col-md-9">
														<input id="price_1" class="range" type="text" name="price_to" Placeholder="No Max" autocomplete="off" title="title">
													</div>
												</div>
											</div></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-4">
												<span class="tp_heading head1 font_s font_r_en small_label">Land Area</span> 
											</div>
											<div class="col-md-6">
												<select name="land_area" id="sb_sel_area" style="width:110px;" autocomplete="off">
													<option value="-1" selected="">Select Unit</option>
													<option value="Sqft">Sqft</option>
													<option value="Sq. Yd">Sq. Yd</option>
													<option value="Sq. M">SSq. M</option>
													<option value="Marla">Marla</option>
													<option value="Kanal">Kanal</option>
												</select>
											</div>
											<div class="col-md-1"><img src="<?= base_url('assets/frontend/img/info.png')?>"></div>
										</div>
										<div class="rangebox">
										    <div class="col-xs-6 col-md-12">
											<div class="row">
												<div class="input">
													<div class="col-md-2">
														<span class="font_r_en small_label">From</span>
													</div>
													<div class="col-md-9">
														<input id="price_1" class="range" type="text" name="land_from" value="" autocomplete="off" title="title">
													</div>
												</div>
											</div></div>
											<div class="col-xs-6 col-md-12">
											<div class="row">
												<div class="input">
													<div class="col-md-2">
														<span class="font_r_en small_label">To</span>
													</div>
													<div class="col-md-9">
														<input id="price_1" class="range" type="text" name="land_to" value="" autocomplete="off" title="title">
													</div>
												</div>
											</div></div>
										</div>
									</div>
								</div>		
								<div class="row">
									<div class="col-md-6 col-md-offset-6">
										<div class="rangebox">
											<button style="background-color: #00aced;" class="btn btn-primary btn-icon" type="submit"><i class="fa fa-search"></i> Find Properties</button>
										</div>
									</div>
								</div>
							</form>
		                </div>
		                
		                
		                
		                <!--          Rent Tabe         -->
		                <div class="tab-pane fade" id="rent">
                        	<form method="post" action="<?= base_url('home/plot_rent')?>">
								<div class="row">
									<div class="col-md-6">
										<p>
											<div class="col-md-2">
												<i class="fa fa-map-marker fa-3x"></i>
											</div>
											<div class="col-md-10">
												<select name="city" id="city_id_rent" autocomplete="off">
													<option value="" selected="">Select City</option>
													<?php foreach($cities as $row){?>
														<option value="<?= $row['city_id']?>"><?= $row['city_name']?></option>
													<?php } ?>
												</select>
											</div>
										</p>
										<p>
											<div class="col-md-10 col-md-offset-2" id="society_list_rent" style="display: none;">
												<div class="input">
													<select name="society" id="society_rent" autocomplete="off">
													
													</select>
												</div>
											</div>
										</p>
										<p>
											<div class="col-md-10 col-md-offset-2" id="phase_list_rent" style="display: none;">
												<div class="input">
													<select name="phase" id="phase_rent" autocomplete="off">
													
													</select>
												</div>
											</div>
										</p>
										<p>
											<div class="col-md-10 col-md-offset-2" id="sector_list_rent" style="display: none;">
												<div class="input">
													<select name="sector" id="sector_rent" autocomplete="off">
													
													</select>
												</div>
											</div>
										</p>
									</div>
									<div class="col-md-6">
										<p>
											<div class="col-md-2">
												<img class="fa-3x" style="height:20px; width:20px;" src="<?= base_url('assets/frontend/img/dimension.png')?>">
											</div>
											<div class="col-md-10">
												<select name="type" id="tab_type" autocomplete="off">
													<option value="" data-cval="All Plots" class="sb_type_bold">--------- Plots ---------</option>
													<option value="Residential Plot" class="tabbed">Residential Plots</option>
													<option value="Commercial Plot" class="tabbed">Commercial Plots</option>
													<option value="Agricultural Land" class="tabbed">Agricultural Land</option>
													<option value="Industrial Land" class="tabbed">Industrial Land</option>
													<option value="Plot File" class="tabbed">Plot Files</option>
													<option value="Plot Form" class="tabbed">Plot Forms</option>
												</select>
											</div>
										</p>										
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<span class="tp_heading head1 font_s font_r_en small_label" style="color:black">Price Range (Rs)</span> <img src="<?= base_url('assets/frontend/img/info.png')?>">
										</div>
										<div class="rangebox">
											<div class="row">
												<div class="input">
													<div class="col-md-2">
														<span class="font_r_en small_label">From</span>
													</div>
													<div class="col-md-9">
														<input id="price_1" class="range" type="text" name="price_from" placeholder="No Min" autocomplete="off" title="title">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="input">
													<div class="col-md-2">
														<span class="font_r_en small_label">To</span>
													</div>
													<div class="col-md-9">
														<input id="price_1" class="range" type="text" name="price_to" Placeholder="No Max" autocomplete="off" title="title">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-4">
												<span class="tp_heading head1 font_s font_r_en small_label" style="color:black">Land Area</span> 
											</div>
											<div class="col-md-6">
												<select name="land_area" id="sb_sel_area" style="width:110px;" autocomplete="off">
													<option value="-1" selected="">Select Unit</option>
													<option value="Sqft">Sqft</option>
													<option value="Sq. Yd">Sq. Yd</option>
													<option value="Sq. M">SSq. M</option>
													<option value="Marla">Marla</option>
													<option value="Kanal">Kanal</option>
												</select>
											</div>
											<div class="col-md-1"><img src="<?= base_url('assets/frontend/img/info.png')?>"></div>
										</div>
										<div class="rangebox">
											<div class="row">
												<div class="input">
													<div class="col-md-2">
														<span class="font_r_en small_label">From</span>
													</div>
													<div class="col-md-9">
														<input id="price_1" class="range" type="text" name="land_from" value="" autocomplete="off" title="title">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="input">
													<div class="col-md-2">
														<span class="font_r_en small_label">To</span>
													</div>
													<div class="col-md-9">
														<input id="price_1" class="range" type="text" name="land_to" value="" autocomplete="off" title="title">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>		
								<div class="row">
									<div class="col-md-6 col-md-offset-6">
										<div class="rangebox">
											<button style="background-color: #00aced;" class="btn btn-primary btn-icon" type="submit"><i class="fa fa-search"></i> Find Properties</button>
										</div>
									</div>
								</div>
							</form>
		                </div>
		            </div>
		        </div>
			</div>
		</div>                      	
	</div>
	<!--<div class="contain-wrapp padding-bot40">
		<div class="container">
			<div style="text-align: center">
				<img src="<?= base_url('assets/frontend/images/stemp-logo1.png')?>" style="width:130px" class="img-responsive" alt="" />
			</div>
		</div>
	</div>-->

	<!-- Slider 
<style type="text/css">
	
</style>
<div class="contain-wrapp padding-bot40">
	<div class="container">
		<div class="customer-logos">
		  	<div class="slide"><img src="<?= base_url('assets/frontend/images/hassan.JPG')?>"></div>
		  	<div class="slide"><img src="<?= base_url('assets/frontend/images/yasin.JPEG')?>"></div>
		  	<div class="slide"><img src="<?= base_url('assets/frontend/images/tabeer.png')?>"></div>
		  	<div class="slide"><img src="<?= base_url('assets/frontend/images/sufyan.jpg')?>"></div>
		</div>				
	</div>
</div>
-->
<br><br><div style="font-size:50px; font-family:all; color:#00aced; text-align: center;line-height:1 !important;">"We Believe in Fair & Transparent Deal"<br><br></div>

	<div class="contain-wrapp padding-bot40">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-heading text-center">
						<p>Popular Locations</strong></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="title">Popular Locations in Plots</div>
				<?php foreach($cities as $row){ ?>
					<div class="col-md-4 col-sm-6">
						<ul>
							<li style="font-size:12px;"><a href="<?= base_url('home/city_posts_plot/'.$row['city_id'])?>"><?= $row['city_name']; ?></a>
								<span>(<?php 
										$this->db->from('post_ads');
										$this->db->where('city',$row['city_id']);
										$this->db->where('property_type','Plots');
										$res = $this->db->get('');
										$query =  $res->num_rows();
										print_r($query);
									?>)</span>
							</li>
						</ul>
					</div>
				<?php } ?>
				
			</div>
			<div class="row">
				<div class="title">Most Popular Locations for Plots</div>
				<div class="col-md-4 col-sm-6">
					<h5 style="font-size: 11px;color: #4a606a;line-height: 17px;">Lahore</h5>
					<?php 
						$this->db->where('city_name','Lahore');
						$res = $this->db->get('city')->row_array();

						$this->db->select('post_ads.city,society.society_id,society.society_name');
						$this->db->distinct();
						$this->db->from('post_ads');
						$this->db->join('society','post_ads.society = society.society_id','left');
						$this->db->where('city',$res['city_id']);
						$this->db->where('property_type','Plots');
						$this->db->limit(6);
						$query = $this->db->get('')->result_array();
					?>

					<ul>
						<?php foreach($query as $rows){?>
							<li><a href="<?= base_url('home/society_posts_plot/'.$rows['society_id'])?>" title="Houses For Sale in DHA Defence">Plots For Sale in <?= $rows['society_name'] ?></a>
								<span>(<?php 
										$this->db->from('post_ads');
										$this->db->where('city',$rows['city']);
										$this->db->where('society',$rows['society_id']);
										$this->db->where('property_type','Plots');
										$res = $this->db->get('');
										$query =  $res->num_rows();
										print_r($query);
									?>)</span>
							</li>
						<?php } ?>
						
					</ul>
				</div>
				<div class="col-md-4 col-sm-6">
					<h5 style="font-size: 11px;color: #4a606a;line-height: 17px;">Karachi</h5>
					<?php 
						$this->db->where('city_name','Karachi');
						$res = $this->db->get('city')->row_array();

						$this->db->select('post_ads.city,society.society_id,society.society_name');
						$this->db->distinct();
						$this->db->from('post_ads');
						$this->db->join('society','post_ads.society = society.society_id','left');
						$this->db->where('city',$res['city_id']);
						$this->db->where('property_type','Plots');
						$this->db->limit(6);
						$query = $this->db->get('')->result_array();
					?>

					<ul>
						<?php foreach($query as $rows){?>
							<li><a href="<?= base_url('home/society_posts_plot/'.$rows['society_id'])?>" title="Houses For Sale in DHA Defence">Plots For Sale in <?= $rows['society_name'] ?></a>
								<span>(<?php 
										$this->db->from('post_ads');
										$this->db->where('city',$rows['city']);
										$this->db->where('society',$rows['society_id']);
										$this->db->where('property_type','Plots');
										$res = $this->db->get('');
										$query =  $res->num_rows();
										print_r($query);
									?>)</span>
							</li>
						<?php } ?>
						
					</ul>
				</div>
				<div class="col-md-4 col-sm-6">
					<h5 style="font-size: 11px;color: #4a606a;line-height: 17px;">Islamabad</h5>
					<?php 
						$this->db->where('city_name','Islamabad');
						$res = $this->db->get('city')->row_array();

						$this->db->select('post_ads.city,society.society_id,society.society_name');
						$this->db->distinct();
						$this->db->from('post_ads');
						$this->db->join('society','post_ads.society = society.society_id','left');
						$this->db->where('city',$res['city_id']);
						$this->db->where('property_type','Plots');
						$this->db->limit(6);
						$query = $this->db->get('')->result_array();
					?>

					<ul>
						<?php foreach($query as $rows){?>
							<li><a href="<?= base_url('home/society_posts_plot/'.$rows['society_id'])?>" >Plots For Sale in <?= $rows['society_name'] ?></a>
								<span>(<?php 
										$this->db->from('post_ads');
										$this->db->where('city',$rows['city']);
										$this->db->where('society',$rows['society_id']);
										$this->db->where('property_type','Plots');
										$res = $this->db->get('');
										$query =  $res->num_rows();
										print_r($query);
									?>)</span>
							</li>
						<?php } ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	
	<!-- Start contain wrapp -->
	<div class="contain-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-heading text-center">
						
						<p>THE MARKET UPDATES</p>
					</div>
				</div>
			</div>
			<!-- Start Pricing -->
			<div class="row marginbot30">	
				<?php foreach($market_updates as $row){?>
				<div class="col-sm-6 col-md-3">
					<div class="centered-icon" style="text-align:center !important;">
						<div class="market"><img class="img-responsive img-thumbnail" style="width:280px; height:275px;" src="<?= base_url('market_updates/'.$row['mu_image'])?>"></div>
						<a style="font-size:20px;font: initial;color:#000;" href="<?= base_url('home/detail_market_update/'.$row['market_update_id'])?>">
							<?php echo substr($row['title'],0,20); ?>...
						</a><br>
						<span>
							<?php $date = explode(' ',$row['mu_created_date']);  echo $date[0]?>
						</span>
						<p>
						<?php echo substr($row['description'],0,30); ?>...
						</p>
						<p><a style="max-width:350px;" href="<?= base_url('home/detail_market_update/'.$row['market_update_id'])?>" class="btn btn-default btn-sm">Read More</a></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->


	<!-- Start contain wrapp -->
	<div class="contain-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-heading text-center">
						
						<p>THE BLOG</p>
					</div>
				</div>
			</div>
			<!-- Start Pricing -->
			<div class="row marginbot30">	
				<?php foreach($blogs as $row){?>
				<div class="col-sm-6 col-md-3">
					<div class="centered-icon" style="text-align:center !important;">
						<div class="market"><img class="img-responsive img-thumbnail" style="width:280px; height:275px;" src="<?= base_url('blog_images/'.$row['blog_image'])?>"></div>
						<a style="font-size:20px;font: initial;color:#000;" href="<?= base_url('home/detail_blog/'.$row['blog_id'])?>">
							<?php echo substr($row['title'],0,20); ?>...
						</a><br>
						<span>
							<?php $date = explode(' ',$row['blog_created_date']);  echo $date[0]?>
						</span>
						<p>
							<?php echo substr($row['description'],0,30); ?>...
						</p>
						<p><a style="max-width:350px;" href="<?= base_url('home/detail_blog/'.$row['blog_id'])?>" class="btn btn-default btn-sm">Read More</a></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->
	
	
<?php include_once('footer.php'); ?>

<script>
$(document).ready(function() {
	$('#tab_type').change(function(){     
        var val=$('#tab_type').val();
		alert(id);
		if(val == "Residential Plot") 
		{
			$("#tab_beds").hide();
		}
		else 
		{
			$("#tab_beds").show();
		}
	})
});

$('#city_id').change(function(){     
	var id = $('#city_id').val();
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

$('#city_id_rent').change(function(){     
	var id = $('#city_id_rent').val();
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_society',
		data: {id:id},
		success: function(data) {
			if(data == "empty") {
				$("#society_list_rent").hide();
			}else {
				$("#society_list_rent").show();
				$("#society_rent").html(data);
			}
		}
	});
}); 

$('#society_rent').change(function(){     
	var id = $('#society_rent').val();
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_phase',
		data: {id:id},
		success: function(data) {
			if(data == "empty") {
				$("#phase_list_rent").hide(); 
			}else {
				$("#phase_list_rent").show();
				$("#phase_rent").html(data);
			}
		}
	});
}); 

$('#society').change(function(){     
	var id = $('#society').val();
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_phase',
		data: {id:id},
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
	var id = $('#phase').val();
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_sector',
		data: {id:id},
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

$('#phase_rent').change(function(){     
	var id = $('#phase_rent').val();
	//alert(id);
	$.ajax({
		type: 'POST',
		url:  '<?php echo base_url(); ?>dashboard/fetech_sector',
		data: {id:id},
		success: function(data) {
			if(data == "empty") {
				$("#sector_list_rent").hide();
			}else {
				$("#sector_list_rent").show();
				$("#sector_rent").html(data);
			}
		}
	});
}); 

</script>