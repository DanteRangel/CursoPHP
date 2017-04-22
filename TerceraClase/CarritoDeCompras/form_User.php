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

if(isset($_POST['multiple_delete_user']) && $_POST['multiple_delete_user']==true && isset($_POST['ids']) && is_array($_POST['ids'])){
	require('config/config.php');
	require('Core/Model/Usuario.php');
	$arreglo=$_POST['ids'];
	$j=0;
	for($i=0; $i<count($arreglo); $i++){
		$usuario=new Usuario();
		$usuario->find($arreglo[$i]);	
		if($usuario->deleteMe()){
			$j++;
		}
	}
	if(count($arreglo)==$j){
		echo json_encode(array('success'=>0,'message'=>'Se elimino con exito todos los usuarios seleccionados'),true);
	}else{
		echo json_encode(array('success'=>1,'message'=>'Se eliminaron solo $j usuarios'),true);
	}

}
if(isset($_POST['id']) && isset($_POST['cantidad']) && isset($_POST['petition'])){
	require('config/config.php');
	require('Core/Model/Producto.php');
	require('Core/Controller/CarritoController.php');
	if($_POST['petition']=='addProduct'){
		$carrito=new Carrito();
		$new_producto=new Producto();
		$producto=$new_producto->find($_POST['id']);
		$producto['cantidad']=$_POST['cantidad'];
		$carrito->add($producto);

	}
} 
if(isset($_POST['id']) && isset($_POST['petition']) && $_POST['petition']=='UpdateUser'){
	require('config/config.php');
	require('Core/Model/Usuario.php');
	$usuario=new Usuario();
	$usuario->find($_POST['id']);
	$usuario->nombre=$_POST['nombre'];
	$usuario->save();
}
if(isset($_POST['id']) && isset($_POST['petition']) && $_POST['petition']=='DeleteUser'){
	require('config/config.php');
	require('Core/Model/Usuario.php');
	$usuario=new Usuario();
	$usuario->delete($_POST['id']);

}

?>
