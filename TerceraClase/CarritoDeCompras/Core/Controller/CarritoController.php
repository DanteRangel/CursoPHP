<?php 
require(APP_Model.'/Producto.php');
class CarritoController{
	public $producto;
	public $carrito;
		public function __construct(){
			$this->producto=new Producto();
			$this->carrito=require(APP_Controller.'/SessionesCarritoController.php');
		}
		public function index($request=0){
			include('View/Layouts/header.php');
			$contenido=$this->producto->all();
			include('View/Carrito/index.php');
			include('View/Layouts/footer.php');
		}


}
return new CarritoController();
?>