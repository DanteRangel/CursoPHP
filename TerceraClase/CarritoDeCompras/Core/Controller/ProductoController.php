<?php 
	require(APP_Model.'/Producto.php');
	class ProductoController{
		public $producto;
		public function __construct(){
			$this->producto=new Producto();
		}
		public function index($request=0){
			include('View/Layouts/header.php');

			$contenido=$this->producto->all();
			include('View/Producto/index.php');
			include('View/Layouts/footer.php');
		}
		public function create($request){
			include('View/Layouts/header.php');
			include('View/Producto/create.php');
			include('View/Layouts/footer.php');
		}
		public function store($request){
			if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['stock'])){
				$this->producto->create($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['stock']);
				$this->index();
			}
			
		}
		public function edit($request){
			$producto=$this->producto->find($request['id']);
			include('View/Layouts/header.php'); 
			include('View/Producto/edit.php');
			include('View/Layouts/footer.php');
		}
		public function update($request){
			if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['stock'])){
				if(isset($_GET['id'])){
					$this->producto->find($_GET['id']);
					$this->producto->precio=$_POST['precio'];
					$this->producto->descripcion=$_POST['descripcion'];
					$this->producto->nombre=$_POST['nombre'];
					$this->producto->stock=$_POST['stock'];
					$this->producto->save();
					$this->index();	
				}else{

				}
			}else{
				$this->index();
			}
			
		}
		public function delete($request){

			if(isset($_POST['id'])){
				$this->producto->delete($_POST['id']);
				$this->index();	
			}
		}
	}
	return new ProductoController();
?>