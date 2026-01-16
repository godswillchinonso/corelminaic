<?php 
	// This route is specifically for building Web Applications

	use App\Controller\Public\Page\HomepageController;

	$app->get("",[HomepageController::class,"loadHome"]);