<?php include_once('header.php'); ?>

	<div class="contain-wrapp padding-bot40" >
		<div class="container">
			<div class="col-md-4">
				<div class="bmargin loc_container ros_new vs1p" style="background-color: #ffffff00"> 
					<div class="arrow arrowTop"><span class="arrowIcon">&nbsp;</span></div>
					<div class="loc_slider lt_slide vs1 vs_a rsDefault" style="height:146px;">
						<?php $counter = 0;
							for($i=0; $i< (count($cities)/3); $i++){  ?>
							<div>
								<?php for($y=0; $y <3; $y++){ if(($counter/3) != (count($cities)/3)) {?>
									<a href="<?= base_url('home/city_posts_agent/'.$cities[$counter]['city_id'] )?>"><?= $cities[$counter]['city_name'] ?>
									<span class='r count'>
										(<?php 
											$this->db->from('user');
											$this->db->where('city',$cities[$counter]['city_id']);
											$this->db->where('user_role',1);
											$res = $this->db->get('');
											$query =  $res->num_rows();
											print_r($query);
										?>)
									</span></a>
									<?php  $counter++; ?>
								<?php } else { ?> 
									<?php break; ?>
								<?php  }} ?>
							</div>
						<?php } ?>
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
				<div class="ros_new" style="background-color: #ffffff00;">
					<h4 style="background-color: #fff; padding:10px; color:#00aced; font-family: Arial"><i class="fa fa-search"></i> Find Real Estate Agents in Pakistan	</h4>
					<form method="post" action="<?= base_url('home/agent_search')?>">
						<div class="row" style="padding:30px;">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-2">
										<i class="fa fa-map-marker fa-3x"></i>
									</div>
									<div class="col-md-10">
										<select name="city" id="city_id" autocomplete="off">
											<option value="" selected="">Select City</option>
											<?php foreach($cities as $row) { ?>
												<option value="<?= $row['city_id']?>" ><?= $row['city_name']?></option>
											<?php } ?>
										</select> 
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<!--<div class="row">
									<div class="col-md-2">
										<i class="fa fa-home fa-3x"></i>
									</div>
									<div class="col-md-10">
										<div class="input" style=" margin: 0px;">
											<input type="text" class="form-control" name="estate_name" placeholder="Company" />
										</div>
									</div>
								</div>-->
							</div>
						</div>
						<div class="row" style="padding:10px;">
							<div class="col-md-6 col-md-offset-4">
								<div class="rangebox">
									<button style="background-color: #00aced;" class="btn btn-primary btn-icon" type="submit"><i class="fa fa-search"></i> Find Agents</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
		<div class="container">
			<div class="row">
				<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
					<div class="heading"> Browse Estate Agents</div>
					<div class="contain-wrapp padding-top20 padding-bot20">	
						<div class="row">
							<div class="cat_box" style="padding-left: 10px">
								<ul class="smaps_list" style="margin-left:5px;">		
									<?php foreach($cities as $row) { ?>
										<li class="l">
											<a href="<?= base_url('home/city_posts_agent/'.$row['city_id'])?>"><?= $row['city_name'] ?></a> 
											(<?php 
												$this->db->from('user');
												$this->db->where('city',$row['city_id']);
												$this->db->where('user_role',1);
												$res = $this->db->get('');
												$query =  $res->num_rows();
												print_r($query);
											?>)
										</li>	
									<?php } ?>		
								</ul>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
		
	

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