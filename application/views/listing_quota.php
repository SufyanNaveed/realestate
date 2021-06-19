<?php include_once('includes/header.php'); ?>

<?php include_once('includes/agent_sidebar.php'); ?>
		
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('agents')?>">Agents Staff</a></li>
				<li>Manage Listing Quota</li>					
			</ol>
				
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#home">Listing Quota</a>
				</li>		
			</ul>
			
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h6 style="color:grey">Total Users: <?= count($listing_quota); ?></h6>
					
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
							<th>Contact person</th>
							<th>Listings Quota</th>							 
							<th>Super Hot Credits</th>
							<th>Hot Credits</th>
							<th>Refresh Credits</th>
							<th>Action</th>							
						</tr>
						
						<?php foreach($listing_quota as $row){?>
						<tr>
							<td><?= $row['username']?></td>
							<td><?= $row['listing_quota']?>/<?= $row['used_listing_quota']?></td>
							<td><?= $row['superhot_credit']?>/<?= $row['superhot_credit']?></td>
							<td><?= $row['hot_credit']?>/<?= $row['hot_credit']?></td>
							<td><?= $row['refresh_credit']?>/<?= $row['refresh_credit']?></td>
							<td>
								<a class="edit" aria-hidden="true" 
									data-user_id="<?= $row['user_id']; ?>"
									data-listing_quota="<?= $row['listing_quota']; ?>" 
									data-superhot_credit="<?= $row['superhot_credit']; ?>" 
									data-hot_credit="<?= $row['hot_credit']; ?>" 
									data-refresh_credit="<?= $row['refresh_credit']; ?>"
									>Change</a>
							</td>								
						</tr>
						<?php } ?>		 				
					</table>
				</div>
			</div>

			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog" style="width:300px; margin:185px auto;">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Assign Quota/Credit</h4>
						</div>
						<div class="modal-body">
							<form method="post" action="<?= base_url('agents/update_lisitng_quota')?>">
								<br>
								<div class="form-group">
									<label class="control-label col-sm-5" style="padding-right:15px; padding-left:8px;">Listing Quota</label>
									<div class="col-md-7">
										<input type="text" class="form-control" name="listing_quota" id="listing_quota" placeholder="Listing Quota">
									</div>
								</div><br><br>

								<div class="form-group">
									<label class="control-label col-sm-5" style="padding-right:15px; padding-left:8px;">Superhot Credit</label>
									<div class="col-md-7">
										<input type="text" class="form-control" name="superhot_credit" id="superhot_credit" placeholder="Superhot Credit">
									</div>
								</div><br><br>
				
								<div class="form-group">
									<label class="control-label col-sm-5" style="padding-right:15px; padding-left:8px;">Hot Credit</label>
									<div class="col-md-7">
										<input type="text" class="form-control" name="hot_credit" id="hot_credit" placeholder="Hot Credit">
									</div>
								</div><br><br>

								<div class="form-group">
									<label class="control-label col-sm-5" style="padding-right:15px; padding-left:8px;">Refresh Credit</label>
									<div class="col-md-7">
										<input type="text" class="form-control" name="refresh_credit" id="refresh_credit" placeholder="Refresh Credit">
									</div>
								</div><br><br>
								<input type="hidden" name="user_id" id="user_id">
								
								<div class="box-footer">
									<button type="submit" class="btn btn-info">Submit</button>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<script>

$(".edit").click(function(){
	var user_id=$(this).attr("data-user_id");
	var listing_quota=$(this).attr("data-listing_quota");
	var superhot_credit=$(this).attr("data-superhot_credit");
	var hot_credit=$(this).attr("data-hot_credit");
	var refresh_credit=$(this).attr("data-refresh_credit");
	
	$('#user_id').val(user_id);
	$('#listing_quota').val(listing_quota);
	$('#superhot_credit').val(superhot_credit);
	$('#hot_credit').val(hot_credit);
	$('#refresh_credit').val(refresh_credit);
	
    $('#myModal').modal('show');
});

</script>
	
	
<?php include_once('includes/footer.php'); ?>