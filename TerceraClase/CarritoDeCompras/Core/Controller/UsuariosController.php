<?php 
	require(APP_Model.'/Usuario.php');

	class UsuariosController{
		public $usuario;
		public function __construct(){
			$this->usuario=new Usuario();
		}
		public function index($request=0){
			include('View/Layouts/header.php');
			//echo "<h1>HOla Mundo</h1>";
			$usuarios=$this->usuario->all();
			include('View/Usuario/index.php');
			include('View/Layouts/footer.php');
		}
		public function create($request){
			include('View/Layouts/header.php');
			include('View/Usuario/create.php');

			include('View/Layouts/footer.php');
		}
	}

	return new UsuariosController();


?>