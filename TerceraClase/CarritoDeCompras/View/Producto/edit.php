	<div class="container-fluid">
		
			<div class="row">
			<form action="?controller=Producto&metodo=update&id=<? echo $producto['id'];?>" method="POST">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" class="form-control" name="nombre" value="<? echo $producto['nombre'];?>">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="">Precio</label>
						<input type="number" class="form-control" name="precio" value="<? echo $producto['precio'];?>">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="">Descripcion</label>
						<input type="text" class="form-control" name="descripcion" value="<? echo $producto['descripcion'];?>">
					</div>
				</div>		
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="">Stock</label>
						<input type="number" class="form-control" name="stock" value="<? echo $producto['stock'];?>">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group" style="margin-top:1.5em;">
						<input type="submit" class="btn btn-info" value="Guardar Producto">
					</div>
				</div>
				</form>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
					<div class="form-group" style="margin-top:1.5em;">
						<button class="btn btn-danger" onclick="eliminar();">Eliminar producto</button>
					</div>
				</div>
			</div>
		

	</div>

	<form id="eliminar" action="?controller=Producto&metodo=delete" method="POST">
	<input type="hidden" name="id" value="<? echo $producto['id'];?>">
	</form>
<script>
	function eliminar(){
		$('#eliminar').submit();
	}
</script>