<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
			
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/maps')?>">Maps</a></li>
				<li>Edit Map</li>				
			</ol>
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Edit Map</a> 
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
					<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url('dashboard/update_map')?>">
						<div class="form-group">
							<label class="control-label col-sm-3">City Name:*</label>
							<div class="col-md-4">
								<select name="city_id" id="city_id" class="form-control" style="background-color:white;">
									<option value="<?= $maps['map_city']?>"><?= $maps['city_name']?></option>
									<?php foreach($cities as $row){?>
									<option value="<?= $row['city_id']?>"><?= $row['city_name']?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						
						<div class="form-group" id="society">
							<label class="control-label col-sm-3">Society Name:*</label>
							<div class="col-md-4">
								<select name="society_id" id="society_id" class="form-control"  style="background-color:white;">
									<option value="<?= $maps['map_society']?>"><?= $maps['society_name']?></option>
									
								</select>
							</div> 
						</div>
						
						<div class="form-group" id="phase">
							<label class="control-label col-sm-3">Phase Name:*</label>
							<div class="col-md-4">
								<select name="phase_id" id="phase_id" class="form-control"  style="background-color:white;">
									<option value="<?= $maps['map_phase']?>"><?= $maps['phase_name']?></option>
								</select>
							</div> 
						</div>
						
						<div class="form-group" id="sector">
							<label class="control-label col-sm-3">Sector Name:*</label>
							<div class="col-md-4">
								<select name="sector_id" id="sector_id" class="form-control"  style="background-color:white;">
									<option value="<?= $maps['map_sector']?>"><?= $maps['sector_name']?></option>
								</select>
							</div> 
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Title:*</label>
							<div class="col-md-4">
								<input type="text" name="title" value="<?= $maps['title']?>" class="form-control" placeholder = "Enter Title">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Select Map:*</label>
							<div class="col-md-4">
								<input type="file" name="map" class="form-control">
							</div>
						</div>
						
						<input type="hidden" name="map_id" value="<?= $maps['map_id']?>" >
						<input type="hidden" name="old_map_image" value="<?= $maps['map_image']?>" >
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