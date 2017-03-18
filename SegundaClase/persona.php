<?php 
	Class Persona{
		/**** ***************
			--Atributos--
       	(Caracteristicas)
		********************/
		/** Especificadores de acceso
			public 
			private
			protected
			**/
		public $nombre,$apellidos,$estadoCivil,$genero,$altura,$peso,$edad,$nacionalidad;
		public $distanciaRecorrida;
		/**** ***************
			--Metodos--
       	(Comportamiento)
		********************/
		

		public function __construct($nombre='Tu nombre'){
			$this->nombre=$nombre;
			$this->apellidos="Tus apellidos";
			$this->estadoCivil="Soltero";
			$this->genero="Masculino";
			$this->altura=1.70;
			$this->peso="75kg";
			$this->edad=29;
			$this->nacionalidad="Mexicana";
		}
		public function saludar(){
			return 'Hola, mi nombre es '.$this->nombre.'<br>';
		}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function correr($tiempo){
		$this->distanciaRecorrida+=$tiempo*($this->altura/.7);
		return 'Distancia Recorrida : '.$this->distanciaRecorrida.'<br>';
	}
}

/*$persona = new Persona('Dante Ulises');
#$persona->nombre='Dante Solamente';
$persona->setNombre('Eduardo');
echo $persona->saludar();
echo $persona->correr(10);
echo $persona->correr(60);
*/
//var_dump($persona);
#var_dump(1);
?>	