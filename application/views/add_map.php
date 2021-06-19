<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
			
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/maps')?>">Maps</a></li>
				<li>Add Map</li>				
			</ol>
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Add Map</a> 
				</li>
			</ul>
				
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
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
					
					<br>
					<br>
					<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url('dashboard/insert_map')?>">
						<div class="form-group">
							<label class="control-label col-sm-3">City Name:*</label>
							<div class="col-md-4">
								<select name="city_id" id="city_id" required class="form-control" style="background-color:white;">
									<option value="">Select City</option>
									<?php foreach($cities as $row){?>
									<option value="<?= $row['city_id']?>"><?= $row['city_name']?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						
						<div class="form-group" id="society" style="display:none;">
							<label class="control-label col-sm-3">Society Name:*</label>
							<div class="col-md-4">
								<select name="society_id" id="society_id" required class="form-control"  style="background-color:white;">
								
								</select>
							</div> 
						</div>
						
						<div class="form-group" id="phase" style="display:none;">
							<label class="control-label col-sm-3">Phase Name:*</label>
							<div class="col-md-4">
								<select name="phase_id" id="phase_id" required class="form-control"  style="background-color:white;">
								
								</select>
							</div> 
						</div>
						
						<div class="form-group" id="sector" style="display:none;">
							<label class="control-label col-sm-3">Sector Name:*</label>
							<div class="col-md-4">
								<select name="sector_id" id="sector_id" class="form-control"  style="background-color:white;">
								
								</select>
							</div> 
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Title:*</label>
							<div class="col-md-4">
								<input type="text" name="title" required class="form-control" placeholder = "Enter Title">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Select Map:*</label>
							<div class="col-md-4">
								<input type="file" name="map" class="form-control">
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="control-label col-sm-3"></label>
							<div class="col-md-4">
								<button class="btn btn-info">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>
<script>
$('#city_id').change(function(){     
	var id= $('#city_id').val();
	//alert(id);
		$.ajax({
			type: 'POST',
			url:  '<?php echo base_url(); ?>dashboard/fetech_society',
			data: {id:id},
			success: function(data) {
				if(data == "empty") {
					alert("No Found.")
				}else {
					$("#society").show();
					$("#society_id").html(data);
				}
			}
		});
	});

$('#society_id').change(function(){     
	var id= $('#society_id').val();
	//alert(id);
		$.ajax({
			type: 'POST',
			url:  '<?php echo base_url(); ?>dashboard/fetech_phase',
			data: {id:id},
			success: function(data) {
				if(data == "empty") {
					alert("No Found.")
				}else {
					$("#phase").show();
					$("#phase_id").html(data);
				}
			}
		});
	});

$('#phase_id').change(function(){     
	var id= $('#phase_id').val();
	//alert(id);
		$.ajax({
			type: 'POST',
			url:  '<?php echo base_url(); ?>dashboard/fetech_sector',
			data: {id:id},
			success: function(data) {
				if(data == "empty") {
					alert("No Found.")
				}else {
					$("#sector").show();
					$("#sector_id").html(data);
				}
			}
		});
	});
</script>