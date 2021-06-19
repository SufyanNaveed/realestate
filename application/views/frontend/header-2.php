<?php $current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>

<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">

<!-- Mirrored from 99webpage.com/theme-review/html/bacotna/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 18:39:57 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bacotna is a truly multi purpose template, coming with 50+ ready-to-use Homepages & 100+ HTML Files in one Package. Build whatever you like with this Template.Be it Business, Corporate, Medical, Travel, Construction, Real Estate, Magazine, Portfolio, Agency, Hotel, Yoga, Hosting, Photography, Ecommerce, Industry or Product launch, just everything is possible with bacotna.">
	<meta name="keywords" content=" app, business, construction, corporate, creative, ecommerce, hosting, hotel, magazine, medical, multipurpose, photography, real estate, restaurant, yoga">
	<meta name="robots" content="index,follow">
    <link rel="icon" href="<?= base_url('assets/frontend/ico/favicon.png')?>">

    <title>New Projects - Habro Real Estate</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/frontend/css/bootstrap.min.css')?>" rel="stylesheet">
	
	<!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/css/revolution/settings.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/css/jquery.floating-social-share.min.css')?>" />
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/css/revolution/layers.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/css/revolution/navigation.css')?>"> 
	
    
    <link href="http://habrorealestate.com/habroestate9/css/royalslider_v9_1.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/css/society-maps.css')?>" rel="stylesheet">

	<link href="<?= base_url('assets/frontend/css/style.css')?>" rel="stylesheet">
    
    <!-- Color -->
    <link id="skin" href="<?= base_url('assets/frontend/skins/default.css')?>" rel="stylesheet">
   	<style type="text/css">
   		.fa
   		{
   			padding:5px;
   		}
   	</style>
 	
</head>
<body>
	<!-- Start preloading --
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
			</div>
			<p>Please wait...</p>
		</div>
	</div>
	<!-- End preloading -->
	
 	
	
	<!-- Start top section -->
	<div class="top-wrapper unbordery">			
		<div class="col-md-7">
			<ul class="right-link">
				<li><a class="bgc hdr_hic" title="www.habrorealestate.com" href="<?= base_url('home')?>">&nbsp;</a></li>
				<li><a href="<?= base_url('home')?>">Properties</a></li>
				<li><a href="<?= base_url('home/market_updates')?>">Market Updates</a></li>
				<li><a href="<?= base_url('home/blogs')?>">Blogs</a></li>
				<li><a href="<?= base_url('home/society_map')?>">Maps</a></li>
				<li><a href="<?= base_url('home/investment')?>">Investment Guide</a></li>
			</ul>
		</div>
		<div class="col-md-5 ">
			<ul class="top-social-network right">
				<li><button onclick="location.href='<?= base_url('home/assessment')?>'" class="btn btn-mandy btn-rectangle btn-stroke" type="submit">Free Assessment</button></li>
				<li style="padding: 7px 0px 0px 0px;"><a href="#">Contact Us</a></li>
				<li>
					<div class="hdr_sr_input r">
						<form method="post" action="<?= base_url('home/search_post_property_id')?>">
							<input style="height:27px;" id="selector_input" name="search" type="text" class="l" required placeholder="Property ID">
							<button style="padding: 0px 0px; margin-left: 88px; margin-top: -46px;" class="btn btn-info btn-xs"><span class="fa fa-search"></span></button>
						
							</form>
						
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- End top section -->
	
	<div class="clearfix"></div>
	
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">            
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li>
                        <img src="<?= base_url('assets/frontend/ico/pakistan_flag.jpg')?>" style="width: 54px; height: 31px; float: left;	    border: 1px solid #000; margin-top: 22px;">
	    					<span class="title " style="color: #848484; text-transform: capitalize;font-size: 14px; font-weight: 400; padding: 3px 1px; float: right; margin: 18px; border-bottom: 1px solid #cc3737;">Pakistan's Best Property Consultant</span>
                    </li>
                    
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url('home')?>"><img src="<?= base_url('assets/frontend/images/logo.png')?>" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="<?php if($current_link == base_url('home')) { echo 'active'; } ?>"><a href="<?= base_url('home')?>">Home</a></li>
                    <li class="<?php if($current_link == base_url('home/plots')) { echo 'active'; } ?>"><a href="<?= base_url('home/plots')?>">Plots</a></li>
                    <li class="<?php if($current_link == base_url('home/commercial')) { echo 'active'; } ?>"><a href="<?= base_url('home/commercial')?>">Commercial</a></li>
                    <li class="<?php if($current_link == base_url('home/rent')) { echo 'active'; } ?>"><a href="<?= base_url('home/rent')?>">Rent</a></li>
                    <li class="<?php if($current_link == base_url('home/new_project')) { echo 'active'; } ?>"><a href="<?= base_url('home/new_project')?>">Projects</a></li>
					<li class="<?php if($current_link == base_url('home/agents')) { echo 'active'; } ?>"><a href="<?= base_url('home/agents')?>">Agents</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>  
        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Type something ann hit enter">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search --> 
    </nav>
    <!-- End Navigation -->