<?php 
	if(isset($_POST['id']) && isset($_POST['get_user']) && $_POST['get_user']==true){
	require('config/config.php');
	require('Core/Model/Usuario.php');

	$usuario=new Usuario();
	$usuario->find($_POST['id']);
	

?>
<div class="row">
	<div class="col-md 6 col-xs-12 col-sm-6 col-lg-6 col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
		<form action="">
	
				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" class="form-control" value='<?php echo $usuario->nombre;?>'>
				</div>

				<div class="form-group">
					<label for="">Correo</label>
					<input type="text" class="form-control" value='<?php echo $usuario->correo;?>'>
				</div>

				<div class="form-group">
					<label for="">Tipo Usuario</label>
					<input type="text" class="form-control" value='<?php echo $usuario->tipo_usuario;?>'>
				</div>
		
			</form>
	</div>
</div>
<?php 
}
if(isset($_POST['id']) && isset($_POST['delete_user']) && $_POST['delete_user']==true){
	require('config/config.php');
	require('Core/Model/Usuario.php');

	$usuario=new Usuario();
	$usuario->find($_POST['id']);
	
	#var_dump();
	if($usuario->deleteMe()){
		echo json_encode(array('success'=>0,'message'=>'Se elimino con exito lalalalalal'),true);
	}else{
		echo json_encode(array('success'=>1,'message'=>'No existe el producto que quieres eliminar'),true);
	}
	?>

<?php
}
?>
