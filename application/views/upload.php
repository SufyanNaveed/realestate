<!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sorter default example - Fileuploader</title>
<?php include_once('includes/header.php'); ?>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
		
		<!-- styles -->
		<link href="<?= base_url()?>assets/upload_images/css/jquery.fileuploader.min.css" media="all" rel="stylesheet">
		
		<!-- js -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
		<script src="<?= base_url()?>assets/upload_images/js/jquery.fileuploader.min.js" type="text/javascript"></script>
		<script src="<?= base_url()?>assets/upload_images/js/custom.js" type="text/javascript"></script>

		<style>
			body {
				font-family: 'Roboto', sans-serif;
				font-size: 14px;
                line-height: normal;
				color: #47525d;
				background-color: #fff;

				margin: 0;
				padding: 20px;
				
				width: 560px;
			}
		</style>
	</head>

	<body>
		<form >
			<input type="file" name="files">
			
		</form>
    </body>
</html>