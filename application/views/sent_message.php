<?php include_once('includes/header.php'); ?>

<?php include_once('includes/message_center_sidebar.php'); ?>
	
		<div class="col-lg-9 sidediv property-form">
			<ol class="breadcrumb">
				<li><a href="javascript:;">Message Center</a></li>
				<li>Sent Message</li>	 				
			</ol>
			
			<ul class="nav nav-tabs">
				<li><a href="<?= base_url('messagebox')?>">Inbox</a></li>
				<li class="active"><a data-toggle="tab" href="#menu1">Messages Detail</a></li>		
			</ul>
			
			<div class="tab-content padding">
				
				<div id="menu1" class="tab-pane fade in active">
					<div class="mail"> 
						<div class="col-sm-6 ">
							Conversation subject: <strong>Inquiry about your property</strong><br>
							Property ID: <?= $message['inbox_id']; ?>
						</div>
						
						<div class="col-sm-6 mail-detail">
							Conversation with: <strong><?= $message['name']; ?></strong><br>
							Tel: <?= $message['mobile']; ?><br>
							Email: <?= $message['email']; ?>
								
						</div>
					</div>
					<div class="clearfix"></div><br>
					
					<div class="container">
							<div class="col-sm-2 ">
								<span class="online3"><?= $message['name']; ?></span>
								<br><?= $message['inbox_created_date']; ?>
							</div>
							
							<div class="col-sm-6 mail-content">
								<p><?= $message['message']; ?></p>
							</div>
						</div>
						<br>
					
					<!--<div class="reply">
						<form class="form-horizontal" method="post" action="<?= base_url('messagebox/insert_sent_message')?>">
						
							<h5 style="text-align:center">Post your reply</h5>
							<textarea class="form-control" name="reply" rows="5" cols="3"></textarea><br>
						
						
							<div class="form-group">
								<div class="col-md-2">
									<input type="text" class="form-control" value="1500"> 
								</div>
								<label for="inputValue" class="col-md-3 control-label">Characters left</label>
							</div>
							  
							<input type="hidden" name="post_id" value="<?= $message['post_id']?>"> 
							<input type="hidden" name="inbox_id" value="<?= $message['inbox_id']?>"> 
							<div class="form-group">
								<div class="col-md-2"></div>
								<div class="col-md-1">
									<button class="btn btn-info" >Send</button>
								</div> 
								
								<div class="col-md-3">
									<button class="btn btn-Default back">Back to inbox</button>
								</div>
											
								<div class="col-md-3">
									<select class="form-control move">
										<option>Move to</option>
									</select>							 
								</div>
							</div>
						</form>  
					</div>-->
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>