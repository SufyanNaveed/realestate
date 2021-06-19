<?php include_once('includes/header.php'); ?>

<?php include_once('includes/agent_sidebar.php'); ?>
		
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('agents')?>">Agents Staff</a></li>
				<li>View Agents</li>					
			</ol>
				
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">View Agents</a>
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
					
					<h6 style="color:grey">Total Users: <?= count($agent); ?></h6>
					<table class="table-bordered" style="width:100%">
						<tr style="background-color:#05a7e5; color:white;">
							<th>Contact person</th>
							<th>Email</th>							 
							<th>Listings Quota</th>
							<th>Used Quota</th>
							<th>Controls</th>							
						</tr>
						
						<?php foreach($agent as $row){ ?>
						<tr>
							<td><?= $row['username']?></td>
							<td><?= $row['email']?></td>
							<td><?= $row['listing_quota']?></td>
							<td><?= $row['used_listing_quota']?></td>							 
							<td>
								<a href="<?= base_url('agents/edit_agents/'.$row['user_id'])?>"><i class="fa fa-edit"></i></a>
								<?php if($this->session->userdata('user_role') == 0){?>
									<a href="<?= base_url('dashboard/roles/'.$row['user_id'])?>"><i class="fa fa-user-plus"></i></a>
								<?php } ?>
								<a href="<?= base_url('agents/delete_agents/'.$row['user_id'])?>" onClick="return dodelete();"><i class="fa fa-remove"></i></a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>