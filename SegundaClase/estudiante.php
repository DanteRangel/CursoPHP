<?php 
include('./persona.php');

Class Estudiante extends Persona{
	public $licenciatura,$noCuenta;
	public function setDatos($licenciatura,$noCuenta){
		$this->licenciatura=$licenciatura;
		$this->noCuenta=$noCuenta;
	}
	public function saludar(){
		return 'Mi nombre es '.$this->nombre.' '.$this->apellidoPaterno .' y soy del genero '.$this->genero.' estudio '.$this->licenciatura.'y mi cuenta es la '.$this->noCuenta.'<br>';
	}	
	public function saludar($nombre){
		return 'Hola '.$nombre;
	}

}

$estudiante=new Estudiante('Meribel Berenice','Rangel Robles','Femenino');
$persona=new Persona('Meribel Berenice','Rangel Robles','Femenino');
$estudiante->setDatos('Informatica','311332065');


$arregloPersonas=[$estudiante,$persona];

foreach ($arregloPersonas as $personas) {
	//echo $personas->saludar();
	//var_dump($personas);
	echo $personas->saludar('Dante');
}

?>