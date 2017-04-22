<div class="container-fluid">
	<div class="row">
		<form action="?controller=Usuarios&metodo=update" method="POST">
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
			<input type="hidden"  name="id" value="<?php echo $usuario['id'];?>">
				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" class="form-control" name="nombre" value="<?php echo $usuario['nombre'];?>">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group">
					<label for="">Correo</label>
					<input type="text" class="form-control" name="correo" value="<?php echo $usuario['correo'];?>">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" value="<?php echo $usuario['password'];?>">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group">
					<label for="">Confirmar Password</label>
					<input type="password" class="form-control" name="confirm_password" value="<?php echo $usuario['password'];?>">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group">
					<label for="">Tipo de Usuario</label>
					<select name="tipo_usuario" id="tipo_usuario" class="form-control">
						<option <?php echo ($usuario['tipo_usuario']==1)?' selected ':' '?> value="1">Administrador</option>
						<option <?php echo ($usuario['tipo_usuario']==2)?' selected ':' '?> value="2">Sin privilegios</option>
					</select>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group" style="margin-top:1.5em;">
					<input type="submit" class="btn btn-success" value="Guardar Usuario">
				</div>
			</div>
		</form>

			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group" style="margin-top:1.5em;">
					<button class="btn btn-danger" onclick="eliminar();">Eliminar Usuario</button>
				</div>
			</div>
			<form id="eliminar_form" action="?controller=Usuarios&metodo=delete" method="POST">
				<input type="hidden"  name="id" value="<?php echo $usuario['id'];?>">
			</form>
	</div>
</div>
<script>
// http://www.tecgurus.net/encuesta-final-php-desde-cero-dr/
	function eliminar(){
		/**Solo es para aplicar los conocimientos adquiridos. hay mejores formas de hacerlo**/
		$('#eliminar_form').submit();
	}
</script>