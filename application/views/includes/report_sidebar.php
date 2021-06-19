<?php $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>

	<div class="container">
		
		<div class="sidebar col-lg-2"> 
			
			<div class="side-menu">Reports and Stats</div>
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="<?php if($current_link == base_url('reports')) { echo 'collapse-active'; } ?>">
					<i class="fa fa-plus"></i>
					<a href="<?= base_url('reports')?>">Traffic</a>
				</div>
			<?php } else { if($roles[16] == 17){?>
				<div class="<?php if($current_link == base_url('reports')) { echo 'collapse-active'; } ?>">
					<i class="fa fa-plus"></i>
					<a href="<?= base_url('reports')?>">Traffic</a>
				</div>
			<?php }}?>
			
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div>
					<i data-toggle="collapse" data-target="#ex1" class="fa fa-plus"></i>
					<a href="javascipt:;">Leads</a>
				</div>
				<div id="ex1" class="collapse <?php if($current_link != base_url('reports')) { echo'in'; } ?>" >
					<div <?php if($current_link == base_url('reports/leads_summary')) { echo 'class="collapse-active"'; echo 'aria-expanded="true"';} ?> >
						<a href="<?= base_url('reports/leads_summary')?>">Leads Summary</a>
					</div>
					<div class="<?php if($current_link == base_url('reports/phone_leads')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('reports/phone_leads')?>">Phone Leads</a>
					</div>
					<div class="<?php if($current_link == base_url('reports/email_leads')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('reports/email_leads')?>">Email Leads</a>
					</div>	
					<div class="<?php if($current_link == base_url('reports/leads_by_location')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('reports/leads_by_location')?>">Leads by Location</a>
					</div>
					<div class="<?php if($current_link == base_url('reports/leads_by_country')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('reports/leads_by_country')?>">Leads by Country</a>
					</div>	
				</div>
			<?php } else { if($roles[17] == 18){?>
				<div>
				<i data-toggle="collapse" data-target="#ex1" class="fa fa-plus"></i>
					<a href="javascipt:;">Leads</a>
				</div>
				<div id="ex1" class="collapse <?php if($current_link != base_url('reports')) { echo'in'; } ?>" >
					<div <?php if($current_link == base_url('reports/leads_summary')) { echo 'class="collapse-active"'; echo 'aria-expanded="true"';} ?> >
						<a href="<?= base_url('reports/leads_summary')?>">Leads Summary</a>
					</div>
					<div class="<?php if($current_link == base_url('reports/phone_leads')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('reports/phone_leads')?>">Phone Leads</a>
					</div>
					<div class="<?php if($current_link == base_url('reports/email_leads')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('reports/email_leads')?>">Email Leads</a>
					</div>	
					<div class="<?php if($current_link == base_url('reports/leads_by_location')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('reports/leads_by_location')?>">Leads by Location</a>
					</div>
					<div class="<?php if($current_link == base_url('reports/leads_by_country')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('reports/leads_by_country')?>">Leads by Country</a>
					</div>	
				</div>
			<?php }}?>
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div>
					<i data-toggle="collapse" data-target="#ex6" class="fa fa-plus"></i>
					<a href="">Detailed report</a>
				</div>
			<?php } else { if($roles[18] == 19){?>
				<div>
					<i data-toggle="collapse" data-target="#ex6" class="fa fa-plus"></i>
					<a href="">Detailed report</a>
				</div>
			<?php }}?>
			
		</div>