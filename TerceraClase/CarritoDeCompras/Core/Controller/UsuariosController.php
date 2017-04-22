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
		public function store($request){
			if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['password']) && isset($_POST['tipo_usuario'])){
				//var_dump($_POST	);
				$this->usuario->create($_POST['nombre'],$_POST['correo'],$_POST['password'],$_POST['tipo_usuario']);
				$this->index();
			}
		}
		public function edit($request){
			if(isset($_GET['id'])){
				$usuario=$this->usuario->find($_GET['id']);
				include('View/Layouts/header.php');
				include('View/Usuario/edit.php');
				include('View/Layouts/footer.php');

			}
		}
		public function update($request){
			if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['password']) && isset($_POST['tipo_usuario'])){
				//var_dump($_POST);
				$this->usuario->find($_POST['id']);
				$this->usuario->password($_POST['password']);
				$this->usuario->nombre=$_POST['nombre'];
				$this->usuario->correo=$_POST['correo'];
				$this->usuario->tipo_usuario=$_POST['tipo_usuario'];
				$this->usuario->save();
				$this->index();
			}
		}
		public function delete($request){
			if(isset($_POST['id'])){
				$this->usuario->delete($_POST['id']);
				$this->index();

			}
		}

	}

	return new UsuariosController();


?>