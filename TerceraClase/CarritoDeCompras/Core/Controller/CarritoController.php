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
		public function getCarrito($request=0){
			include('View/Layouts/header.php');
			$carrito=$this->carrito->carrito;
			$total=$this->carrito->total;
			$cantidad_productos=$this->carrito->cantidad_productos;
			include('View/Carrito/canasta.php');
			include('View/Layouts/footer.php');
		}
		public function addProduct($request){
			//print_r($_REQUEST);
			if(isset($_POST['id']) && isset($_POST['cantidad'])){
			$producto=$this->producto->find($_POST['id']);
			$add=array('id'=>$_POST['id'],'cantidad'=>$_POST['cantidad'],'nombre'=>$producto['nombre'],'descripcion'=>$producto['descripcion'],'precio'=>$producto['precio']);
			$this->carrito->add($add);
			}
		}
		public function delete($request){
			if(isset($_POST['id'])){
				$this->carrito->deleteItem($_POST['id']);
			}
		}


}
return new CarritoController();
?>