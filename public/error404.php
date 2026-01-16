<?php require_once __DIR__."/../config/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="<?=BURL ?>public/asset/css/bootstrap-five.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL ?>public/asset/css/bootstrap-four.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL ?>public/asset/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL ?>public/asset/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL ?>public/asset/css/sweetalert2.min.css">



	<!-- Favicons -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?=BURL?>public/asset/img/favicon/16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=BURL?>public/asset/img/favicon/32x32.png">
	<link rel="icon" type="image/png" sizes="48x48" href="<?=BURL?>public/asset/img/favicon/48x48.png">
	<link rel="icon" type="image/png" sizes="112x112" href="<?=BURL?>public/asset/img/favicon/112x112.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?=BURL?>public/asset/img/favicon/192x192.png">
	<link rel="icon" type="image/png" sizes="512x512" href="<?=BURL?>public/asset/img/favicon/512x512.png">


	<title>Unauthorised Access (Error 404)</title>
</head>
<body class="bg-light">

	<style>
		body{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
			padding-top: 100px;
			cursor: default;

		}

		p,h1,h2,h3,h4,h5,h6{
			padding: 0px!important;
			margin: 0px!important;
		}
		p{
			font-family:Poppins;
		}
		.p{
			font-size: 30px;
			margin-top: -20px!important;
		}
		.h1{
			font-size: 200px;
			font-family: Montserrat;
			margin-top: -40px!important;
		}
		.h4{
			font-family:Poppins;
			color: <?=APP_COLOR ?>;
		}

	</style>
	

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3" align="center">
				<h4 class="h4"><?=$lang->error_403_page->error ?></h4>
				<h1 class="h1 fw-bold"><?=$lang->error_403_page->error403 ?></h1>
				<div style="margin-top:-30px;">
					<h1><?=$lang->error_403_page->access_denied ?></h1>
					
					<p>
						<?=$lang->error_403_page->paragraph ?>
					</p>
				</div>
				
				<a href="<?=BURL ?><?=$url_translator?>/auth/register" class="btn btn btn-lg text-white" style="background:<?=APP_COLOR ?>;">
					<?=$lang->error_403_page->go_to_homepage ?>
				</a>


			</div>
		</div>
	</div>

	<script src="<?=BURL?>public/asset/js/jquery-3.7.1.min.js"></script>
	<script src="<?=BURL?>public/asset/js/bootstrap-five.bundle.min.js"></script>
	<script src="<?=BURL?>public/asset/js/bootstrap-four.bundle.min.js"></script>
	<script src="<?=BURL?>public/asset/js/owl.carousel.min.js"></script>
	<script src="<?=BURL?>public/asset/js/sweetalert2.min.js"></script>
	<script src="<?=BURL?>public/asset/js/scrollreveal.min.js"></script>
</body>
</html>