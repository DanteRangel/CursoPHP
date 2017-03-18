<?php 
	$host='localhost';
	$database='CursoPHP';
	$pass='pass123';
	$user='root';

	$conexion=mysqli_connect($host,$user,$pass,$database) or die('Error en la conexion');

?>