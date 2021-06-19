<?php include_once('includes/header.php'); ?>

<?php include_once('includes/agent_sidebar.php'); ?>

	
		<div class="col-lg-9 sidediv property-form">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/profile')?>">My Account & Profile</a></li>
				<li>User Roles</li>			  
            </ol>
			
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
			
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#role">My Roles</a></li>
			</ul>
 
			<div class="tab-content">
				<div id="role" class="tab-pane  in active">   
					<div align="center" style="padding-bottom:10px">
						<div class="role_text_heading" style="padding-top: 10px; text-align:center; width:70%; border-bottom:1px solid #BBBBBB; padding-bottom:5px;">
							<b>Main Menus</b>
						</div>								
					</div>	
					
					<form class="form-horizontal" method="post" action="<?= base_url('dashboard/insert_user_roles')?>">
						
						<div class="form-group">
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[0] == 1){?>
									<input type="checkbox" name="roles[1]" value="1" checked>&nbsp;Dashboard
								<?php } else {?>
									<input type="checkbox" name="roles[1]" value="1" required>&nbsp;Dashboard
								<?php } ?>
							</div>	
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[1] == 2){?>
									<input type="checkbox" name="roles[2]" value="2" checked>&nbsp;Property Management
								<?php } else {?>
									<input type="checkbox" name="roles[2]" value="2">&nbsp;Property Management
								<?php } ?>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[2] == 3){?>
									<input type="checkbox" name="roles[3]" value="3" checked>&nbsp;Message Center
								<?php } else {?>
									<input type="checkbox" name="roles[3]" value="3">&nbsp;Message Center
								<?php } ?>
							</div>	
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[3] == 4){?>
									<input type="checkbox" name="roles[4]" value="4" checked>&nbsp;My Account / Profile
								<?php } else {?>
									<input type="checkbox" name="roles[4]" value="4">&nbsp;My Account / Profile
								<?php } ?>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[4] == 5){?>
									<input type="checkbox" name="roles[5]" value="5" checked>&nbsp;Reports
								<?php } else {?>
									<input type="checkbox" name="roles[5]" value="5">&nbsp;Reports
								<?php } ?>
							</div>	
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[5] == 6){?>
									<input type="checkbox" name="roles[6]" value="6" checked>&nbsp;Agent Staff
								<?php } else {?>
									<input type="checkbox" name="roles[6]" value="6">&nbsp;Agent Staff
								<?php } ?>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[6] == 7){?>
									<input type="checkbox" name="roles[7]" value="7" checked>&nbsp;Lisitng Quota
								<?php } else {?>
									<input type="checkbox" name="roles[7]" value="7">&nbsp;Lisitng Quota
								<?php } ?>
							</div>	
							<!--<div class="col-sm-6 new-check"> <!-- This is a new div --	
								<input type="checkbox" name="roles[]" value="4">&nbsp;
							</div>-->
						</div>
						
						<div align="center" style="padding-bottom:10px">
							<div class="role_text_heading" style="text-align:center; width:70%; border-bottom:1px solid #BBBBBB; padding-bottom:2px;">
								<b>Property Management</b>
							</div>									
						</div>
							
						<div class="form-group">
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[9] == 10){?>
									<input type="checkbox" name="roles[10]" value="10" checked>&nbsp;Post New Lisitng
								<?php } else {?>
									<input type="checkbox" name="roles[10]" value="10">&nbsp;Post New Lisitng
								<?php } ?>
							</div>	
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[10] == 11){?>
									<input type="checkbox" name="roles[11]" value="11" checked>&nbsp;Ads Lisitng
								<?php } else {?>
									<input type="checkbox" name="roles[11]" value="11">&nbsp;Ads Lisitng
								<?php } ?>
							</div>
						</div>
						
						<div align="center" style="padding-bottom:10px">
							<div class="role_text_heading" style="text-align:center; width:70%; border-bottom:1px solid #BBBBBB; padding-bottom:2px;">
								<b>Message Center</b>
							</div>									
						</div>
						
						<div class="form-group">
							<div class="col-sm-6 new-check" > <!-- This is a new div -->	
								<?php if($roles[11] == 12){?>
									<input type="checkbox" name="roles[12]" value="12" checked>&nbsp;Personal Inbox
								<?php } else {?>
									<input type="checkbox" name="roles[12]" value="12">&nbsp;Personal Inbox
								<?php } ?>
							</div>	
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[12] == 13){?>
									<input type="checkbox" name="roles[13]" value="13" checked>&nbsp;Agents Inbox
								<?php } else {?>
									<input type="checkbox" name="roles[13]" value="13">&nbsp;Agents Inbox
								<?php } ?>
							</div>
						</div>
	
						<div align="center" style="padding-bottom:10px">
							<div class="role_text_heading" style="text-align:center; width:70%; border-bottom:1px solid #BBBBBB; padding-bottom:2px;">
								<b>My Account / Profile</b>
							</div>									
						</div>
						 
						<div class="form-group">
							<div class="col-sm-6 new-check" > <!-- This is a new div -->	
								<?php if($roles[13] == 14){?>
									<input type="checkbox" name="roles[14]" value="14" checked>&nbsp;User Profile
								<?php } else {?>
									<input type="checkbox" name="roles[14]" value="14">&nbsp;User Profile
								<?php } ?>
							</div>	
							<div class="col-sm-6 new-check" > <!-- This is a new div -->	
								<?php if($roles[14] == 15){?>
									<input type="checkbox" name="roles[15]" value="15" checked>&nbsp;Change Password
								<?php } else {?>
									<input type="checkbox" name="roles[15]" value="15">&nbsp;Change Password
								<?php } ?>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-6 new-check" > <!-- This is a new div -->	
								<?php if($roles[15] == 16){?>
									<input type="checkbox" name="roles[16]" value="16" checked>&nbsp;Roles
								<?php } else {?>
									<input type="checkbox" name="roles[16]" value="16">&nbsp;Roles
								<?php } ?>
							</div>
						</div>
						
						<div align="center" style="padding-bottom:10px">
							<div class="role_text_heading" style="text-align:center; width:70%; border-bottom:1px solid #BBBBBB; padding-bottom:2px;">
								<b>Reports</b>
							</div>									
						</div>
						
						<div class="form-group">
							<div class="col-sm-6 new-check" > <!-- This is a new div -->	
								<?php if($roles[16] == 17){?>
									<input type="checkbox" name="roles[17]" value="17" checked>&nbsp;Traffic
								<?php } else {?>
									<input type="checkbox" name="roles[17]" value="17">&nbsp;Traffic
								<?php } ?>
							</div>	
							<div class="col-sm-6 new-check" > <!-- This is a new div -->	
								<?php if($roles[17] == 18){?>
									<input type="checkbox" name="roles[18]" value="18" checked>&nbsp;Leads
								<?php } else {?>
									<input type="checkbox" name="roles[18]" value="18">&nbsp;Leads
								<?php } ?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6 new-check" > <!-- This is a new div -->	
								<?php if($roles[18] == 19){?>
									<input type="checkbox" name="roles[19]" value="19" checked>&nbsp;Detailed Reports
								<?php } else {?>
									<input type="checkbox" name="roles[19]" value="19">&nbsp;Detailed Reports
								<?php } ?>
							</div>							
						</div>
						
						<div align="center" style="padding-bottom:10px">
							<div class="role_text_heading" style="text-align:center; width:70%; border-bottom:1px solid #BBBBBB; padding-bottom:2px;">
								<b>Agent Staff</b>
							</div>									
						</div>
						
						<div class="form-group">
							<div class="col-sm-6 new-check"> <!-- This is a new div -->	
								<?php if($roles[19] == 20){?>
									<input type="checkbox" name="roles[20]" value="20" checked>&nbsp;Add Agent
								<?php } else {?>
									<input type="checkbox" name="roles[20]" value="20">&nbsp;Add Agent
								<?php } ?>
							</div>	
							<div class="col-sm-6 new-check"  <!-- This is a new div -->	
								<?php if($roles[20] == 21){?>
									<input type="checkbox" name="roles[21]" value="21" checked>&nbsp;View Agents
								<?php } else {?>
									<input type="checkbox" name="roles[21]" value="21">&nbsp;View Agents
								<?php } ?>
							</div>
						</div>
						
						
						<input type="hidden" name="user_id" value="<?= $id; ?>">
						<div align="center" style="margin-bottom:10px; ">  
							<div class="role_text_heading" style="text-align:center; width:70%">
								<button class="btn btn-info">Submit</button>
							</div>
						</div>					
					</form>	
		
					
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>