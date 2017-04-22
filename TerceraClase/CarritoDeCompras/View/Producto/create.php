	<div class="container-fluid">
		<form action="?controller=Producto&metodo=store" method="POST">
			<div class="row">
			
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" class="form-control" name="nombre">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="">Precio</label>
						<input type="number" class="form-control" name="precio">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="">Descripcion</label>
						<input type="text" class="form-control" name="descripcion">
					</div>
				</div>
			</div>
			<div class="row">
			
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="">Stock</label>
						<input type="number" class="form-control" name="stock">
					</div>
				</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group" style="margin-top:1.5em;">
						<input type="submit" class="btn btn-info" value="Guardar Producto">
					</div>
				</div>
			</div>
		</form>

	</div>
