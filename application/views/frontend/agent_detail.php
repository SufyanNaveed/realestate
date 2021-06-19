<?php include('header-3.php'); ?>
<style>

.color_line
{
	background: #f1eded; 
	padding: 10px 0px 10px 15px;
}
.color_line_weight
{
	text-align:right; 
	font-weight:700; 
	color:black;
}
.line
{
	padding: 10px 0px 10px 15px;
}
#image-zoom-wrapper 
{
    margin: 0 auto;
    height: 500px;
    width: 100%;
    overflow: hidden;
}

.titanium-ag-wrp {
    width: 100%;
    position: relative;
    height: 175px;
    margin-bottom: 55px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px;
    border: 1px solid #EAEAEA;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
.titanium-ag-wrp .overlay-wrap {
    width: 100%;
    height: 175px;
    position: absolute;
    z-index: 0;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.56) 10%, transparent 100%);
    background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.56) 10%, transparent 100%);
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.56) 10%, transparent 100%);
}

.titanium-ag-wrp .titanium-ag-inner {
    position: absolute;
    left: 30px;
    bottom: -40px;
}
.titanium-ag-wrp .titanium-ag-inner .c-logo {
    width: 135px;
    height: 135px;
    text-align: center;
    border: 0;
    -webkit-box-shadow: 0px 1px 19px 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 1px 19px 0px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 1px 19px 0px rgba(0, 0, 0, 0.75);
    background-color: #ffffff;
    display: table;
}

.titanium-ag-wrp .titanium-ag-inner .c-logo .helper {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    box-sizing: border-box;
}
.c-logo .helper {
    display: inline-block;
    height: 100%;
    vertical-align: bottom;
}

.titanium-ag-wrp .titanium-ag-inner .ag-name {
    text-transform: capitalize;
    color: #ffffff;
    padding-top: 10px;
    padding-left: 20px;
    padding-right: 20px;
}
.titanium-ag-wrp .titanium-ag-inner .ag-name h4 {
    font-size: 35px;
    font-weight: 700;
    padding-bottom: 1px;
}
</style>
<link href="<?= base_url('assets/frontend/css/zoomify.css')?>" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?= base_url('assets/frontend/css/zoomify.js')?>"></script>

    <div class="container">	
		<div class="contain-wrapp padding-top20" style="padding:20px;">	
			<div class="col-md-12" style="margin-top: -12px;">
				<div style="color:#00aced;"><?= 'Agents  <label style="color:#00aced;">  > 
						</label> '.$agents['city_name'].' <label style="color:#00aced;"> >  
						</label> '.$agents['estate_name'] ?></div>
			</div>
			<div class="col-md-10">
				<div><h4 style="line-height: 12px;" ><?= $agents['username']; ?></h4><span> <?= $agents['city_name']?> , Pakistan</span></div>
			</div>
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<div class="row" style="margin-top: -8px;">
						<div class="detail-product1" style="background: #f5f5f5;border-radius: 2px;     border: solid 1px #ebebeb;padding: 15px;">	
						    <div class="titanium-ag-wrp" style="background-image: url(https://www.zameen.com/zameen/images/agency-islamabad.jpg);">
								<div class="overlay-wrap"></div>
								<div class="titanium-ag-inner">
									<div class="c-logo left">
										<span class="helper">
											<img style="height:110px; width:110px;" src="<?= base_url('profile_images/'.$agents['profile_image'])?>" alt="Mashad Sales &amp; Marketing">
										</span>
									</div>
									<div class="ag-name left">
										<h5 style="color: #fff; font-size:21px;"><?= $agents['estate_name']?></h5>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top20" style="padding:17px 25px;"> 
					<div class="row" style="margin-top: -8px;">
						<div class="ros_new" style="background-color: #ffffff00;">
							<p style="background-color: #fff; padding:10px; font-family: Arial; text-align: center;">EMAIL ENQUIRY FORM</p>
							<div class="row" style="padding: 7px 30px;">
				            	<form method="post" action="<?= base_url('home/agent_email')?>">
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
							                		<div class="col-md-3"><label for="agent">I am a:</label></div>
							                		<div class="col-md-3"><input type="radio" name="am_direct" value="Buyer">Buyer</div>
							                		<div class="col-md-3"><input type="radio" name="am_direct" value="Agent">Agent</div>
							                		<div class="col-md-3"><input type="radio" name="am_direct" value="Other">Other</div>
												</div>
						                	</div>
						            	</div>
							        </div>
							        <div class="row" style="padding-top: 10px;">
						            	<div class="col-md-12">
						            		<div class="input">
							                	<div class="row">
							                		<div class="col-md-6">
						                				<button class="btn btn-picton btn-rectangle btn-success btn-sm" data-toggle="modal" data-target="#myModal">Call <i class="fa fa-phone"></i></button>
				                					</div>
							                		<div class="col-md-6">
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
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<div class="row" style="margin-top: -180px;">
							<div class="detail-product1" style="background: #f5f5f5; padding: 15px;">	
								<div id="pdescription" class="">
									<div style="padding-bottom: 10px; padding-top: 10px; background-color:black;"><a class="btn btn-info" style="margin-left:8px; padding:3px 5px; border-radius:7px; color:white"><h5><span class="fa fa-home"></span> Overview</h5></a></div><br>
									<div style="padding-bottom: 10px;">
										<div style="padding-bottom: 10px; margin-left: 10px;"><h5>Detail</h5></div><br>
										<div class="row">
											<div class="col-md-12">
												<span class="col-sm-3 color_line color_line_weight">Sold Properties : </span>
												<span class="col-sm-7 color_line">
													<?php 
														$this->db->from('post_ads');
														$this->db->where('user_id',$agents['user_id']);
														$this->db->where('sold_out_status',1);
														$res = $this->db->get();
														echo $count = $res->num_rows();
													?>	
												</span>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<span class="col-sm-3 line color_line_weight">Rental Properties : </span>
												<span class="col-sm-7 line">
													<?php 
														$this->db->from('post_ads');
														$this->db->where('user_id',$agents['user_id']);
														$this->db->where('purpose','Rent');
														$res = $this->db->get();
														echo $count = $res->num_rows();
													?></span>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12">
												<span class="col-sm-3 color_line color_line_weight">Work Experience : </span>
												<span class="col-sm-7 color_line"><?php if($agents['work_experience']){ echo $agents['work_experience'];}else{ echo '--';}?></span>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<span class="col-sm-3 line color_line_weight">Designation : </span>
												<span class="col-sm-7 line"><?php if($agents['designation']){ echo $agents['designation'];}else{ echo '--';} ?></span> 
											</div>
										</div>
									</div>
									<hr>
									<h5>Description:</h5><?= $agents['about_self']; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4" style="padding:17px 25px; width: 32%; "> 
						<div class="row" style="margin-top: -8px; border: solid #eee;">
							<div class="ros_new" style="background-color: #ffffff00;">
								<h6 style="background-color: #fff; border-bottom: 1px solid #e0e2e4; 
								margin-bottom: 0px; padding:10px; font-family: Arial; text-align: center;">
									Agent Information</h6>
								<div class="row" style="padding: 7px 30px;">
					            	<img src="<?= base_url('profile_images/'.$agents['profile_image'])?>" class="alignleft" alt="">
									<span style="margin: 37px 70px 7px 0px;" class="user-profile"><i class="fa fa-user"></i> <?= $agents['username']?></span>
								</div>
							</div>
						</div>
					</div>
				</div>			
			</div>			
		</div>
	</div> 

	
<?php include_once('detail-footer.php')?>

