<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
		
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/maps')?>">Maps</a></li>
				<li>View Maps</li>					
			</ol>
				
			<ul class="nav nav-tabs"> 
				<li class="active">
					<a data-toggle="tab" href="#home">View Maps</a>
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
							<th>Maps ID</th>
							<th>City Name</th>
							<th>Society Name</th>
							<th>Phase Name</th>
							<th>Sector Name</th>
							<th>Title</th>							
							<th>Map</th>							
							<th>Action</th>							
						</tr>
						
						<?php foreach($maps as $row){ ?>
						<tr>
							<td><?= $row['map_id']?></td>
							<td><?= $row['city_name']?></td>
							<td><?= $row['society_name']?></td>
							<td><?= $row['phase_name']?></td>
							<td><?= $row['sector_name']?></td>
							<td><?= $row['title']?></td>
							<td><img style="height:50px; width:70px;" src="<?= base_url('maps/'.$row['map_image'])?>"></td>
							<td>
								<a href="<?= base_url('dashboard/edit_map/'.$row['map_id'])?>"><span class="fa fa-edit"></span></a>
								<a href="<?= base_url('dashboard/delete_map/'.$row['map_id'])?>" onClick="return dodelete();"><span class="fa fa-remove"></span></a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			<span style="padding-bottom: 50px;"></span>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>