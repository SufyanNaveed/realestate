<?php include('header-2.php'); ?>


<div class="container">
	<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
		<div class="heading"> Browse Society Maps By Location</div>
		<div class="contain-wrapp padding-top20 padding-bot20">	
			<div class="row">
				<div class="catbox">
					<div class="l more_popular_head gray1 h">Browse Society Maps By Location </div>
						<ul class="smaps_list">
							<?php foreach($city as $row){?>
								<li class="l">
									<a href="<?= base_url('home/society_maps/'.$row['city_id'])?>"><?= $row['city_name']?></a> 
									<span class="cat_box_cats_counts">
										(<?php  	
										//$this->db->group_by('society_id');
	        							$this->db->select('*');
										$this->db->from('maps');
										$this->db->where('city_id',$row['city_id']);
										$res= $this->db->get();
										echo $res->num_rows();
										?>)
									</span>
								</li>
							<?php } ?>
						</ul>
			
						<div class="l more_popular_head gray1 h">Most Viewed Maps</div>
			
						<ul class="smaps_list_mv">
							<li class="l li">
								<label class="label">Lahore</label>
								<?php  	
								$this->db->select('*');
								$this->db->from('society');
								$this->db->where('city_id',3);
								$this->db->order_by('society_id','desc');
								$this->db->limit(10);
								$res = $this->db->get()->result_array();?>
								<?php foreach($res as $row){?>		
									<a href="<?= base_url('home/society_maps/'.$row['city_id'])?>" title="<?= $row['society_name']?>"><?= $row['society_name']?></a><br>
								<?php } ?>
							</li>
							<li class="l li">
								<label class="label">Karachi</label>
								<?php  	
								$this->db->select('*');
								$this->db->from('society');
								$this->db->where('city_id',8);
								$this->db->order_by('society_id','desc');
								$this->db->limit(10);
								$res = $this->db->get()->result_array();?>
								<?php foreach($res as $row){?>		
									<a href="<?= base_url('home/society_maps/'.$row['city_id'])?>" title="<?= $row['society_name']?>"><?= $row['society_name']?></a><br>
								<?php } ?>
							</li>
							<li class="l li">
								<label class="label">Islamabad</label>
								<?php  	
								$this->db->select('*');
								$this->db->from('society');
								$this->db->where('city_id',7);
								$this->db->order_by('society_id','desc');
								$this->db->limit(10);
								$res = $this->db->get()->result_array();?>
								<?php foreach($res as $row){?>		
									<a href="<?= base_url('home/society_maps/'.$row['city_id'])?>" title="<?= $row['society_name']?>"><?= $row['society_name']?></a><br>
								<?php } ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
	<!-- End contain wrapp -->
<!-- Start contain wrapp -->
<div class="container">
	<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
		<div class="heading"> New Society Maps</div>
			<div class="contain-wrapp padding-bot40">
				<div class="row">
					<div class="col-md-12 owl-column-wrapp" style="padding:0px 60px">
						<div class="recent-4column owl-carousel owl-theme">
							<?php foreach($maps as $rows){?>
							<div class="item">
								<div class="team-wrapper">
									<div class="img-wrapper">
										<img src="<?= base_url('maps/'.$rows['map_image'])?>" class="img-responsive" alt="" />
									</div>
									<div class="team-content">
										<a><?= $rows['society_name']?></a>
										<p class="team-position"><?= $rows['city_name']?></p>
										<a href="<?= base_url('home/view_map/'.$rows['society_id'])?>" class="btn btn-primary btn-icon btn-christine">See More </a>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->


<div class="container">
	<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
		<div class="heading"> Overview: About Habro Society Maps</div>
		<div class="contain-wrapp padding-top20 padding-bot20">		
			<div class="tab_disc">
				<span class="tab_images r"></span>
				habrorealestate.com is <b>Pakistan’s No. 1 property portal</b> 
				and plays a central role in the development of the property sector
				of the country. The portal always remains on the lookout for 
				improved services and launches new features that enhance its 
				users’ experience. <br>
				<br>Habro Real Estate Maps is yet another special feature of the 
				website aimed at providing <b>society maps of Pakistan</b> to 
				Pakistani property enthusiasts around the world. The section is 
				full of high-quality maps of hundreds of major societies around
				the country. <br><br>Using the Maps Section, you can easily view
				the master plans of societies and also the locations of your 
				properties in any particular society. Rest assured, all the maps 
				featured in this section are high quality, and you just need to 
				zoom in on the maps using the interactive interface at the 
				bottom of every map display panel.<br><br>To bring ease of use 
				to the users, the Habro Real Estate Maps Section features maps 
				by cities, allowing you to easily browse the maps of societies 
				in your city of choice. Currently, the section displays maps from 
				societies in Lahore, Karachi, Islamabad, Rawalpindi, Faisalabad, 
				Multan, Sheikhupura, Peshawar, Gujranwala, Kasur, Sargodha and 
				Thatta, but we look forward to making more additions in future 
				to increase the utility of the section.<br><br>The ‘Most Viewed 
				Maps’ section of Habro Real Estate Maps displays societies in 
				Lahore, Karachi and Islamabad whose maps get the most views. 
				This feature also allows you to see which areas are popular 
				among property buyers and sellers.  <br>We update the <b>Maps 
				of Projects in Pakistan</b> regularly and upload new maps as 
				soon as they become available to us. When we upload any new maps
				to the website, the Maps Section displays them under the ‘New 
				Society Maps’ tab. This features allows the users to see the 
				maps of societies uploaded recently. <br>Habro Real Estate.com
				is all about revolutionising the real estate industry and its
				Maps Section is further evidence of the portal’s aim to bring
				radical changes to the property landscape. <br><br>The maps you
				see in this section are not just simple scanned images of 
				society maps. We process the soft copies of the maps using 
				special software and then upload them to the website, which 
				allows for plot numbers to be clearly visible while keeping 
				the files small and nimble enough to be opened easily on slower
				connections. <br>While viewing a society map, you will see some
				buttons on the bottom display panel. Using these buttons, you can
				zoom in and zoom out of the maps or pan right, left, up or down 
				when zoomed in on any map. Furthermore, you can also use the cursor
				to pan across the map. <br><br>The whole section is full of 
				effective and easy-to-use features. We have a dedicated team
				that looks after Habro Real Estate Maps and keeps this section
				updated to provide you with all the society maps in one convenient
				location. We exist to serve and facilitate the beautiful business
				of real estate, and this is another way for us to do that.
			</div>
		</div>
	</div>
</div>



<?php include('map-footer.php'); ?>