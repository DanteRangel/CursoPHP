<?php 
	$host='localhost';//41.12.123.12
	$pass='311332065';
	$user='root';
	$database='CursoPHP';

	$conexion=mysqli_connect($host,$user,$pass,$database) or die('Error en la conexión');

	/*$sql="SELECT * FROM Usuario";
	$resultado=mysqli_query($conexion,$sql);
	#$elementos=mysqli_fetch_array($resultado);
	//json_encode($elementos,true);
	while($elementos=mysqli_fetch_array($resultado)){
		echo $elementos['correo'].'<br>';
	}
	
	var_dump($elementos);
	foreach($elementos as $llave=>$valor){
		echo 'Columna['.$llave.'] = '.$valor.'<br>'; 	
	}*/
	
?>