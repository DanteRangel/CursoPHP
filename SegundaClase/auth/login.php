<?php 
	include('../conexion/conexion.php');
	if(isset($_POST['correo']) && isset($_POST['password'] ) ){
		

	}else{
		header('Location : ../index.php?error=Error');
	}
?> 