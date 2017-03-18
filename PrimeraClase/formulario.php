<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios</title>
</head>
<?php 

	#$_GET['numero1']
	#$_GET['numero1']
	
	$numero1='';$numero2='';
	if(isset($_GET['numero1']) && isset($_GET['numero2'])){
		$numero1=$_GET['numero1'];
		$numero2=$_GET['numero2'];
	}
?>
<body>
	<form action="./formulario.php" method="GET">
		<input type="text" name="numero1" value="<?php echo $numero1;?>">
		<input type="text" name="numero2" value="<?php echo $numero2;?>">
		<input type="submit" value="Enviar">
	</form>
<?php 
 
	if(isset($_GET['numero1']) && isset($_GET['numero2'])){

		echo '<br>'.($numero1+$numero2);
	}else{
		echo '<br> Te falta un numero';
	}
?>	
</body>
</html>