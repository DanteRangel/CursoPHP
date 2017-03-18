<?php 
	include('auth/login.php');
	if(isset($_SESSION['id'])){
		header('Location: dashboard.php');
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
					
				?>
					<div class="alert alert-success">
				  <strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
				</div>
				<?php ?>
					<div class="form-group <?php echo (isset($_GET['error']) && isset($_GET['tipo'])&& $_GET['tipo']=='correo')?' has-error':'' ?>">
						<label for="">Correo</label>
							<input type="text" class="form-control" name="correo">
					</div>
					<div class="form-group <?php echo (isset($_GET['error']) && isset($_GET['tipo'])&& $_GET['tipo']=='password')?' has-error':'' ?>">
						<label for="">Contraseña</label>
							<input type="password" class="form-control" name="password">

					</div>
					<input type="submit" value="Enviar" class="btn btn-default">
			</div>
		</form>	
	</div>
	
	<script src="s/jquery.js"></script>
</body>
</html>