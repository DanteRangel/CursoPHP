<?php 

	include('config/config.php');
	
	if(isset($_GET['view']) && file_exists(APP_Controller.$_GET['view'].'Controller.php')){
		include(APP_Controller.$_GET['view'].'Controller.php');
	}else{
		include(APP_Controller.'HomeController.php');
	}
	
?>