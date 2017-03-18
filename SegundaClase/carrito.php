<?php 

class Carrito{
	$carrito=array();
	public function __construct(){
		if(!isset($_SESSION['carrito'])){
			$_SESSION['carrito']=null;
			$this->carrito['total_productos']=0;
			$this->carrito['articulos_total']=0;
		}
		$this->carrito=$_SESSION['carrito'];
		
	}
}
?>