<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrito</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style --> 
</head>
<body>
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
	
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
		function agregarCarrito(id){
			cantidad=$('#input_'+id).val();
			precio=$('#input_'+id).attr('data-precio');

			alert('id = '+id+ ' cantidad = ' + cantidad+' precio = '+precio+ ' total = '+(cantidad*precio));
			$.ajax({
				url:'form_User.php',
				data:{
					'id':id,
					'cantidad':cantidad,
					'petition':'addProduct'
				},
				type:'POST',
				success:function(response){

				}
			});
		}
	</script>
</body>
</html>