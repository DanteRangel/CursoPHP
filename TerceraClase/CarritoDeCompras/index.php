<?php 

	include('config/config.php');
	
	if(isset($_REQUEST['controller']) && file_exists(APP_Controller.$_REQUEST['controller'].'Controller.php') && isset($_REQUEST['metodo'])){
		$controller=include(APP_Controller.$_REQUEST['controller'].'Controller.php');
		$metodo=$_REQUEST['metodo'];
		if(method_exists($controller, $metodo)){
			
			$controller->$metodo($_REQUEST);
			//$controller->update($_REQUEST);
		}else{
			$controller->index($_REQUEST);
		} 

	}else{
		include(APP_Controller.'HomeController.php');
	}
	
?>