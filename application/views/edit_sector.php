<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
			
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/society')?>">Sector</a></li>
				<li>Edit Sector</li>				
			</ol>
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Edit Sector</a> 
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
					<form class="form-horizontal" method="post" action="<?= base_url('dashboard/update_sector')?>"> 
						<div class="form-group">
							<label class="control-label col-sm-3">Country Name:*</label>
							<div class="col-md-4">
								<select name="country_id" required class="form-control" id="country_id"style="background-color:white;">
									<option value="<?= $sector['country_id'] ?>"><?= $sector['country_name'] ?></option>
									<?php foreach($countries as $row){?>
									<option value="<?= $row['country_id']?>"><?= $row['country_name']?></option>
									<?php } ?>
								</select>
							</div> 
						</div>
						
						<div class="form-group" id="city">
							<label class="control-label col-sm-3">City Name:*</label>
							<div class="col-md-4">
								<select name="city_id" id="city_id" required class="form-control"  style="background-color:white;">
									<option value="<?= $sector['city_id'] ?>"><?= $sector['city_name'] ?></option>
								</select>
							</div> 
						</div>
						
						<div class="form-group" id="society">
							<label class="control-label col-sm-3">Society Name:*</label>
							<div class="col-md-4">
								<select name="society_id" id="society_id" required class="form-control"  style="background-color:white;">
									<option value="<?= $sector['society_id'] ?>"><?= $sector['society_name'] ?></option>
									
								</select>
							</div> 
						</div>
						
						<div class="form-group" id="phase">
							<label class="control-label col-sm-3">Phase Name:*</label>
							<div class="col-md-4">
								<select name="phase_id" id="phase_id" required class="form-control"  style="background-color:white;">
									<option value="<?= $sector['phase_id'] ?>"><?= $sector['phase_name'] ?></option>
									
								</select>
							</div> 
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Sector Name:*</label>
							<div class="col-md-4">
								<input type="text" name="sector_name" required value="<?= $sector['sector_name'] ?>" class="form-control" placeholder = "Enter Sector Name">
							</div>
						</div>
						
						<input type="hidden" name="sector_id" value="<?= $sector['sector_id'] ?>">
						
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
$('#country_id').change(function(){     
	var id= $('#country_id').val();
	//alert(id);
		$.ajax({
			type: 'POST',
			url:  '<?php echo base_url(); ?>dashboard/fetech_cities',
			data: {id:id},
			success: function(data) {
				if(data == "empty") {
					alert("No Found.")
				}else {
					$("#city").show();
					$("#city_id").html(data);
				}
			}
		});
	});
		
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
</script>