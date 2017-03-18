<?php 
	include('./persona.php');
	Class Alumno extends Persona{
		public $escolaridad,$vocacion,$matricula,$scuela;

		public function beber(){
			return 'Mi nombre es '.$this->nombre.' y en vez de estar en la escuela estoy bebiendo :) <br>';
		}
		public function loquesea($tiempo){
			return $this->correr($tiempo);
		}
		/* EN PHP NO  EXISTE LA SOBRECARGA DE METODOS
		public function loquesea($parametro1,$parametro2{


		}*/
		public function saludar(){
			return "Hola soy un estudiante y tambien puedo saludar<br>";
		}
	}


	$alumno=new Alumno('Juan');
	#echo $alumno->saludar();
	#echo $alumno->beber();
	$persona=new Persona('Dante');
	$personas=array($alumno,$persona);
	foreach ($personas as $persona) {
		echo $persona->saludar();
	}

	#echo $alumno->loquesea(10);
	#echo $alumno->loquesea(12,12); 
	#var_dump($alumno);

?>