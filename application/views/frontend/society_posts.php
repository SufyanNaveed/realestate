<?php include('header.php'); ?>
<?php if($posts){ ?>
    <!-- End Navigation -->
	<div class="contain-wrapp padding-top10">	
		<div class="container">
			<div class="col-md-12">
				<div style="color:#00aced;">
					<?php if($posts[0]['purpose'] !== "Rent") {?>
						<?= $posts[0]['property_type'].'s <label style="color:#00aced;"> » 
						</label> '.$posts[0]['city_name'].' <label style="color:#00aced;"> » 
						</label> '.$posts[0]['society_name'].' <label style="color:#00aced;"> » 
						</label> All '.$posts[0]['property_type'].'s'?>
					<?php } else {?>
						<?= $posts[0]['purpose'].'s <label style="color:#00aced;"> » 
						</label> '.$posts[0]['city_name'].' <label style="color:#00aced;"> » 
						</label> '.$posts[0]['society_name'].' <label style="color:#00aced;"> » 
						</label> All '.$posts[0]['purpose'].'s'?>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading text-left">
						<p>
							<strong>
								<span style="color:#00aced; line-height: 50px;">
									<?php if($posts[0]['purpose'] !== "Rent") {?>
										<?= count($posts)?> <?= $posts[0]['property_type'] ?> 
										For <?= $posts[0]['purpose'] ?> in  <?= $posts[0]['society_name'] ?>
									<?php } else {?>
										<?= count($posts)?> Results 
										For <?= $posts[0]['purpose'] ?> in  <?= $posts[0]['society_name'] ?>
									<?php } ?>
								</span>  
								<span class="sb_loc_arw bgl">&nbsp;</span>
							</strong>
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="contain-wrapp" style="margin-top:-70px;">	
		<div class="container">
			<div class="row">
				<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
					<div class="heading">
						<?php if($posts[0]['purpose'] !== "Rent") {?>
							Locations of <?= $posts[0]['property_type'] ?> 
							For <?= $posts[0]['purpose'] ?> in  <?= $posts[0]['society_name'] ?>
						<?php } else {?>
							Locations For <?= $posts[0]['purpose'] ?> in  <?= $posts[0]['society_name'] ?>
						<?php } ?>
					</div>
					<div class="contain-wrapp padding-top20 padding-bot20">	
						<div class="row">
							<div class="cat_box" style="padding-left: 10px">
								<ul class="smaps_list">		
									<?php 
										$this->db->where('society_id',$posts[0]['society_id']);
										$this->db->order_by('phase_name','asc');
										$res = $this->db->get('phase')->result_array();
									
									foreach($res as $row) { ?>
										<?php if($posts[0]['purpose'] != "Rent"){?>
											<?php if($posts[0]['property_type'] == "Plots"){?>
												<li class="l"><a href="<?= base_url('home/phase_posts_plot/'.$row['phase_id'])?>"><?= $row['phase_name'] ?></a>
													(<?php $this->db->where('phase',$row['phase_id']);
													$this->db->where('property_type','Plots');
													$res = $this->db->get('post_ads');
													echo $counting = $res->num_rows(); ?>)
												</li>
											<?php } else if($posts[0]['property_type'] == "Homes"){?>
												<li class="l"><a href="<?= base_url('home/phase_posts_home/'.$row['phase_id'])?>"><?= $row['phase_name'] ?></a>
													(<?php $this->db->where('phase',$row['phase_id']);
													$this->db->where('property_type','Homes');
													$res = $this->db->get('post_ads');
													echo $counting = $res->num_rows(); ?>)
												</li>
											<?php } else if($posts[0]['property_type'] == "Commercial"){?>
												<li class="l"><a href="<?= base_url('home/phase_posts_commercial/'.$row['phase_id'])?>"><?= $row['phase_name'] ?></a>
													(<?php $this->db->where('phase',$row['phase_id']);
													$this->db->where('property_type','Commercial'); 
													$res = $this->db->get('post_ads');
													echo $counting = $res->num_rows(); ?>)
												</li>
											<?php } ?>
										<?php } else { ?>
											<li class="l"><a href="<?= base_url('home/phase_posts_rent/'.$row['phase_id'])?>"><?= $row['phase_name'] ?></a>
												(<?php $this->db->where('phase',$row['phase_id']);
												$this->db->where('purpose','Rent');
												$res = $this->db->get('post_ads');
												echo $counting = $res->num_rows(); ?>)
											</li>
										<?php }?>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>


	<section style="padding-bottom: 50px;">
		<div class="container">
			<?php foreach($posts as $key=>$row){?>
			<div class="row">
				<div class="detail-page">
					<div class="col-sm-12">
						<div class="details_product" style="padding-top:10px; padding-bottom:10px;">
							<div class="col-xs-12 col-md-5 list-item">
								<?php if($row['superhot_ads_type'] == 1){?>
									<span class="product-label">Super Hot</span>
								<?php }else if($row['hot_ads_type'] == 1) {?>
									<span class="product-label">Hot</span>
								<?php }else { }?>
								<div class="demo">
									<ul id="lightSlider<?php if($key > 0){ echo $key; }else { } ?>">
										<?php $images = explode(',',$row['ads_images']);?>
										<?php foreach($images as $image){?>
										<li data-thumb="<?= base_url('assets/frontend/img/'.$image)?>">
											<img  src="<?= base_url('assets/frontend/img/'.$image)?>" class="img img-responsive"/>
										</li>
										<?php } ?>
									</ul>
								</div>
								<span class="product-label1"><i class="fa fa-camera"></i><?php count($images); ?></span>
							</div>
							<div class="bottom-details">
								<div class="col-md-7">
									<div class="display:none;"></div>
									<div class="col-md-12" id="details">
										<div class="row">
											<span class="l mega_hot_title" id="ls_title_11122347" style="dislay:block;  " title="2540 Double Story House For Sale Ghauri Town"><?= $row['property_title']; ?></span>
											<span class="r price orng ltr p_div"> Rs <?= $row['all_inclusive']; ?></span>
										</div>
										<h4><?= $row['society_name'].','.$row['phase_name'].','.$row['sector_name'] ?></h4>
										
										<?php if($posts[0]['purpose'] != "Rent"){?>
											<?php if($row['property_type'] == "Homes") { ?>
												<div class="dow_feat_box">
													<img src="<?= base_url('assets/frontend/img/sleeping-bed-silhouette.png')?>"><span><?= $row['bedroom']; ?></span>
													<img src="<?= base_url('assets/frontend/img/bath-tub.png')?>"><span><?= $row['bathroom']; ?></span> 
													<img style="height:20px; width:30px;" src="<?= base_url('assets/frontend/img/dimension.png')?>"><span><?= $row['land_area']; ?></span>
												</div> 
											<?php } elseif($row['property_type'] == "Plots"){?>
												<div class="dow_feat_box">
													<img style="height:20px; width:30px;" src="<?= base_url('assets/frontend/img/dimension.png')?>"><span><?= $row['land_area']; ?></span>
												</div>
											<?php } elseif($row['property_type'] == "Commercial") { ?>
												<div class="dow_feat_box">
													<?php if($row['bedroom']){?>
														<img src="<?= base_url('assets/frontend/img/sleeping-bed-silhouette.png')?>"><span><?= $row['bedroom']; ?></span>
													<?php } ?>
													<?php if($row['bathroom']){?>
														<img src="<?= base_url('assets/frontend/img/bath-tub.png')?>"><span><?= $row['bathroom']; ?></span> 
													<?php } ?>
													<?php if($row['land_area']){?>
														<img style="height:20px; width:30px;" src="<?= base_url('assets/frontend/img/dimension.png')?>"><span><?= $row['land_area']; ?></span>
													<?php } ?>
												</div> 
											<?php } ?>
										<?php } else { ?>
												<div class="dow_feat_box">
													<?php if($row['bedroom']){?>
														<img src="<?= base_url('assets/frontend/img/sleeping-bed-silhouette.png')?>"><span><?= $row['bedroom']; ?></span>
													<?php } ?>
													<?php if($row['bathroom']){?>
														<img src="<?= base_url('assets/frontend/img/bath-tub.png')?>"><span><?= $row['bathroom']; ?></span> 
													<?php } ?>
													<?php if($row['land_area']){?>
														<img style="height:20px; width:30px;" src="<?= base_url('assets/frontend/img/dimension.png')?>"><span><?= $row['land_area']; ?></span>
													<?php } ?>
												</div> 
										<?php } ?>
										
										<img style="height:150px; width:150px;" src="<?= base_url('profile_images/habro6.png')?>" class="alignright" alt="">
										
										<br><p><?= substr($row['description'],0,100); ?><a href="<?= base_url('home/post_detail/'.$row['post_ads_id'])?>">..more</a></p>
										
									</div>
									<div class="col-md-8" id="leftt" style="font-size: 10px; line-height: 5px">
										<p>Added: <?php  $date = explode(' ',$row['post_ads_created_date']); echo $date[0]; ?> <?php if($row['edited'] == 1){?>(updated)<?php } else {}?></p>
										<p>Marketing By: <?= $row['username']; ?></p>
										<div class="col-md-5">
											<a href="<?= base_url('home/post_detail/'.$row['post_ads_id'])?>" class="btn btn-primary btn-icon btn-block btn-christine"><i class="fa fa-search"></i> View Detail</a>
										</div>
										
									</div>
									<div class="col-md-4" id="rightt" style="float:right;">
										
											<!-- <span class="ls_fea_agent" onmousemove="overlib_info(this,&quot;If you are interested in appearing as a Trusted Agent then contact us or simply give us a call on 0800-ZAMEEN (92633)&quot;)" title=""></span> -->
											<script type="text/javascript">
												$(document).ready(function(){
												    $("#show").click(function(){
												        $(".contact_no").show();
												        $("#show").hide();
												    });
												    $(".contact_no").hide();
												});
												$(document).ready(function(){
												    $("#show1").click(function(){
												        $(".contact_no1").show();
												        $("#show1").hide();
												    });
												    $(".contact_no1").hide();
												});
											</script>
											<style>
												.tooltiptext
												{
													
													visibility: hidden;
												    width: 230px;
												    background-color: black;
												    color: #fff;
												    text-align: center;
												    border-radius: 6px;
												    padding: 5px 0;
												    left:0px;
												    bottom: 60px;
												    color:#fff;
												    font-size: 10px;
												    padding:10px;
												    /* Position the tooltip */
												    position: absolute;
												    z-index: 1;
												    cursor: pointer;

												}
												.tooltiptext label{
													color:#fff;
													text-align: left;
												}

												.contact_no:hover .tooltiptext {
													    visibility: visible;
													    cursor: pointer;
													}
													.contact_no1:hover .tooltiptext {
													    visibility: visible;
													    cursor: pointer;
													}
											</style>
										<div style="padding-top:30px;">
											
											<span class="contact_no" ><b><?php if($row['post_phone']){ echo $row['post_phone']; } else { echo $row['user_phone']; }?></b> <i class="fa fa-info-circle"></i>
												<span class="tooltiptext">
													<div id="ui-tooltip-6" role="tooltip" class="ui-tooltip ui-widget ui-corner-all ui-widget-content ttg ls_num_i">
														<div class="ui-tooltip-content">
															<div class="cont_overlib_info">
																<label class="clr l">Contact Person:</label>
																<span class="r"><?= $row['contact_person'] ?></span>
																<label class="clr l">Cell:</label>
																<span class="r "><?php if($row['post_phone']){ echo $row['post_phone']; } else { echo $row['user_phone']; }?></span>
																<label class="clr l">Phone:</label>
																<span class="r"><?php if($row['post_cell']){ echo $row['post_cell']; } else { echo $row['user_cell']; }?></span>
															</div>
														</div>
														<div class="bgc tt_arrow"></div>
													</div>
												</span>
											</span>
											<a id="show" class="btn btn-primary btn-icon btn-block btn-steel"><i class="fa fa-phone"></i> View Number</a>
											<a hclass="btn btn-primary btn-icon btn-block btn-turquoise" data-toggle="modal" data-target="#myModel"><i class="fa fa-envelope"></i> Send Email</a>
										</div>					
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			
			<?php if(count($posts) > 20){?>
			<div class="row">
				<nav>
					<ul class="pagination pagination-center pagination-lg">
						<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
					</ul>
				</nav>
			</div>
			<?php } ?>
		</div>
	</section>
	
	<div class="modal fade" id="myModel"  tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" action="<?= base_url('home/email')?>">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" style="color: #00aced;background-color: #fff;border-radius: 50%;padding: 0px 7px;opacity: 1; outline: none;" title="close"><span aria-hidden="true" style="font-size: 35px;">×</span></button>
						<h5 class="modal-title" style="color:#fff">Contact Us</h5>
					</div>
					<div class="modal-body">
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
						<!-- Mobile -->
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
						<!-- Phone -->
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
						
						<div style="text-align: center">
							<button class="btn btn-picton btn-rectangle" style="background-color: #00aced; class="btn btn-primary btn-sm" type="submit">Send Email <i class="fa fa-envelope"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } else{ ?>
	<div class="container padding-top40 padding-bot40">
		<div style="font-size:50px; font-family:all; color:#00aced; text-align: center;">Record Not Found.</div>
	</div>
<?php } ?>	
<script>
$(".get_post_id").click(function(){
	var id=$(this).attr("data-id");
	alert(id)
	$('#post_id').val(id);
	
    $('#myModal').modal('show');
});
</script>
<?php include('search-footer.php'); ?>