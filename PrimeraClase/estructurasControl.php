<?php 
	
	$edad=11;
	$genero="Masculino";  
	$estado_Civil="Casado";
	$helado="chocolate";
	$mayor_Edad=($edad>18 && $genero=='Masculino')?"Eres mayor de edad y eres hombre":'Eres menor de edad y eres mujer';
	echo '<br>'.$mayor_Edad.'<br>';

	      //true                       //true
 	if($edad>20 && $genero=="Masculino"){/*condicion*/ 
		echo "Bienvenido a Deportes";
	}else{
		echo "Bienvenia a cualquier parte de la tienda para mujeres";
		if($edad<20){
			switch ($helado) {
				case 'vainilla':
						echo "Tu mama me debe 15 pesos";
				break;
				case "Chocolate":
				case "CHOCOLATE":
				case 'chocolate':
						echo "Tu mama me debe 17 pesos";
				break;
				case "fresa":
						echo "Tu mama me debe 13 pesos";
				break;
				default:
						echo "Tu mama me debe 10 pesos por que el helado es normal";
				break;
			}
		}
	}
	if($edad<20 && $genero=="Masulino"){

		echo "Bienvenido a las jugueteria";

	}else if($edad>20 && $genero=="Masulino"){
		if($estado_Civil!='Casado')
			echo "Bienvenido a vinos y licores";
		else
			echo "Si entras te van a pegar";
	}







?>