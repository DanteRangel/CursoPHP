<div class="container-fluid">
	<div class="row text-left">
		<button class="btn btn-default" onclick="javascript:window.location='?controller=Producto&metodo=create'">Crear nuevo producto</button>
	</div>
	<div class="row">
		<table class="table table-responsive table-hover">
			<thead>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th>Stock</th>
				<th>Acciones</th>
			</thead>
			<tbody>
			<?php
				foreach ($contenido as $rows) {
			?>
				<tr>
					<td><?php echo $rows['nombre'];?></td>
					<td><?php echo $rows['descripcion'];?></td>
					<td><?php echo $rows['precio'];?></td>
					<td><?php echo $rows['stock'];?></td>
					<td><button class="btn btn-success" onclick="javascript:window.location='?controller=Producto&metodo=edit&id=<?php echo $rows["id"];?>'">Actualizar</button></td>
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>
	</div>
</div>