<?php
/*
	for($i=1; $i<=10; $i++){
			echo '2 x '.$i.' = '.($i*2).'<br>';
	}
	*/


# Comentarios
// Comentarios
	$booelean=true; // false
	$arreglo=array(0,1,2,3,4,5,6,7,8,9);
	$arreglo2=[0,1,2,3,4,5,6,7,8,9];
	$arreglo_asociativo=array(
			array(
				'nombre'=>'Fabian',
				'Apellido'=>'Martinez',
				'edad'=>25,
				'Estado_Civil'=>'Soltero',
				'Genero'=>'Masculino'
				),
			array(
				'nombre'=>'Alan',
				'Apellido'=>'Canseco',
				'edad'=>31,
				'Estado_Civil'=>'Casado',
				'Genero'=>'Masculino',
				'Escolaridad'=>'Preparatoria'
			)
	);
	#print_r($arreglo_asociativo);

	#	echo $arreglo_asociativo['nombre'];
	/*for($i=0;$i<count($arreglo2);$i++){
		echo $arreglo2[$i].'<br>';
	}
	foreach($arreglo2 as $llave=>$valor){
		//echo 'arreglo2['.$llave.'] = '.$valor.'<br>';
	}*/

?>
<table>
	<thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Edad</th>
		<th>Estado Civil</th>
		<th>Género</th>
	</thead>
	<?php 
	for($i=0; $i<count($arreglo_asociativo); $i++){
	?>
	<tr>
		<?php foreach ($arreglo_asociativo[$i] as $llave=>$valor) {
		?>
		<td><?php echo $valor;
				?></td> 
		<?php 
		}
		?>
	</tr>
	<?php
	 }
	?>
</table>
<?php
/*
	foreach ($arreglo_asociativo as $llave => $valor) {
		# code...
		//echo "Su ".$llave.' es :'.$valor.'<br>';
	}*/


			//$arreglo_asociativo->nombre;
	#var_dump($arreglo);
	#var_dump($arreglo2);
	#print_r($arreglo);







/*
	for
	foreach
	while
	do while
	*/
?>
