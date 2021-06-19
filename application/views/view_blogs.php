<?php include_once('includes/header.php'); ?>

<?php include_once('includes/extra_sidebar.php'); ?>
		
		<div class="col-lg-9">
			<ol class="breadcrumb">
				<li><a href="<?= base_url('dashboard/view_blogs')?>">Blogs</a></li>
				<li>View Blogs</li>					
			</ol>
				
			<ul class="nav nav-tabs"> 
				<li class="active">
					<a data-toggle="tab" href="#home">View Blogs</a>
				</li>		
			</ul>
			
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					
					<?php if($this->session->flashdata('success')){?>
						<div class="alert alert-success">      
							<?php echo $this->session->flashdata('success')?>
						</div>
					<?php } ?>												
					<?php if($this->session->flashdata('error')){?>
						<div class="alert alert-danger">
						<?php echo $this->session->flashdata('error')?>
						</div>														
					<?php } ?>
					
					<table class="table-bordered" style="width:100%">
						<tr style="background-color:#05a7e5; color:white;">
							<th>ID</th>
							<!---<th>Category</th>--->
							<th>Title</th>							
							<th>Description</th>							
							<th>Image</th>							
							<th>Action</th>							
						</tr>
						
						<?php foreach($blogs as $row){ ?>
						<tr>
							<td><?= $row['blog_id']?></td>
							<!---<td><?= $row['category']?></td>-->
							<td><?= $row['title']?></td>
							<td><?= substr($row['description'],0,30)?>...<a href="<?= base_url('home/detail_blog/'.$row['blog_id'])?>">Read More</a></td>
							<td><img style="height:50px; width:70px;" src="<?= base_url('blog_images/'.$row['blog_image'])?>"></td>
							<td>
								<a href="<?= base_url('dashboard/delete_blogs/'.$row['blog_id'])?>" onClick="return dodelete();"><i class="fa fa-remove"></i></a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php include_once('includes/footer.php'); ?>