<?php
	require('config/config.php');
	if(isset($_GET['controller']) && file_exists(APP_Controller.$_GET['controller'].'Controller.php')){
		require(APP_Controller.$_GET['controller'].'Controller.php');

	}else{
		echo 'no existe';
	}

?>