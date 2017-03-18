<?php 
	
	
	session_start();
	$_SESSION['correo'];
	if(isset($_POST['correo']) && isset($_POST['password'] ) ){
		#echo "Entraste y si existen tus variables";
		include('../conexion/conexion.php');
		$sql="SELECT * FROM Usuario where correo='".$_POST['correo']."'";
		$resultado=mysqli_query($conexion,$sql);
			if(mysqli_num_rows($resultado)>0){
				$registro=mysqli_fetch_array($resultado);
				#echo $registro['password'].' '.md5($_POST['password']);
				 
				if(md5($_POST['password'])==$registro['password']){
						$_SESSION['id']=$registro['id'];
						$_SESSION['nombre']=$registro['nombre'];
						$_SESSION['tipo_usuario']=$registro['tipo_usuario'];
						header('Location: ../dashboard.php');
				}else{
					$_SESSION['correo']=$_POST['correo'];
				header('Location: ../index.php?error=Error&tipo=password');
				}
			}else{
				$_SESSION['correo']=$_POST['correo'];
				header('Location: ../index.php?error=Error&tipo=correo');

			}

	}
?> 