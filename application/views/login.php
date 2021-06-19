<!DOCTYPE HTML>

<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bacotna is a truly multi purpose template, coming with 50+ ready-to-use Homepages & 100+ HTML Files in one Package. Build whatever you like with this Template.Be it Business, Corporate, Medical, Travel, Construction, Real Estate, Magazine, Portfolio, Agency, Hotel, Yoga, Hosting, Photography, Ecommerce, Industry or Product launch, just everything is possible with bacotna.">
	<meta name="keywords" content=" app, business, construction, corporate, creative, ecommerce, hosting, hotel, magazine, medical, multipurpose, photography, real estate, restaurant, yoga">
	<meta name="robots" content="index,follow">
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  
	<!--<link rel='stylesheet prefetch' href="<?= base_url('assets/css/font-awesome.min.css')?>">-->
	<link rel="shortcut icon" href="<?= base_url('assets/ico/fav.png')?>" />

    <title>Habro Real Estate</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	<!--<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/normalize.min.css')?>">-->

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/settings.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/layers.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/navigation.css')?>"> 
	
    
    <link href="<?= base_url('assets/css/royalslider_v9_1.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/login.css')?>" rel="stylesheet">
    
    <!-- Color -->
    <link id="skin" href="<?= base_url('assets/css/default.css')?>" rel="stylesheet">
   
</head>
<body>
	<!-- Start preloading -->
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
				<li class="active"><a class="bgc hdr_hic" title="www.habrorealestate.com" href="index.html">&nbsp;</a></li>
				<li><a href="#">Properties</a></li>
				<li><a href="#">Market Updates</a></li>
				<li><a href="blogs.html">Blogs</a></li>
				<li><a href="society-maps.html">Maps</a></li>
				<li><a href="#">Investment Guide</a></li>
			</ul>
		</div>
		<div class="col-md-5 ">
			<ul class="top-social-network right">
				<li><button onclick="location.href='assessment.html'" class="btn btn-mandy btn-rectangle btn-stroke" type="submit">Free Assessment</button></li>
				<li style="padding: 7px 0px 0px 0px;"><a href="#">Contact Us</a></li>
				<li>
					<div class="hdr_sr_input r">
						<form method="post" action="<?= base_url('home/search_post_property_id')?>">
						<input id="selector_input" name="search" type="text" class="l" required placeholder="Property ID">
						</form><span class="fa fa-search"></span>
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
                        <img src="<?= base_url('assets/ico/pakistan_flag.jpg')?>" style="width: 54px; height: 31px; float: left;	    border: 1px solid #000; margin-top: 22px;">
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
                <a class="navbar-brand" href="<?= base_url('')?>"><img src="<?= base_url('assets/img/logo.png')?>" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="plots.html">Plots</a></li>
                    <li><a href="#">Commercial</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="new-project.html">Projects</a></li>
					<li><a href="agents.html">Agents</a></li>
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
	<br><br> 
	<div id="wrap" class="container">
		<div class="col-sm-6 register" style=";">
			<div class="login-data">
				<h4>Login Now, It’s Free!</h4>
				<p>Login to continue to your personal panel</p>
				<p><i class="fa fa-check"></i><span>The size of an apartment or house can be described in square feet or meters.<span></p>
				<p><i class="fa fa-check"></i><span>The size of these is measured in Gaz (square yards), Quila, Marla, Beegha, and acre.<span></p>
				<p><i class="fa fa-check"></i><span> A building or complex, similar to apartments, owned by individuals.<span></p>
			</div> 
		</div>

		<div class="col-sm-4">
			<form class="form-login" role="form" method="post" action="<?= base_url('login/signin')?>">
				<div class="heading">Login to habro</div>
				<div class="input-group row">
					<label class="control-label col-sm-3" for="email">Email:</label>
					<div class="col-sm-7">
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
					</div>
				</div>
				 
					
				<div class="input-group row">
					<label class="control-label col-sm-3" for="password">Password:</label>
					<div class="col-sm-7">
						<input type="password" class="form-control" name="password" placeholder="Enter password">
					</div>
				</div>
			
				<div class="input-group row">
					<input type="checkbox" style="margin-left:9px"  class="col-sm-1" id="terms"/>
					<label for="terms">Remember me</label>
				</div>
				
				<div class="margin">
					<button type="submit" class="btn btn-info" id="btn_login" style="margin-bottom:16px">Submit</button>
					<a href="<?= base_url('')?>"><button type="button" style="margin-top:-16px" class="btn btn-link">Forgot Password</button></a >
				</div>
			</form>
		</div>
	</div>

</body>
<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					
					<div class="widget">
						<h5>HABROREALESTATE.COM</h5>
						<ul class="office-contact">
							<li>
								<i class="fa fa-map-marker"></i>
								
								Habro Real Estate 5 Star Heights, Street 19-A DHA Phase - II, Islamabad Pakistan.
							</li>
							<li>
								<i class="fa fa-phone"></i>
								
								(+92 ) 51-541-82-92
							</li>
							<li>
								<i class="fa fa-envelope"></i>		
								info@habrorealestate.com
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="widget">
						<h5>CONSULTANT COMPANY</h5>
						<ul class="link-list">
							<li><a href="#">About us</a></li>
							<li><a href="#">Our services</a></li>
							<li><a href="#">Members</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Meet our team</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Help Center</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Community</a></li>
							<li><a href="#">Forum</a></li>
						</ul>
					</div>

				</div>
				
				<div class="col-md-3">
					
					<div class="widget">
						
						<ul class="social-icons">
							<li><a href="#"><img src="<?= base_url('assets/ico/facebook.png')?>"> Like Us On Facebook</a></li>
							<li><a href="#"><img src="<?= base_url('assets/ico/twitter.png')?>"> Follow Us On Twitter</a></li>
							<li><a href="#"><img src="<?= base_url('assets/ico/google-plus.png')?>"> Share Us On Google +</a></li>
							<li><a href="#"><img src="<?= base_url('assets/ico/linkedin.png')?>"> Consult Us On Linkedin</a></li>
							<li><a href="#"><img src="<?= base_url('assets/ico/facebook.png')?>"> Like Us On facebook</a></li>
							
						</ul>
						
					</div>	
					
				</div>
			</div>
		</div>
		<div class="subfooter">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<span class="bgc awrd_three l"></span>
						<span class="bgc awrd awrd_one l"></span>
						<span class="bgc awrd awrd_two l"></span>
					</div>
					<div class="col-md-4 col-sm-12">
						<p><a href="#">Lahore Property </a> | <a href="#">Karachi Property </a> | <a href="#">Islamabad Property </a>  </p>
						<p>Copyright 2014 - 2018 <a href="habrorealestate.com">habrorealestate.com</a>. All rights are reserved.</p>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="official-home-partners-text">Work Experience</div>
						<div class="">
							<img style="width: 75%;
    display: block;
    padding-left: 86px;

    margin-top: 74px;" src="<?= base_url('assets/ico/15-years.png')?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/js/loading.js')?>"></script>
	<script src="<?= base_url('assets/js/ie-emulation-modes-warning.js')?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?= base_url('assets/js/jquery.easing-1.3.min.js')?>"></script>
	<script src="<?= base_url('assets/js/ie10-viewport-bug-workaround.js')?>"></script>
	<script src="<?= base_url('assets/js/bootsnav.js')?>"></script>
	<script src="<?= base_url('assets/js/custom.js')?>"></script>
    <script src="<?= base_url('assets/js/template-option/demosetting.js')?>"></script>

</body>
</html>