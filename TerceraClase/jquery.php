<?php 
	require('config/config.php');
	
	require('Core/Model/Usuario.php');
	$usuarios=new Usuario();
	$resultado=$usuarios->all();
#var_dump($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PROBANDO JQUERY</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<table class="table table-responsive">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo Usuario</th>
			<th>Acciones</th>
		</thead>
		
		<?php
			for ($i=0; $i <count($resultado) ; $i++) { 
		?>
				<tr id="tr_<?php echo $resultado[$i]['id'];?>">
					<td><?php echo $resultado[$i]['nombre']?></td>
					<td><?php echo $resultado[$i]['correo']?></td>
					<td><?php echo $resultado[$i]['tipo_usuario']?></td>
					<td><button class="btn btn-info modificar" data-id="<?php echo $resultado[$i]['id'];?>">Modificar</button>
						<button class="btn btn-danger" onclick="eliminar('<?php echo $resultado[$i]['id'];?>')">Eliminar</button>
					</td>
				</tr>
		<?php
			}
		?>

		</table>
	</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Actualiza Usuario</h4>
      </div>
      <div class="modal-body" id="content_modal">
        
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.modificar').click(function(){

				id=$(this).attr('data-id');
				console.log(id);
				$('#tr_'+id).removeClass('danger');
				$.ajax({
					'url':'./form_User.php',
					'type':'POST',
					'data':{'id':id,'get_user':true},
					success:function(response){
						$('#content_modal').html(response);
						$('#modal').modal();

					}

				});
			});
		});
		function eliminar(id){
				html='<div class="row"><h2>¿Deseas eliminar a este usuarios?</h2></div><div><button class="btn btn-danger" onclick="quitarRow('+id+')">Si</button><button class="btn btn-default"  data-dismiss="modal" >No</button></div>';
				$('#content_modal').html(html);
				$('#modal').modal();

		}
		function quitarRow(id){

			$.ajax({
				'url':'./form_User.php',
				'type':'POST',
				'data':{'id':id,'delete_user':true},
				success:function(response){
					//console.log(response);
					json_response=JSON.parse(response);
					console.log(json_response);
					if (json_response.success==0) {
						alert(json_response.message);
					}else{
						alert(json_response.message);
					}
				}
			});
				$('#modal').modal('hide');
				$('#tr_'+id).remove();
		}
		
		/*
		LINK DE ENCUESTA :
			http://www.tecgurus.net/encuesta-intermedia-php-desde-cero-dr-5/
		*/
	</script>
</body>
</html>