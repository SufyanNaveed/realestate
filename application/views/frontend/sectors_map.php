<?php include('header-2.php'); ?>


	<div class="container">
		<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
			<div class="heading">Sector Maps in <?= $phase['phase_name']; ?></div> 
			<div class="contain-wrapp padding-top20 padding-bot20">	
				<div class="row">
					<div class="catbox">
						<ul class="smaps_list">
							<?php foreach($sector as $row){?>
								<li class="l"><a href="<?= base_url('home/view_maps/'.$row['sector_id'])?>"><?= $row['sector_name']?></a> (<?= $row['title']; ?>)</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
			

<?php include('map-footer.php'); ?>