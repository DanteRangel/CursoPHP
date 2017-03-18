<?php 
	// WHILE
		$contador=1;
		while($contador<10){
			echo "Hola mundo desde while".$contador." <br>";
			$contador++;
		}
		//echo "Ya termino WHILE<br>";
		do{
			if($contador>1){
				echo "Iteracion numero ".($contador-1).'<br>';

			}else{
			echo 'Se ejecuto una vez '.$contador.'<br>';	
			}
			
			$contador++;
		}while($contador<10);


?>