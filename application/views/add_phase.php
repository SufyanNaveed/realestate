<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
			
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/society')?>">Phases</a></li>
				<li>Add Phases</li>				
			</ol>
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Add Phases</a> 
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
					<form class="form-horizontal" method="post" action="<?= base_url('dashboard/insert_phase')?>">
						<div class="form-group">
							<label class="control-label col-sm-3">Country Name:*</label>
							<div class="col-md-4">
								<select name="country_id" required class="form-control" id="country_id"style="background-color:white;">
									<option value="">Select Country</option>
									<?php foreach($countries as $row){?>
									<option value="<?= $row['country_id']?>"><?= $row['country_name']?></option>
									<?php } ?>
								</select>
							</div> 
						</div>
						
						<div class="form-group" id="city" style="display:none;">
							<label class="control-label col-sm-3">City Name:*</label>
							<div class="col-md-4">
								<select name="city_id" id="city_id" required class="form-control"  style="background-color:white;">
								
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
						
						<div class="form-group">
							<label class="control-label col-sm-3">Phase Name:*</label>
							<div class="col-md-4">
								<input type="text" name="phase_name" required class="form-control" placeholder = "Enter Phase Name">
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
</script>