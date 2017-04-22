	<div class="container">
		<div class="row">

			<?php

				foreach ($contenido as $rows) {
				?>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-6" style="margin-top:1em;">
						<span>Nombre :<?php echo $rows['nombre'];?></span><br>
						<span>Descripción :<?php echo $rows['descripcion'];?></span><br>
						<span>Precio : <?php echo $rows['precio'];?></span>
						<span>Stock : <?php echo $rows['stock'];?></span>
						<div class="form-group">
							<label for="">Cantidad</label>
							<input type="number" class="form-control" data-precio="<?php echo $rows['precio'];?>" id="input_<?php echo $rows['id'];?>" value="0">
						</div>

						<button class="btn btn-info" onclick="agregarCarrito(<?php echo $rows['id'];?>);">Agregar al carrito</button>
					</div>
				<?php
				}
			?>
		</div>

	</div>
	<script>
		function agregarCarrito(id){
			cantidad=$('#input_'+id).val();
			precio=$('#input_'+id).attr('data-precio');

//			alert('id = '+id+ ' cantidad = ' + cantidad+' precio = '+precio+ ' total = '+(cantidad*precio));
			$.ajax({
				url:'?controller=Carrito&metodo=addProduct',
				data:{
					'id':id,
					'cantidad':cantidad
				},
				type:'POST',
				success:function(response){
					console.log(response);
					window.location="?controller=Carrito&metodo=getCarrito";
				}
			});
		}
	</script>
