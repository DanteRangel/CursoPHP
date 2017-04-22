<?php 
/** Obteniendo la conexión de la base de datos***/
require('Conexion.php');
#$conexion=$conexion['conexion'];
//$sql="SELECT * FROM Usuario";
//$reulstado=$conexion->query($sql);
//print_r($reulstado->fetch_assoc());
	class Usuario extends Conexion{
		public $table="Usuario";
		public $id;
		public $nombre;
		public $correo;
		public  $password;
		public $tipo_usuario;
		/*
		INSERT INTO Usuario (nombre,correo,password,tipo_usuario)
		VALUES('Juan Escutia','juanitoHot24@bandera.com','#posMeMato',1);
		*/
		public function __construct(){
			parent::__construct();
		}
		public function create($nombre,$correo,$password,$tipo_usuario){
			$this->nombre=$nombre;
			$this->correo=$correo;
			$this->password=md5($password);
			$this->tipo_usuario=(int)$tipo_usuario;// casteo

			$sql="INSERT INTO $this->table (id,nombre,correo,password,tipo_usuario)
			VALUES(null,'$this->nombre',
						'$this->correo',
						'$this->password',
						$this->tipo_usuario)";
				
				$usuario=$this->con->query($sql);
				return $usuario;
		}
		public function find($id){

			$sql="SELECT * FROM $this->table where id=$id";
			$resultado=$this->con->query($sql);
			$row=$resultado->fetch_assoc();
			$this->nombre=$row['nombre'];
			$this->tipo_usuario=$row['tipo_usuario'];
			$this->password=$row['password'];
			$this->correo=$row['correo'];
			$this->id=$row['id'];
			return $row;
		}
		public function all(){
			$sql="SELECT * FROM $this->table";
			$resultado=$this->con->query($sql);
			/*while($row= $resultado->fetch_assoc()){
				echo $row['nombre'].'<br>';
			}*/
			$arreglo=array();
			$i=0;
			while($row=$resultado->fetch_assoc()){
				$arreglo[$i]=$row;
				$i++;
			}
			return $arreglo;
		}
		public function save(){
			$sql='UPDATE '.$this->table.' SET nombre="'.$this->nombre.'",
				correo="'.$this->correo.'",
				password="'.$this->password.'",
				tipo_usuario='.$this->tipo_usuario.' WHERE id='.$this->id;
			$resultado=$this->con->query($sql);
			return $resultado;
		}
		public function delete($id){
			$sql="DELETE FROM $this->table WHERE id=$id;";
			return $this->con->query($sql);

		}

		public function deleteMe(){
			

			return $this->delete($this->id);
		}
		public function nombre($nombre){
			$this->nombre=$nombre;
			return $this->nombre;
		}
		public function tipo_usuario($tipo_usuario){
			$this->tipo_usuario=$tipo_usuario;
			return $this->tipo_usuario;
		}
		public function password($password){
			$this->password=md5($password);
			return $this->password;
		}

	}



$usuario= new Usuario();
//print_r($usuario->create('Jorge','jluis_0201@hotmail.com','olakase',1));
// BUSCAR UN USUARIO
// $usuario->find(id_usuario);
//BUSCAR TODOS LOS USUARIOS
//$usuario->all();
$usuario->delete(3);
#$usuario->nombre("ulises");
#$usuario->tipo_usuario(12);
#echo $usuario->save();



?>