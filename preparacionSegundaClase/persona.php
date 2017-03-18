<?php
class Persona{
	public $nombre,$apellidoPaterno,$genero;
	private $

	public function __construct($nombre='Sin nombre',$apellidoPaterno='Sin Apellido',$genero='Masculino'){
		$this->nombre=$nombre;
		$this->apellidoPaterno=$apellidoPaterno;
		$this->genero=$genero;

	}
	public function saludar(){
		return 'Mi nombre es '.$this->nombre.' '.$this->apellidoPaterno .' y soy del genero '.$this->genero.'<br>';
	}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}

}



	$persona=new Persona('Dante','Rangel','Masculino');
	echo $persona->saludar();
	$persona->setNombre('Juan');
	echo $persona->saludar();




?>