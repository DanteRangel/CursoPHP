<?php 
	require(APP_Model.'/Producto.php');
	$producto=new Producto();
	$contenido= $producto->all();
	//var_dump($contenido);
	require('View/Producto/index.php');
?>