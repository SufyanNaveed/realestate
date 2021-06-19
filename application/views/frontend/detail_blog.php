<?php include_once('header.php');?>
	


    <div class="container">
		<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
			<div class="contain-wrapp padding-top20 padding-bot20">	
				<div class="row">
					<div id="hdr_main">              
						<a class="terms-tabs" href="#">Buying</a>

						<a class="terms-tabs" href="#">Commercial</a>

						<a class="terms-tabs" href="#">Construction</a>

						<a class="terms-tabs" href="#">Development Authority</a>

						<a class="terms-tabs" href="#">General</a>

						<a class="terms-tabs" href="#">Home Decor</a>

						<a class="terms-tabs" href="#">Housing Schemes</a>

						<a class="terms-tabs" href="#">Interiors</a>

						<a class="terms-tabs" href="#">Investment Tips</a>

						<a class="terms-tabs" href="#">Leasing</a>

						<a class="terms-tabs" href="#">News &amp; Updates</a>

						<a class="terms-tabs" href="#">Pakistan Real Estate</a>

						<a class="terms-tabs" href="#">Renting</a>

						<a class="terms-tabs" href="#">Selling</a>

						<a class="terms-tabs" href="#">Taxation</a>

						<a class="terms-tabs" href="#">Tourism</a>
					</div>
				</div>
			</div>
		</div>
	</div>
 	<div class="container">
		<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
			<div class="contain-wrapp padding-top20 padding-bot20" style="padding: 15px;">	
				<div class="row">
					<div class="col-md-9 col-sm-8">
						<!-- Start post 1 -->
						<article class="post">
							<h4><a href="<?= base_url('home/detail_blog/'.$blog['blog_id'])?>"><?= $blog['title']?></a></h4>
							<p class="meta"><?php  $date = explode(' ',$blog['blog_created_date']); echo $date[0]; ?> •	
								<a href="<?= base_url('home/detail_blog')?>">Blog</a>,
								<?php  $category = explode(',',$blog['category']);
								foreach($category as $key=>$row){ ?>
									<a href="<?= base_url('home/detail_blog/'.$row)?>"><?= $row ?></a>,
								<?php } ?>
				  			</p>
							<div class="media-wrapper">
								<a href="<?= base_url('home/detail_blog/'.$blog['blog_id'])?>"><img src="<?= base_url('blog_images/'.$blog['blog_image'])?>" class="img-responsive" alt=""></a>
								
							</div>
							
							<p>	<?= $blog['description'] ?></p>
							
							
						</article>
						<!-- End post 1 -->

						
					</div>
					<div class="col-md-3 col-sm-4">
						<aside>
							<div class="widget">
								<h6 class="widget-head">Resent Blogs</h6>
								<div class="recent-widget">
									<?php foreach($blogs as $key => $row){ if($key == 5) { break; }else{?>
									<div class="post">
										<a href="<?= base_url('home/detail_blog/'.$row['blog_id'])?>" class="post-thumbnail"><img src="<?= base_url('blog_images/'.$row['blog_image'])?>" class="alignleft" alt=""></a>
										<h6><a href="<?= base_url('home/detail_blog/'.$row['blog_id'])?>"><?= $row['title']?></a></h6>
										<p class="meta"><?php  $date = explode(' ',$row['blog_created_date']); echo $date[0]; ?> •	
									</div>
									<?php }} ?>
								</div>
							</div>
						</aside>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>
