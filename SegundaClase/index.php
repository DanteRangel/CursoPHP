<?php 
	include('auth/login.php');
	if(isset($_SESSION['id'])){
		header('Location: dashboard.php');
	}
	if(!isset($_SESSION['correo'])){
		$_SESSION['correo']='';
	}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenid@ al sistema</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">

		<form action="auth/login.php" method="POST">
			<div class="row">
				<div class="col-md-offset-4 col-sm-offset-4 col-lg-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
				<?php 
					if(isset($_GET['error'])){
				?>
					<div class="alert alert-danger">
				  <strong>Error!</strong> al iniciar sesion
				</div>
				<?php } ?>
					<div class="form-group <?php echo (isset($_GET['error']) && isset($_GET['tipo'])&& $_GET['tipo']=='correo')?' has-error':'' ?>">
						<label for="">Correo</label>
							<input type="text" class="form-control" name="correo" value="<?php echo $_SESSION['correo'];?>" >
					<?php if(isset($_GET['error']) && isset($_GET['tipo'])&& $_GET['tipo']=='correo'){?>
									<span>
										<strong>No se encuentran estas credenciales en nuestro sistema</strong>
									</span>

							<?php
								}
							?>
					</div>
					<div class="form-group <?php echo (isset($_GET['error']) && isset($_GET['tipo'])&& $_GET['tipo']=='password')?' has-error':'' ?>">
						<label for="">Contraseña</label>
							<input type="password" class="form-control" name="password">
							<?php if(isset($_GET['error']) && isset($_GET['tipo'])&& $_GET['tipo']=='password'){?>
										<span>
											<strong>Contraseña incorrecta</strong>
										</span>

								<?php
									}
								?>
					</div>
					<input type="submit" value="Enviar" class="btn btn-default">
			</div>
		</form>	
	</div>
	
	<script src="s/jquery.js"></script>
</body>
</html>