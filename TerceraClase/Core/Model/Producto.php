<?php 
/** Obteniendo la conexión de la base de datos***/
require('Conexion.php');
	class Producto extends Conexion{
		public $table="Producto";
		public $id;
		public $nombre;
		public $descripcion;
		public  $stock;
		public $precio;

		public function __construct(){
			parent::__construct();
		}
		public function create($nombre,$descripcion,$precio,$stock){
			$this->nombre=$nombre;
			$this->descripcion=$descripcion;
			$this->stock=$stock;
			$this->precio=(double)$precio;// casteo

			$sql="INSERT INTO $this->table (id,nombre,descripcion,stock,precio)
			VALUES(null,'$this->nombre',
						'$this->descripcion',
						'$this->stock',
						$this->precio)";
				
				$producto=$this->con->query($sql);
				return $producto;
		}
		public function find($id){

			$sql="SELECT * FROM $this->table where id=$id";
			$resultado=$this->con->query($sql);
			$row=$resultado->fetch_assoc();
			$this->nombre=$row['nombre'];
			$this->precio=$row['precio'];
			$this->descripcion=$row['descripcion'];
			$this->stock=$row['stock'];
			$this->id=$row['id'];
			return $row;
		}
		public function all(){
			$sql="SELECT * FROM $this->table";
			$resultado=$this->con->query($sql);
			$arreglo=array();
			$i=0;
			while($row=$resultado->fetch_assoc()){
				$i++;
				$arreglo[$i]=$row;
			}
			return $arreglo;
		}
		public function save(){
			$sql='UPDATE '.$this->table.' SET nombre="'.$this->nombre.'",
				descripcion="'.$this->descripcion.'",
				stock="'.$this->stock.'",
				precio='.$this->precio.' WHERE id='.$this->id;
			$resultado=$this->con->query($sql);
			return $resultado;
		}
		public function delete($id){
			$sql="DELETE FROM $this->table WHERE id=$id;";
			$this->con->query($sql);

		}
		public function nombre($nombre){
			$this->nombre=$nombre;
			return $this->nombre;
		}
		public function precio($precio){
			$this->precio=$precio;
			return $this->precio;
		}

	}


 



?>