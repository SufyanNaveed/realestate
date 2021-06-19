<?php include('header.php'); ?>

<div class="container padding-top40 padding-bot40">
	<div class="detail-product1 " style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
		<div class="heading">For best investment plans & options, kindly fill the following form.</div>
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
						
					<form action="<?= base_url('home/insert_investment')?>" method="post">
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
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Budget: <span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<select class="form-control" name="min" required>
										<option value="">Min - Max</option>
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
									<label for="city">City: <span class="red">(Optional)</span></label>
								</div>
								<div class="col-md-4">
									<select class="form-control" name="city" id="city_id">
										<option value="">Please Select</option>
										<?php foreach($city as $row){?>
											<option value="<?= $row['city_id']?>"><?= $row['city_name']; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-5">
									<div class="row">
										<div class="col-md-5">
											<label for="contact">Society: <span class="red">(Optional)</span></label>
										</div>
										<div class="col-md-7">
											<select class="form-control" name="society" id="society_id">
											
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Phase: <span class="red">(Optional)</span></label>
								</div>
								<div class="col-md-4">
									<select class="form-control" name="phase" id="phase_id">
											
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="s-p-rate">Description : <span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<textarea rows="4" class="form-control" name="description"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="contact">Time Period :<span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<select class="form-control" name="time_period" required>
										<option value="">Select Time Period</option>
										<option value="3 Months">3 Months</option>
										<option value="6 Months">6 Months</option>
										<option value="1 Year">1 Year</option>
										<option value="2 Years">2 Years</option>
										<option value="2 - 5">2 Years - 5 Years</option>
										<option value="5 - 10">5 Years - 10 Years</option>
										<option value="10 - 20">10 Years - 20 Years</option>
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