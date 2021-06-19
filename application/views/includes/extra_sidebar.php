<?php $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
	
	<div class="container">
		<div class="sidebar col-lg-2"> 
				<?php if($this->session->userdata('user_role') == 0){?>
				<div class="side-menu">Extra</div>
				<div><i data-toggle="collapse" data-target="#ex1" class="fa fa-plus"></i><a href="javascript:;">Countries</a></div>
				<div id="ex1" 
					class="<?php if($current_link == base_url('dashboard/countries')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/add_countries')) { echo 'collapse in';  
					}else { echo 'collapse';  } ?>">
					<div class="<?php if($current_link == base_url('dashboard/countries')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/countries')?>">Countries</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/add_countries')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/add_countries')?>">Add Country</a>
					</div>
				</div>
			
				<div><i data-toggle="collapse" data-target="#ex2" class="fa fa-plus"></i><a href="javascript:;">Cities</a></div>
				<div id="ex2" 
					class="<?php if($current_link == base_url('dashboard/cities')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/add_cities')) { echo 'collapse in';  
					}else { echo 'collapse';  } ?>">  

					<div class="<?php if($current_link == base_url('dashboard/cities')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/cities')?>">Cities</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/add_cities')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/add_cities')?>">Add City</a>
					</div>
				</div> 
				
				<div><i data-toggle="collapse" data-target="#ex3" class="fa fa-plus"></i><a href="javascript:;">Society</a></div>
				<div id="ex3" 
					class="<?php if($current_link == base_url('dashboard/society')) { echo 'collapse in';  
					}elseif($current_link == base_url('dashboard/add_society')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/society')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/society')?>">Society</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/add_society')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/add_society')?>">Add Society</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex4" class="fa fa-plus"></i><a href="javascript:;">Phases</a></div>
				<div id="ex4" 
					class="<?php if($current_link == base_url('dashboard/phase')) { echo 'collapse in';  
					} elseif($current_link == base_url('dashboard/add_phase')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/phase')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/phase')?>">Phases</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/add_phase')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/add_phase')?>">Add Phases</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex5" class="fa fa-plus"></i><a href="javascript:;">Sector</a></div>
				<div id="ex5" 
					class="<?php if($current_link == base_url('dashboard/sector')) { echo 'collapse in';
					} elseif($current_link == base_url('dashboard/add_sector')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/sector')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/sector')?>">Sector</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/add_sector')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/add_sector')?>">Add Sector</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex6" class="fa fa-plus"></i><a href="javascript:;">Blogs</a></div>
				<div id="ex6" 
					class="<?php if($current_link == base_url('dashboard/blog')) { echo 'collapse in';
					} elseif($current_link == base_url('dashboard/add_blog')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">
					<div class="<?php if($current_link == base_url('dashboard/add_blog')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/add_blog')?>">Add Blog</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/blog')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/view_blogs')?>">View Blog</a>
					</div>
					
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex8" class="fa fa-plus"></i><a href="javascript:;">Assesments</a></div>
				<div id="ex8" 
					class="<?php if($current_link == base_url('dashboard/blog')) { echo 'collapse in';
					} elseif($current_link == base_url('dashboard/add_blog')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<!--<div class="<?php if($current_link == base_url('dashboard/assesment')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/assesment')?>">Blog</a>
					</div>-->
					<div class="<?php if($current_link == base_url('dashboard/assesment')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/assesment')?>">Free Assesments</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex7" class="fa fa-plus"></i><a href="javascript:;">Guides</a></div>
				<div id="ex7" 
					class="<?php if($current_link == base_url('dashboard/purchaser_guide')) { echo 'collapse in';
					} elseif($current_link == base_url('dashboard/investment_guide')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/purchaser_guide')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/purchaser_guide')?>">Purchaser Guide</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/investment_guide')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/investment_guide')?>">Investment Guide</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex9" class="fa fa-plus"></i><a href="javascript:;">Maps</a></div>
				<div id="ex9" 
					class="<?php if($current_link == base_url('dashboard/add_map')) { echo 'collapse in';
					} elseif($current_link == base_url('dashboard/maps')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/add_map')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/add_map')?>">Add Map</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/maps')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/maps')?>">View Maps</a>
					</div>
				</div>
				
				<div><i data-toggle="collapse" data-target="#ex10" class="fa fa-plus"></i><a href="javascript:;">Market Updates</a></div>
				<div id="ex10" 
					class="<?php if($current_link == base_url('dashboard/add_market_updates')) { echo 'collapse in';
					} elseif($current_link == base_url('dashboard/market_updates')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/add_market_updates')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/add_market_updates')?>">Add Market Updates</a>
					</div>
					<div class="<?php if($current_link == base_url('dashboard/market_updates')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/market_updates')?>">View Market Updates</a>
					</div>
				</div>


				<div><i data-toggle="collapse" data-target="#ex11" class="fa fa-plus"></i><a href="javascript:;">Contact Us</a></div>
				<div id="ex11" 
					class="<?php if($current_link == base_url('dashboard/contact_us')) { echo 'collapse in';
					} elseif($current_link == base_url('dashboard/contact_us')) { echo 'collapse in'; } else { echo 'collapse';  } 
					?>">

					<div class="<?php if($current_link == base_url('dashboard/contact_us')) { echo 'collapse-active'; } ?>">
						<a href="<?= base_url('dashboard/contact_us')?>">View Contact Us</a>
					</div>
				</div>
				
			<?php } ?>
				
			
		</div>