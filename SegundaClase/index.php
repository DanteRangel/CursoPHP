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
		<form action="auth/login.php">
			<div class="row">
				<div class="col-md-offset-4 col-sm-offset-4 col-lg-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="">Correo</label>
							<input type="text" class="form-control" name="correo">
					</div>
					<div class="form-group ">
						<label for="">Contraseña</label>
							<input type="password" class="form-control" name="pasword">
					</div>
					<input type="submit" value="Enviar" class="btn btn-default">
			</div>
		</form>	
	</div>
	
	<script src="s/jquery.js"></script>
</body>
</html>