<div class="container-fluid">
	<div class="row">
		<form action="?controller=Usuarios&metodo=store" method="POST">
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" class="form-control" name="nombre">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group">
					<label for="">Correo</label>
					<input type="text" class="form-control" name="correo">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group">
					<label for="">Password</label>
					<input type="text" class="form-control" name="password">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group">
					<label for="">Confirmar Password</label>
					<input type="text" class="form-control" name="confirm_password">
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group">
					<label for="">Tipo de Usuario</label>
					<select name="tipo_usuario" id="tipo_usuario" class="form-control">
						<option value="1">Administrador</option>
						<option value="2">Sin provilegios</option>
					</select>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
				<div class="form-group" style="margin-top:1.5em;">
					<input type="submit" class="btn btn-success" value="Guardar Usuario">
				</div>
			</div>
		</form>
	</div>
</div>