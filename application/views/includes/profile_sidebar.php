<?php $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>

	<div class="container">
		
		<div class="sidebar col-lg-2">
			
			<div class="side-menu">Profile</div>
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="<?php if($current_link == base_url('dashboard/profile')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('dashboard/profile')?>">User Profile</a>
				</div>
			<?php } else { if($roles[13] == 14){?>
				<div class="<?php if($current_link == base_url('dashboard/profile')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('dashboard/profile')?>">User Profile</a>
				</div>
			<?php }}?>
			
			
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="<?php if($current_link == base_url('dashboard/password')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('dashboard/password')?>">Change password</a>
				</div>
			<?php } else { if($roles[14] == 15){?>
				<div class="<?php if($current_link == base_url('dashboard/password')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('dashboard/password')?>">Change password</a>
				</div>
			<?php }}?>
			
			
			
						
		
		</div>