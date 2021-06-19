<?php include('header.php'); ?>

<div class="container padding-top40 padding-bot40">
	<div class="detail-product1 " style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
		<div class="heading">Contact Us</div>
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
						
					<form action="<?= base_url('home/insert_contact_us')?>" method="post">
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
									<label for="contact">Message: <span class="red">*</span></label>
								</div>
								<div class="col-md-9">
									<textarea class="form-control" rows="5" name="message" required></textarea>
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
					alert("No Record Found.")
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
					alert("No Record Found.")
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
					alert("No Record Found.")
				}else {
					$("#sector_id").html(data);
				}
			}
		});
	}); 
</script>