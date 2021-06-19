<?php $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>

	<div class="container">
		<div class="sidebar col-lg-2">
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="side-menu">Personal</div>
				<div class="<?php if($current_link == base_url('messagebox')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('messagebox')?>" >Inbox (<?= count($get_messages);?>)</a>
				</div>
			<?php } else { if($roles[11] == 12){?>
				<div class="side-menu">Personal</div>
				<div class="<?php if($current_link == base_url('messagebox')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('messagebox')?>" >Inbox (<?= count($get_messages);?>)</a>
				</div>
			<?php }}?>
			
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="sidebar">
					<div class="side-menu">Agent Users
						<span class="right">
							<i class="fa fa-plus folder"></i>
						</span>
					</div>
					<?php foreach($agents as $row){?>
					<div>
						<i data-toggle="collapse" data-target="#ex2" class="fa fa-plus"></i>
						<a href="<?= base_url('messagebox/agent_inbox/'.$row['user_id'])?>"><?= $row['username'] ?></a>
					</div>
					<?php } ?>
				</div>
			<?php } else { if($roles[12] == 13){?>
				<div class="sidebar">
					<div class="side-menu">Agent Users
						<span class="right">
							<i class="fa fa-plus folder"></i>
						</span>
					</div>
					<?php foreach($agents as $row){?>
					<div>
						<i data-toggle="collapse" data-target="#ex2" class="fa fa-plus"></i>
						<a href="<?= base_url('messagebox/agent_inbox/'.$row['user_id'])?>"><?= $row['username'] ?></a>
					</div>
					<?php } ?>
				</div>
			<?php }}?>
		</div>