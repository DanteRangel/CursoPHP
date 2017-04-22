<div class="container">
	<div class="row text-left">
	</div>
	<div class="row">
		<table class="table table-hover table-responsive">
			<thead>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Sub-Total</th>
				<th>Acciones</th>
			</thead>
			<tbody>
			
			<?php 
			foreach ($carrito as $producto) {	
			?>
			<tr>
				<td><?php echo $producto['nombre']; ?></td>
				<td><?php echo $producto['descripcion']; ?></td>
				<td><?php echo $producto['cantidad']; ?></td>
				<td><?php echo $producto['precio']; ?></td>
				<td><?php echo $producto['precio']*$producto['cantidad']; ?></td>
				<td><button class="btn btn-danger" onclick="eliminar"><?php echo $producto['id']; ?></button></td>
			</tr>
			<?php
			}
			?>
			</tbody>
		</table>
	</div>
	<div class="row center-block text-center">
		<h1>Total : $ <?php echo $total;?></h1>
		<span>Cantidad de productos : $ <?php echo $cantidad_productos;?></span>
		
	</div>
</div>