<?php include('header.php'); ?>
<?php if($agents){ ?>
    <!-- End Navigation -->
	<div class="contain-wrapp padding-top10" style="margin-bottom:0px;">	
		<div class="container">
			<div class="col-md-12">
				<div style="color:#00aced;">
					<?= 'Agents <label style="color:#00aced;"> » 
						</label> '.$agents[0]['city_name'] ?>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<p>
							<strong>
								<span style="color:#00aced; line-height: 50px;">
									<?= count($agents)?> Property Agents in <?= $agents[0]['city_name'] ?>  
								</span>  
								<span class="sb_loc_arw bgl">&nbsp;</span>
							</strong> 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<section style="padding-bottom: 50px; margin-top:-45px;"> 
		<div class="container">
			<?php foreach($agents as $key=>$row){?>
			<div class="row">
				<div class="detail-page">
					<div class="col-sm-12">
						<a href="<?= base_url('home/agent_detail/'.$row['user_id'])?>"> 
							<div class="details_product" style="padding-top:20px; padding-bottom:10px;">
							<div class="col-xs-12 col-md-2 list-item">
								<img style="height:150px; width:170px; padding-left: 20px;" src="<?= base_url('profile_images/'.$row['profile_image'])?>" class="img img-responsive"/>
							</div>
							<div class="bottom-details">
								<div class="col-md-8">
									<div class="col-md-12" >
										<h6><a href="<?= base_url('home/agent_detail/'.$row['user_id'])?>"><?= $row['estate_name']?> - <?= $row['city_name']?></a></h6>
										<span><a href="<?= base_url('home/agent_detail/'.$row['user_id'])?>"> Number Of Properties In Islamabad : 
											<strong>
												<?php 
												$this->db->from('post_ads');
												$this->db->where('city',$row['city']);
												$this->db->where('user_id',$row['user_id']);
												$res = $this->db->get('');
												$query =  $res->num_rows();
												print_r($query);
												?>
											</strong>
										</span></a><br>
										<span><a href="<?= base_url('home/agent_detail/'.$row['user_id'])?>"> Total Number of Properties : 
											<strong>
												<?php 
												$this->db->from('post_ads');
												$this->db->where('user_id',$row['user_id']);
												$res = $this->db->get('');
												$query =  $res->num_rows();
												print_r($query);
												?>
											</strong>
										</span></a><br><br>
										<span style="color:black;"> <?= substr($row['about_self'],0,200); ?> ... <a href="<?= base_url('home/agent_detail/'.$row['user_id'])?>">More</a>
										</span>
									</div>					
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<br>
									<a href="#" class="btn btn-primary btn-icon btn-block btn-steel" data-toggle="modal" data-target="#myModal"><i class="fa fa-phone"></i> View Number</a>
									<a href="#" class="btn btn-primary btn-icon btn-block btn-turquoise" data-toggle="modal" data-target="#myModel"><i class="fa fa-envelope"></i> Send Email</a>
								</div>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    	<!-- Modal content-->
			      	<div class="modal-content">
			        	<!-- <div class="modal-header">
			          		<button type="button" class="close" data-dismiss="modal">&times;</button>
			          		<h4 class="modal-title">Contact Us</h4>
			        	</div> -->
			        	<div class="modal-body" style="text-align: center;">
			          		<h5>Contact Detail</h5><hr>
			          		<p><span><strong>Mobile: </strong></span> <?= $row['phone']; ?></p><hr>
			          		<p><span><strong>Phone: </strong></span> <?= $row['cell']; ?></p><hr>
			          		<p><span><strong>Fax: </strong></span> <?= $row['fax']; ?></p><hr>
			          		<p><span><strong>Agent Name: </strong></span> <?= $row['username']; ?></p><hr>
			       		</div>
				        <div class="modal-footer">
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
			      	</div>
			    </div>
		  	</div>
			<?php } ?>
		</div>
	</section>
	
	<div class="modal fade" id="myModel"  tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" action="<?= base_url('home/agent_email')?>">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" style="color: #00aced;background-color: #fff;border-radius: 50%;padding: 0px 7px;opacity: 1; outline: none;" title="close"><span aria-hidden="true" style="font-size: 35px;">×</span></button>
						<h5 class="modal-title" style="color:#fff">EMAIL ENQUIRY FORM</h5>
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
						<input type="hidden" name="city" value="<?= $agents[0]['city']?>">
						<div style="text-align: center">
							<button class="btn btn-picton btn-rectangle" style="background-color: #00aced; class="btn btn-primary btn-sm" type="submit">Send Email <i class="fa fa-envelope"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
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