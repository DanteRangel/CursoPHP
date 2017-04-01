<?php 
require 'DataBase.php';
class Producto extends DataBase{
	public $table="Producto";
	public $id;
	public $nombre;
	public $descripcion;
	public $precio;
	public $stock; 
	public function __construct(){
		parent::__construct();
	}
	public function create($nombre,$descripcion,$precio,$stock){

		$this->nombre=$nombre;
		$this->descripcion=$descripcion;
		$this->precio=(double)$precio;
		$this->stock=(int)$stock;
		$sql="INSERT INTO $this->table (nombre,descripcion,precio,stock) value (
				'$this->nombre',
				'$this->descripcion',
				$this->precio,
				$this->stock)";
				#return $sql;
		$this->con->query($sql);
	}
	public function find($id){
		$this->id=$id;
		$sql="SELECT * FROM $this->table where id=$id";
		$result=$this->con->query($sql);
		$producto=$result->fetch_assoc();
		$this->id=$producto['id'];
		$this->nombre=$producto['nombre'];
		$this->descripcion=$producto['descripcion'];
		$this->precio=$producto['precio'];
		$this->stock=$producto['stock'];
		return $this->getData();
	} 
	public function getData(){
		return array(
			'id'=>$this->id,
			'nombre'=>$this->nombre,
			'descripcion'=>$this->descripcion,
			'precio'=>$this->precio,
			'stock'=>$this->stock);
	}
	public function save(){
		$sql='UPDATE $table SET nombre=$this->nombre,
			nombre=$this->nombre,
			descripcion=$this->descripcion,
			precio=$this->precio,
			stock=$this->stock where
			id=$this->id';
		$producto=$this->con->query($sql);
		return $producto;

	}

	public function nombre($nombre){
		$this->nombre=$nombre;
		return $this->nombre;
	}

	public function descripcion($descripcion){
		$this->descripcion=$descripcion;
		return $this->descripcion;
	}
	public function precio($precio){
		$this->precio=$precio;
		return $this->precio;
	}
	public function stock($stock){
		$this->stock=$stock;
		return $this->stock;
	}
} 
$producto=new Producto();
#var_dump($producto->find(1));
$producto->find(1);
#$producto->stock(3);
var_dump($producto);
#$producto->create('Nuevo','Descripcion',12.12,12);


?>