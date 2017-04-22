<div class="container">
	<div class="row text-left">
		<a href="?controller=Carrito&metodo=index" class="btn btn-default">Volver a Productos</a>
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
				<td width="10%">
					<input type="number" class="form-control update" value="<?php echo $producto['cantidad'];?>" data-id="<?php echo $producto['id']; ?>"/> </td>
				<td><?php echo $producto['precio']; ?></td>
				<td><?php echo $producto['precio']*$producto['cantidad']; ?></td>
				<td><button class="btn btn-danger" onclick="eliminar(<?php echo $producto['id']; ?>)">Eliminar</button></td>
			</tr>
			<?php
			}
			?>
			</tbody>
		</table>
	</div>
	<div class="row center-block text-center">
		<h1>Total : $ <?php echo $total;?></h1>
		<span>Cantidad de productos : <?php echo $cantidad_productos;?></span>
		
	</div>
</div>
<script>

	$(document).ready(function(){
		$('.update').change(function(){
				var id=$(this).attr('data-id');
				var cantidad=$(this).val();
				$.ajax({
				'data':{'id':id,'cantidad':cantidad},
				'type':'POST',
				'url':'?controller=Carrito&metodo=addProduct',
				success:function(){
						window.location=window.location.href;
				}
			});
		});
	});

	function eliminar(id){
		$.ajax({
			'data':{'id':id},
			'type':'POST',
			'url':'?controller=Carrito&metodo=delete',
			success:function(){
					window.location=window.location.href;
			}
		})

	}
</script>