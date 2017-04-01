<?php 
	class Conexion{
		public $host;
		public $database;
		public $user;
		public $password;
		public $driver;
		public $con;
		public function __construct(){
			$env=require './config/database.php';
			$this->driver=$env['driver'];
			$this->database=$env['database'];
			$this->user=$env['user'];
			$this->password=$env['password'];
			$this->host=$env['host'];
			$this->conexion();
		}

		public function conexion(){
			if($this->driver=='mysql'){
				$con=new mysqli($this->host,$this->user,$this->password,$this->database);
			}

			$this->con=$con;
			/*else if($this->driver=='db2'){
					$con=new pgsql_connect
			}*/
		}
				
	}

/*
$sql="SELECT * From Persona";
$conexion->database="FinanciaMotors";
$conexion->conexion();
var_dump($conexion->con->query($sql));*/
/*$conexion=new Conexion();
return array('config_database'=>$conexion,'conexion'=>$conexion->con);
*/

?>