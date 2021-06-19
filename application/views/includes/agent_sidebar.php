<?php $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>

	<div class="container">
		
		<div class="sidebar col-lg-2">
			
			<div class="side-menu">Agent Staff</div>
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="<?php if($current_link == base_url('agents/add_agents')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('agents/add_agents')?>">Add Agent</a>
				</div>
			<?php } else { if($roles[19] == 20){?>
				<div class="<?php if($current_link == base_url('agents/add_agents')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('agents/add_agents')?>">Add Agent</a>
				</div>
			<?php }}?>
			
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="<?php if($current_link == base_url('agents')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('agents')?>">View Agents</a>
				</div>
			<?php } else { if($roles[20] == 21){?>
				<div class="<?php if($current_link == base_url('agents')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('agents')?>">View Agents</a>
				</div>
			<?php }}?>
			
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="<?php if($current_link == base_url('agents/listing_quota')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('agents/listing_quota')?>">Manage Listing Quota</a>
				</div>
			<?php } else { if($roles[6] == 7){?>
				<div class="<?php if($current_link == base_url('agents/listing_quota')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('agents/listing_quota')?>">Manage Listing Quota</a>
				</div>
			<?php }}?>
			
			
		
		</div>