<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
</head>

<body>

<h1>
	<?php echo "dentro de Etiqueta"; ?>
</h1>


<?php 
	$nombre="Dante Rangel";
	echo "<h1 style='color:blue;'>Ola k ase..</h1><h3> ".$nombre."</h3>";


	/*
		=
		+=
		-=
		*=
		/=
variable=variable+1;
variable+=1;



	*/
$tipo="r";
	switch($tipo){
		case "alumno":
			echo "Hola Alumno";
		break;
		case "instructor":
			echo "Hola Instructor";
		break;
		default:
			echo "Hola no se quien eres";
		break;
	}
?>
	
</body>
</html>
