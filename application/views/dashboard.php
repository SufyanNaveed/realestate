<?php include_once('includes/header.php'); ?>

<style>
.morris-hover {
  position:absolute;
  z-index:1000;
}

.morris-hover.morris-default-style {     border-radius:10px;
  padding:6px;
  color:#666;
  background:rgba(255, 255, 255, 0.8);
  border:solid 2px rgba(230, 230, 230, 0.8);
  font-family:sans-serif;
  font-size:12px;
  text-align:center;
}

.morris-hover.morris-default-style .morris-hover-row-label {
  font-weight:bold;
  margin:0.25em 0;
}

.morris-hover.morris-default-style .morris-hover-point {
  white-space:nowrap;
  margin:0.1em 0;
}

svg { width: 100%; }
</style>

	<div class="container pills">
		<h2 >Dashboard</h2>
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
	</div>
	
	<div class="container graph-div">
		<h4>Your Performance (Last 30 days)</h4>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#menu5">Property views</a></li>
			<li><a data-toggle="tab" href="#menu6">Property visits</a></li>
			<li><a data-toggle="tab" href="#menu7">Emails received</a></li>
			<li><a data-toggle="tab" href="#menu8">Phone views</a></li>
		</ul>

		<div class="tab-content">
			<div id="menu5" class="tab-pane fade in active">
				<div class="container">
					<div id="chartContainer" style="height: 300px; width: 100%;"></div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="container recent">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#menu9">My Recent Listing</a></li>
		</ul>

		<div class="tab-content">
			<div id="menu9" class="tab-pane fade in active">
				<br>
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
				
				
				<div class="col-sm-12">
					<div class="col-sm-4">
						<h4 style="color:grey">Total listings: <?= count($post_ads);?></h4>
					</div>
					<div class="col-sm-8">
						<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item disabled">
								  <a class="page-link" href="#" tabindex="-1">Previous</a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="#">1</a>
								</li>
								<li class="page-item">
								  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">3</a>
								</li>
								<li class="page-item">
								  <a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<table class="table-bordered col-sm-12 tb-recent">
					<tr style="background-color:#05a7e5; color:white;">
						<th>ID</th>
						<th>Type</th>
						<th>Location</th>
						<th>Price (PKR)</th>
						<th>Area sqft</th>
						<th>Purpose</th>
						<th>Status</th>
						<th>Listed Date</th>
						<th>Quota</th>
						<th>Image</th>
						<th>Views</th>
						<th>Controls</th>
					</tr>
					
					<?php foreach($post_ads as $row){?>
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
						<td><?= $row['society_name'].', '.$row['phase_name'].', '.$row['sector_name']; ?></td>
						<td><?= $row['all_inclusive']; ?></td>
						<td><?= $row['land_area']; ?></td>
						<td><?= $row['purpose']; ?></td>
						<td>
							<?php if($row['status'] == 0)
							{ echo 'Pending'; }
							else if($row['status'] == 2)
							{ echo 'Rejected';}
							else { echo 'Active'; }
							?>
						</td>
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
									data-post_ads_id="<?= base_url('home/post_detail/'.$row['post_ads_id'])?>"
								<?php } else { ?>
									data-email="<?= $row['email']; ?>" 
									data-cell="<?= $row['phone']; ?>" 
									data-post_ads_id="<?= base_url('home/post_detail/'.$row['post_ads_id'])?>"
								<?php } ?> >
								<img src="<?= base_url('assets/css/images/icon0.png')?>">
							</a>
							<a href="<?= base_url('dashboard/edit_post_listing/'.$row['post_ads_id'])?>"><img src="<?= base_url('assets/css/images/icon2.png')?>"></a>
							<a href="<?= base_url('dashboard/delete_ads/'.$row['post_ads_id'])?>" onclick="return dodelete();"><img src="<?= base_url('assets/css/images/icon3.png')?>"></a>
							
							<?php $next_month = Date("Y-m-d", strtotime($row['hot_ads_updated_date']. "+1 Month")); ?>
							<?php if($row['hot_ads_type'] == 0 && $row['hot_ads_updated_date'] >= date('Y-m-d') || $next_month <= date('Y-m-d')) { ?>
								<a href="<?= base_url('dashboard/update_hot_ads_type/'.$row['post_ads_id'])?>">
									<img src="<?= base_url('assets/css/images/icon9.png')?>"></a>
							<?php } else { ?>
								<img style="width:12px; height:13px;" src="<?= base_url('assets/css/images/fire.png')?>"> 
							<?php } ?>
							
							<?php $super_next_month = Date("Y-m-d", strtotime($row['superhot_ads_updated_date']. "+1 Month")); ?>
							<?php if($row['superhot_ads_type'] == 0 && $row['superhot_ads_updated_date'] >= date('Y-m-d') || $super_next_month <= date('Y-m-d')) { ?><a href="<?= base_url('dashboard/update_superhot_ads_type/'.$row['post_ads_id'])?>"><img src="<?= base_url('assets/css/images/icon5.png')?>"></a><?php } else { ?><img style="width:12px; height:13px;" src="<?= base_url('assets/css/images/fire1.png')?>"> <?php } ?>
							
							<?php if($row['refresh_ads_updated_date'] == date('Y-m-d')) { ?>
								<a   href="<?= base_url('dashboard/update_refresh_ads_type/'.$row['post_ads_id'])?>">
									<img src="<?= base_url('assets/css/images/icon7.png')?>"></a>
							<?php } else {?>
								<a href="<?= base_url('dashboard/update_refresh_ads_type/'.$row['post_ads_id'])?>">
									<img style="width:12px; height:13px;"src="<?= base_url('assets/css/images/refreshing-arrows-couple.png')?>"></a>
							<?php } ?>
							
							<?php if($row['sold_out_status'] == 0) { ?>
								<a href="<?= base_url('dashboard/sold_property/'.$row['post_ads_id'])?>" class="btn btn-primary btn-xs" style="color: #ffffff;">Sell</a>
							<?php } else {?>
								<span class="label label-success btn-xs">Sold</span>
							<?php } ?>
						</td>
					</tr>
					<?php } ?>
				</table>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog" style="width:400px; margin:185px auto;">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">View Details</h4>
						</div>
						<div class="modal-body">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#tab1">Property</a></li>
								<li><a data-toggle="tab" href="#tab2">Landlord</a></li>
								<li><a data-toggle="tab" href="#tab3">Lisitng Owner</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<form method="post" action="javascript:;">
										<br>
										<div class="form-group">
											<div class="col-md-12">
												This Listing Status is: <p id="status"></p> 
											</div>
										</div><br><br>
										<!-- <div id="post_detail_link"></div> -->
										<a class="btn btn-default" id="post_detail_link">View Property Detail</a>
									</form>
								</div>
								<div id="tab2" class="tab-pane fade">
									<div class="form-group">
											<div class="col-md-12">
												<p>No landlord details were submitted by the listing owner.<p>
												<p>Please contact the listing owner for further information. </p>
											</div>
										</div><br><br>
								</div>
								<div id="tab3" class="tab-pane fade">
									<div class="form-group">
											<div class="col-md-12"> 
												<label class="control-label col-sm-3" >Email: </label><span id="email"></span><br><br>
												<label class="control-label col-sm-3" >Cell: </label><span id="phone"></span><br>
											</div>
										</div><br><br> 
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>   
<?php include_once('includes/footer.php'); ?>

<script>

$(".view").click(function(){
	
	var status=$(this).attr("data-status");
	var listing_owner=$(this).attr("data-listing_owner");
	var email=$(this).attr("data-email");
	var cell=$(this).attr("data-cell");
	var post_ads_id=$(this).attr("data-post_ads_id");
	//alert(post_ads_id);
	$('#status').html(status);
	$("#post_detail_link").attr("href", post_ads_id)

	if(listing_owner)
	{
		//alert(listing_owner);
		$.ajax({
			type: 'POST',
			url:  '<?php echo base_url(); ?>dashboard/get_agent_id',
			data: {id:listing_owner},
			success: function(data) {
				if(data == "empty") {;
				}else {
					var myObj = data;
					var obj = JSON.parse(myObj);
					
					$("#phone").html(obj.phone);
					$("#email").html(obj.email);
				}
			}
		});
	}
	else
	{
		$("#phone").html(phone);
		$("#email").html(email);
	}
	
	
	
    $('#myModal').modal('show');
});

</script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: ""
	},
	axisX: {
		valueFormatString: "DD MMM YYYY"
	},
	axisY2: {
		title: "Property Views",
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		verticalAlign: "top",
		horizontalAlign: "center",
		dockInsidePlotArea: true,
		itemclick: toogleDataSeries
	},
	data: [{
		type:"line",
		axisYType: "secondary",
		name: "Super Hot",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "#.###",
		dataPoints: [		
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 }
		]
	},
	{
		type: "line",
		axisYType: "secondary",
		name: "Hot",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "#.###",
		dataPoints: [
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 }
		]
	},
	{
		type: "line",
		axisYType: "secondary",
		name: "Paid",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "#.###",
		dataPoints: [
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 }
		]
	},
	{
		type: "line",
		axisYType: "secondary",
		name: "Free",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "#.###",
		dataPoints: [
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 }
		]
	},
	{
		type: "line",
		axisYType: "secondary",
		name: "All",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "#.###",
		dataPoints: [
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 },
			{ x: <?php date_default_timezone_set("Asia/Karachi"); echo date('Y-m-d') ?>, y: 850 }
		]
	}]
});
chart.render();

function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>