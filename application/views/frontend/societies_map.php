<?php include('header-2.php'); ?>


	<div class="container">
		<div class="detail-product1" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;">
			<div class="heading">Society Maps in <?= $city['city_name']; ?></div>
			<div class="contain-wrapp padding-top20 padding-bot20">	
				<div class="row">
					<div class="catbox">
						<ul class="smaps_list">
							<?php foreach($society as $row){?>
								<li class="l"><a href="<?= base_url('home/phase_maps/'.$row['society_id'])?>"><?= $row['society_name']?></a>
								<?php 
									$this->db->from('maps');
									$this->db->where('society_id',$row['society_id']);
							        $maps = $this->db->get()->result_array();
								?>
								 (<?= count($maps); ?>) </li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
			

<?php include('map-footer.php'); ?>