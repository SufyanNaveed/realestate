<?php include('header.php'); ?>

<div class="container padding-top40 padding-bot40">
	<div class="detail-product1 " style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
		<div class="heading">For your property's approx current market assessment at purchaser / seller / investor rate kindly fill following form.</div>
		<div class="contain-wrapp padding-top40 padding-bot40">	
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
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
						
					<form action="<?= base_url('home/insert_assessment')?>" method="post">
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="name">Name: <span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="name" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="email">Email: <span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<input type="email" class="form-control" name="email" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Contact: <span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="contact" required>
								</div>
							</div>
						</div>
						<!-- <div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Budget: <span class="red">*</span></label>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-3">
											<label for="contact">Min: </label>
										</div>
										<div class="col-md-9">
											<select class="form-control" name="min" required>
												<option value="">Please Select</option>
												<option value="5Lac - 1Million">5Lac - 1Million</option>
												<option value="1Million - 10Million">1Million - 10Million</option>
												<option value="10Million - 50Million">10Million - 50Million</option>
												<option value="50Million - 100Million">50Million - 100Million</option>
												<option value="100Million - 1Billion">100Million - 1Billion</option>
												<option value="Greater Than 1Billion">Greater Than 1Billion</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="row">
										<div class="col-md-3">
											<label for="contact">Max:</label>
										</div>
										<div class="col-md-9">
											<select class="form-control" name="max" required>
												<option value="">Please Select</option>
												<option value="5Lac - 1Million">5Lac - 1Million</option>
												<option value="1Million - 10Million">1Million - 10Million</option>
												<option value="10Million - 50Million">10Million - 50Million</option>
												<option value="50Million - 100Million">50Million - 100Million</option>
												<option value="100Million - 1Billion">100Million - 1Billion</option>
												<option value="Greater Than 1Billion">Greater Than 1Billion</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Type: <span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<select class="form-control" name="type" required>
										<option value="">Select Type</option>
										<option value="Residential Plots">Residential Plots</option>
										<option value="Commercial Plots">Commercial Plots</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Size: <span class="red">*</span></label>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" name="size">
								</div>
								<div class="col-md-5">
									<div class="row">
										<div class="col-md-3">
											<label for="contact">Units:</label>
										</div>
										<div class="col-md-9">
											<select class="form-control" name="units" required>
												<option value="">Select Units</option>
												<option value="Sqft">Sqft</option>
												<option value="Sq.Yd">Sq. Yd</option>
												<option value="Sq.M">Sq. M</option>
												<option value="Marla">Marla</option>
												<option value="Kanal">Kanal</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="city">City: <span class="red">*</span></label>
								</div>
								<div class="col-md-4">
									<select class="form-control" name="city" id="city_id" required>
										<option value="">Please Select</option>
										<?php foreach($city as $row){?>
											<option value="<?= $row['city_id']?>"><?= $row['city_name']; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-5">
									<div class="row">
										<div class="col-md-3">
											<label for="contact">Society:</label>
										</div>
										<div class="col-md-9">
											<select class="form-control" name="society" id="society_id" required>
											
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Phase: <span class="red">*</span></label>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-12">
											<select class="form-control" name="phase" id="phase_id" required>
											
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="row">
										<div class="col-md-3">
											<label for="contact">Sector:</label>
										</div>
										<div class="col-md-9">
											<select class="form-control" name="sector" id="sector_id" required>
											
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Street: <span class="red">*</span></label>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-12">
											<input type="text" class="form-control" name="street" required>
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="row">
										<div class="col-md-3">
											<label for="contact">Plot:</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" name="plot" required>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="s-p-rate">Description : <span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<textarea rows="4" class="form-control ckeditor" name="description"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Purpose :<span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<select class="form-control" name="purpose" required>
										<option value="">Select Purpose</option>
										<option value="Assessment">Assessment</option>
										<option value="Genuine Offer">Genuine Offer</option>
										<option value="Both Are Above">Both Are Above</option>
									</select>
								</div>
							</div>
						</div>
						<div style="text-align: center">
							<button class="btn btn-picton btn-rectangle" style="background-color: #00aced; class="btn btn-primary btn-sm" type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>

<script>
$('#city_id').change(function(){     
	var city_id=$('#city_id').val();
	//alert(id);
		$.ajax({
			type: 'POST',
			url:  '<?php echo base_url(); ?>home/fetech_society',
			data: {city_id:city_id},
			success: function(data) {
				if(data == "empty") {
					//alert("No Record Found.")
				}else {
					$("#society_id").html(data);
				}
			}
		});
	});

$('#society_id').change(function(){     
	var society_id=$('#society_id').val();
	//alert(id);
		$.ajax({
			type: 'POST',
			url:  '<?php echo base_url(); ?>home/fetech_phase',
			data: {society_id:society_id},
			success: function(data) {
				if(data == "empty") {
					//alert("No Record Found.")
				}else {
					$("#phase_id").html(data);
				}
			}
		});
	});
	
$('#phase_id').change(function(){     
	var phase_id=$('#phase_id').val();
	//alert(id);
		$.ajax({
			type: 'POST',
			url:  '<?php echo base_url(); ?>home/fetech_sector',
			data: {phase_id:phase_id},
			success: function(data) {
				if(data == "empty") {
					//alert("No Record Found.")
				}else {
					$("#sector_id").html(data);
				}
			}
		});
	}); 
</script>