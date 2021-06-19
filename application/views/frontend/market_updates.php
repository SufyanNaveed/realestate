<?php include('header.php'); ?>

 	<div class="container">
		<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
			<div class="contain-wrapp padding-top20 padding-bot20" style="padding: 15px;">	
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<!-- Start post 1 -->
						<article class="post">
							<div class="media-wrapper">
								<a href="<?= base_url('home/detail_market_update/'.$market_update['market_update_id'])?>"><img src="<?= base_url('market_updates/'.$market_update['mu_image'])?>" class="img-responsive" alt=""></a>
								
							</div>

							<h5><a href="<?= base_url('home/detail_market_update/'.$market_update['market_update_id'])?>"><?= $market_update['title']?></a></h5>
							<p class="meta"><?php  $date = explode(' ',$market_update['mu_created_date']); echo $date[0]; ?> </p>
							<p>	<?= substr($market_update['description'],0,300) ?> ... 
							<a href="<?= base_url('home/detail_market_update/'.$market_update['market_update_id'])?>">Read More</a></p>
						</article>
						<!-- End post 1 -->

						<!-- Start post 2 -->
						<?php foreach($market_updates as $row){?>
						<article class="post">
							<div class="row news-row">
								<div class="col-md-12">
									<img src="<?= base_url('market_updates/'.$row['mu_image'])?>" class="alignleft" alt="">
									<h5><a href="<?= base_url('home/detail_market_update/'.$row['market_update_id'])?>"><?= $row['title']?></a></h5>
									<p class="meta"><?php  $date = explode(' ',$row['mu_created_date']); echo $date[0]; ?> </p>
									<p>	<?= substr($row['description'],0,300) ?>... <a href="<?= base_url('home/detail_market_update/'.$row['market_update_id'])?>">Read More</a></p>
								</div>
							</div>
						</article>
						<?php } ?>
						<!-- End post 2 -->

						<nav>
							<ul class="pagination">
								<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
							</ul>
						</nav>
					</div>
					<!--<div class="col-md-3 col-sm-4">
						<aside>
							<div class="widget">
							<h6>Subscribe For Daily Blog Alert</h6>
							<form class="form-subscribe">
								<input type="text" class="input-subscribe" placeholder="Enter your email address...">
								<button class="btn btn-primary btn-icon btn-block btn-turquoise" type="button">Subscribe now</button>
							</form>
						</div>
						</aside>
						<aside>
							
							<div class="widget">
								<h6 class="widget-head">Resent Blogs</h6>
								<div class="recent-widget">
									<?php foreach($blogs as $row){?>
									<div class="post">
										<a href="<?= base_url('home/detail_blog/'.$row['blog_id'])?>" class="post-thumbnail"><img src="<?= base_url('blog_images/'.$row['blog_image'])?>" class="alignleft" alt=""></a>
										<h6><a href="<?= base_url('home/detail_blog/'.$row['blog_id'])?>"><?= $row['title']?></a></h6>
										<p class="meta"><?php  $date = explode(' ',$row['blog_created_date']); echo $date[0]; ?> •	
									</div>
									<?php } ?>
								</div>
							</div>
							
							
						</aside>
						<aside>
							<div class="widget">
								<h6>Blog Archieve</h6>
								<div class="panel-group" id="accordion1">
			                        <div class="panel panel-linner">
			                            <div class="panel-heading" id="heading4">
			                                <span class="panel-title">
			                                    <a data-toggle="collapse" data-parent="#accordion1" href="#panel4" aria-expanded="false" class="collapsed">
			                                        2018
			                                    </a>
			                                </span>
			                            </div>
			                            <div id="panel4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
			                                <div class="panel-body">
			                                    <ul>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">July (26)</span></a></li>
		                        					<li class="child-2018 child-li-arc" id="56" style="display: list-item;"><a href="#"><span class="archive-month ">June (56)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="70" style="display: list-item;"><a href="#"><span class="archive-month ">May (70)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="62" style="display: list-item;"><a href="#"><span class="archive-month ">April (62)</span></a></li>	
							                        <li class="child-2018 child-li-arc" id="57" style="display: list-item;"><a href="#"><span class="archive-month ">March (57)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="62" style="display: list-item;"><a href="#"><span class="archive-month ">February (62)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="87" style="display: list-item;"><a href="#"><span class="archive-month ">January (87)</span></a></li>
							                    </ul> 
			                                </div>
			                            </div>
			                        </div>
			                        <div class="panel panel-linner">
			                            <div class="panel-heading" id="heading5">
			                                <span class="panel-title">
			                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#panel5" aria-expanded="false">
			                                        2017
			                                    </a>
			                                </span>
			                            </div>
			                            <div id="panel5" class="panel-collapse collapse" aria-expanded="false">
			                                <div class="panel-body">
			                                	<ul>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">December (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">November (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">Obtober (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">September (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">August (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">July (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">July (26)</span></a></li>
		                        					<li class="child-2018 child-li-arc" id="56" style="display: list-item;"><a href="#"><span class="archive-month ">June (56)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="70" style="display: list-item;"><a href="#"><span class="archive-month ">May (70)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="62" style="display: list-item;"><a href="#"><span class="archive-month ">April (62)</span></a></li>	
							                        <li class="child-2018 child-li-arc" id="57" style="display: list-item;"><a href="#"><span class="archive-month ">March (57)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="62" style="display: list-item;"><a href="#"><span class="archive-month ">February (62)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="87" style="display: list-item;"><a href="#"><span class="archive-month ">January (87)</span></a></li>
							                    </ul> 
			                                </div>
			                            </div>
			                        </div>
			                        <div class="panel panel-linner">
			                            <div class="panel-heading" id="heading6">
			                                <span class="panel-title">
			                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#panel6" aria-expanded="false">
			                                        2016
			                                    </a>
			                                </span>
			                            </div>
			                            <div id="panel6" class="panel-collapse collapse" aria-expanded="false">
			                                <div class="panel-body">
			                                    <ul>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">December (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">November (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">Obtober (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">September (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">August (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">July (26)</span></a></li>
				                                    <li class="child-2018 child-li-arc" id="26" style="display: list-item;"><a href="#"><span class="archive-month ">July (26)</span></a></li>
		                        					<li class="child-2018 child-li-arc" id="56" style="display: list-item;"><a href="#"><span class="archive-month ">June (56)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="70" style="display: list-item;"><a href="#"><span class="archive-month ">May (70)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="62" style="display: list-item;"><a href="#"><span class="archive-month ">April (62)</span></a></li>	
							                        <li class="child-2018 child-li-arc" id="57" style="display: list-item;"><a href="#"><span class="archive-month ">March (57)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="62" style="display: list-item;"><a href="#"><span class="archive-month ">February (62)</span></a></li>
							                        <li class="child-2018 child-li-arc" id="87" style="display: list-item;"><a href="#"><span class="archive-month ">January (87)</span></a></li>
							                    </ul> 
			                                </div>
			                            </div>
			                        </div>
			                    </div>
							</div>
						</aside>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>