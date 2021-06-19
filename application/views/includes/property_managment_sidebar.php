<?php $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
	
	<div class="container">
		<div class="sidebar col-lg-2"> 
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="side-menu">Tools</div>
				<div class="<?php if($current_link == base_url('dashboard/post_listing')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('dashboard/post_listing')?>">Post New Listing</a>
				</div>
			<?php } else { if($roles[9] == 10){?>
				<div class="side-menu">Tools</div>
				<div class="<?php if($current_link == base_url('dashboard/post_listing')) { echo 'collapse-active'; } ?>">
					<a href="<?= base_url('dashboard/post_listing')?>">Post New Listing</a>
				</div>
			<?php }}?>
			
			<?php if($this->session->userdata('user_role') == 0){?>
				<div class="side-menu">Listing</div>
				<div><i data-toggle="collapse" data-target="#ex1" class="fa fa-plus"></i><a href="javascript:;">Active(0)</a></div>
				<div id="ex1" 
					class="<?php if($current_link == base_url('dashboard/active_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/active_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/active_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/active_wanted_property_management')) { echo 'collapse in'; 
					} elseif($current_link == base_url('dashboard/active_superhot_property_management')) { echo 'collapse in'; 
					} elseif($current_link == base_url('dashboard/active_hot_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">
					<div class="<?php if($current_link == base_url('dashboard/active_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_wanted_property_management')?>">Wanted</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_superhot_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_superhot_property_management')?>">Super Hot Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_hot_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_hot_property_management')?>">Hot Listing</a>
					</div>
				</div>
			
				<div><i data-toggle="collapse" data-target="#ex2" class="fa fa-plus"></i><a href="javascript:;">Edited(0)</a></div>
				<div id="ex2" 
					class="<?php if($current_link == base_url('dashboard/edited_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/edited_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/edited_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/edited_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">  

					<div class="<?php if($current_link == base_url('dashboard/edited_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/edited_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/edited_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/edited_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/edited_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/edited_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/edited_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/edited_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex3" class="fa fa-plus"></i><a href="javascript:;">Pending(0)</a></div>
				<div id="ex3" 
					class="<?php if($current_link == base_url('dashboard/pending_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/pending_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/pending_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/pending_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/pending_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/pending_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/pending_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/pending_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/pending_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/pending_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/pending_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/pending_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex4" class="fa fa-plus"></i><a href="javascript:;">Expired(0)</a></div>
				<div id="ex4" 
					class="<?php if($current_link == base_url('dashboard/expired_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/expired_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/expired_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/expired_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/expired_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/expired_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/expired_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/expired_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/expired_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/expired_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/expired_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/expired_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex5" class="fa fa-plus"></i><a href="javascript:;">Deleted(0)</a></div>
				<div id="ex5" 
					class="<?php if($current_link == base_url('dashboard/deleted_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/deleted_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/deleted_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/deleted_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/deleted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/deleted_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/deleted_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/deleted_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/deleted_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/deleted_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/deleted_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/deleted_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex6" class="fa fa-plus"></i><a href="javascript:;">Rejected(0)</a></div>
				<div id="ex6" 
					class="<?php if($current_link == base_url('dashboard/rejected_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/rejected_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/rejected_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/rejected_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/rejected_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/rejected_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/rejected_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/rejected_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/rejected_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/rejected_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/rejected_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/rejected_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
			<?php } else { if($roles[10] == 11){?>
				<div class="side-menu">Listing</div>
				<div><i data-toggle="collapse" data-target="#ex1" class="fa fa-plus"></i><a href="javascript:;">Active(0)</a></div>
				<div id="ex1" 
					class="<?php if($current_link == base_url('dashboard/active_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/active_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/active_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/active_wanted_property_management')) { echo 'collapse in'; 
					} elseif($current_link == base_url('dashboard/active_superhot_property_management')) { echo 'collapse in'; 
					} elseif($current_link == base_url('dashboard/active_hot_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">
					<div class="<?php if($current_link == base_url('dashboard/active_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_wanted_property_management')?>">Wanted</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_superhot_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_superhot_property_management')?>">Super Hot Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/active_hot_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/active_hot_property_management')?>">Hot Listing</a>
					</div>
				</div>
			
				<div><i data-toggle="collapse" data-target="#ex2" class="fa fa-plus"></i><a href="javascript:;">Edited(0)</a></div>
				<div id="ex2" 
					class="<?php if($current_link == base_url('dashboard/edited_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/edited_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/edited_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/edited_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">  

					<div class="<?php if($current_link == base_url('dashboard/edited_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/edited_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/edited_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/edited_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/edited_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/edited_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/edited_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/edited_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex3" class="fa fa-plus"></i><a href="javascript:;">Pending(0)</a></div>
				<div id="ex3" 
					class="<?php if($current_link == base_url('dashboard/pending_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/pending_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/pending_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/pending_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/pending_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/pending_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/pending_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/pending_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/pending_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/pending_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/pending_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/pending_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex4" class="fa fa-plus"></i><a href="javascript:;">Expired(0)</a></div>
				<div id="ex4" 
					class="<?php if($current_link == base_url('dashboard/expired_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/expired_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/expired_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/expired_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/expired_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/expired_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/expired_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/expired_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/expired_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/expired_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/expired_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/expired_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex5" class="fa fa-plus"></i><a href="javascript:;">Deleted(0)</a></div>
				<div id="ex5" 
					class="<?php if($current_link == base_url('dashboard/deleted_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/deleted_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/deleted_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/deleted_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/deleted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/deleted_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/deleted_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/deleted_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/deleted_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/deleted_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/deleted_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/deleted_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex6" class="fa fa-plus"></i><a href="javascript:;">Rejected(0)</a></div>
				<div id="ex6" 
					class="<?php if($current_link == base_url('dashboard/rejected_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/rejected_sale_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/rejected_rent_property_management')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/rejected_wanted_property_management')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/rejected_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/rejected_property_management')?>">All Listing</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/rejected_sale_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/rejected_sale_property_management')?>">For Sale</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/rejected_rent_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/rejected_rent_property_management')?>">For Rent</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/rejected_wanted_property_management')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/rejected_wanted_property_management')?>">Wanted</a>
					</div>
				</div>
			<?php }}?>
			
		</div>