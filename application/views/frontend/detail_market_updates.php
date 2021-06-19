<?php include_once('header.php');?>
	
 	<div class="container">
		<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
			<div class="contain-wrapp padding-top20 padding-bot20" style="padding: 15px;">	
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<!-- Start post 1 -->
						<article class="post">
							<h4><a href="<?= base_url('home/detail_market_update/'.$market_update['market_update_id'])?>"><?= $market_update['title']?></a></h4>
							<p class="meta"><?php  $date = explode(' ',$market_update['mu_created_date']); echo $date[0]; ?> </p>
							<div class="media-wrapper">
								<a href="<?= base_url('home/detail_market_update/'.$market_update['market_update_id'])?>"><img src="<?= base_url('market_updates/'.$market_update['mu_image'])?>" class="img-responsive" alt=""></a>
							</div>
							
							<b>Description: </b><p>	<?= $market_update['description'] ?></p>
							<!--<h6>More From Habro Real Estate Blog</h6>
							<div class="row">
								<div class="col-md-3">
									<div class="thumbnail">
										<img src="<?= base_url('assets/frontend/images/image19.jpg')?>" class="img-responsive" alt="">
										<p><a href="#">Ring Road Phase II</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="thumbnail">
										<img src="<?= base_url('assets/frontend/images/image19.jpg')?>" class="img-responsive" alt="">
										<p><a href="#">Ring Road Phase II</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="thumbnail">
										<img src="<?= base_url('assets/frontend/images/image19.jpg')?>" class="img-responsive" alt="">
										<p><a href="#">Ring Road Phase II</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="thumbnail">
										<img src="<?= base_url('assets/frontend/images/image19.jpg')?>" class="img-responsive" alt="">
										<p><a href="#">Ring Road Phase II</a></p> 
									</div>
								</div>

							</div>-->
							
						</article>
						<!-- End post 1 -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>
