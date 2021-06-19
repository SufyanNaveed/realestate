<?php include_once('includes/header.php'); ?>

<?php include_once('includes/message_center_sidebar.php'); ?>
	
		<div class="col-lg-9 sidediv property-form">
			<ol class="breadcrumb">
				<li><a href="javascript;:">Message Center</a></li>
				<li>Inbox</li>					
			</ol>
			
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Inbox</a></li>
				<li><a href="javascript:;">Messages Detail</a></li>		
			</ul>
			
			<div class="tab-content padding">
				<div id="home" class="tab-pane fade in active">
					<div class="mail2">
						<label class="control-label col-sm-1">Select</label>
						<div class="col-md-2">
							<select class="form-control">
								<option>None</option>
							</select>
						</div>
						
						<div class="col-md-2">
							<select class="form-control">
								<option>Move to</option>
							</select>
						</div>
						
						<span class="">
							<a href="">Mark as read</a>
						</span>&emsp;
						<span class="">
							<a href="">Mark as Unread</a>
						</span>
					</div>
					<div class="clearfix"></div><br>
					
					<div class="mail-boxing">
						<?php foreach($get_messages as $row){?>
						<div class="container">
							<a href="<?= base_url('messagebox/sent_message/'.$row['inbox_id'])?>">
								<div class="mailbox">
									<div class="col-sm-1 online">	
										<input type="checkbox" name="slected[]" value="<?= $row['inbox_id']?>">
									</div>
									
									<div class="col-sm-2 online1">
										<span class="online3"><?= $row['name']?></span>
										<br><?= $row['inbox_created_date']?>
									</div>
									
									<div class="col-sm-6">
										<strong>Inquiry about your property: <?= $row['post_id']?></strong><br>
										<p><?= $row['message']?></p>
									</div>
									
									<!--<label class="col-sm-1 online"><i class="fas fa-times"></i></label>-->
								</div>
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>