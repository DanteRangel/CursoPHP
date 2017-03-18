<?php 

	#echo (3+6).'<br>';
	#echo suma(3,6);
	echo holaMundo('Ruben').'<BR>';
	echo tablaMxN(10,10);







	function suma($n1,$n2){
		return $n1+$n2;
	}	
	function holaMundo($nombre="Invitado"){
		return "Bienvenido ".$nombre;
	}
	function tablaMxN($x,$y){
		$html='';
		for ($i=1; $i<=$x ; $i++) { 
			for ($j=1; $j <=$y ; $j++) { 
				$html.=' - '.($i*$j);
			}
			$html.='<br>';
		}
		return $html;
	}


?>