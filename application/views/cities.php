<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
		
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/countries')?>">Cities</a></li>
				<li>View Cities</li>					
			</ol>
				
			<ul class="nav nav-tabs"> 
				<li class="active">
					<a data-toggle="tab" href="#home">View Cities</a>
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
							<th>City ID</th>
							<th>Country Name</th>
							<th>City Name</th>
							<th>Controls</th>							
						</tr>
						
						<?php foreach($cities as $row){ ?>
						<tr>
							<td><?= $row['city_id']?></td>
							<td><?= $row['country_name']?></td>
							<td><?= $row['city_name']?></td>
							<td>
								<a href="<?= base_url('dashboard/delete_cities/'.$row['city_id'])?>" onClick="return dodelete();"><i class="fa fa-remove"></i></a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>