<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
		
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/contact_us')?>">Contact Us</a></li>
				<li>View Contact Us</li>					
			</ol>
				
			<ul class="nav nav-tabs"> 
				<li class="active">
					<a data-toggle="tab" href="#home">View Contact Us</a>
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
					
					<table class="table-bordered" style="width:100%">
						<tr style="background-color:#05a7e5; color:white;">
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>							
							<th>Contact</th>							
							<th>Message</th>							
						</tr>
						
						<?php foreach($contact_us as $row){ ?>
						<tr>
							<td><?= $row['contact_us_id']?></td>
							<td><?= $row['name']?></td>
							<td><?= $row['email']?></td>
							<td><?= $row['contact']?></td>
							<td><?= $row['message']?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>