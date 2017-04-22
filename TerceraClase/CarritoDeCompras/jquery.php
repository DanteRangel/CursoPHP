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
			<th><input  type="checkbox" class="checkbox" id="todos_checkbox">Todos</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo Usuario</th>
			<th>Acciones</th>

		</thead>
		
		<?php
			for ($i=0; $i <count($resultado) ; $i++) { 
		?>

				<tr id="tr_<?php echo $resultado[$i]['id'];?>">
					<td><input type="checkbox" class="checkbox eliminar_checkbox" data-id="<?php echo $resultado[$i]['id'];?>"></td>
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

		<button onclick="siguiente();" class="btn btn-success">Siguiente</button>
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

				$('#todos_checkbox').click(function(){
					//alert();
					if($(this).is(':checked')){
						$('.eliminar_checkbox').prop('checked',true);	
					}else{
						$('.eliminar_checkbox').prop('checked',false);	
					}
					
				});
				$('.eliminar_checkbox').click(function(){
					console.log($('.eliminar_checkbox:checked').length);
					/*var contador=0;
					$('.eliminar_checkbox').each(function(){
						if($(this).is(':checked')){
							contador++;
							//console.log(contador);
						}
					});*/
					var check=$('.eliminar_checkbox:checked').length
						//console.log($('.eliminar_checkbox').length);
					if(check==$('.eliminar_checkbox').length){
						$('#todos_checkbox').prop('checked',true);
					}else{
						$('#todos_checkbox').prop('checked',false);
					}
					//console.log($('.eliminar_checkbox').length);					
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
		function siguiente(){
			var arreglo_check=[];
			var i=0;
			$('.eliminar_checkbox').each(function(){
				if($(this).is(':checked')){
					//arreglo_check[i]=$(this).attr('data-id');
					arreglo_check.push($(this).attr('data-id'));
					//i++;
				}
					
			});
			console.log(arreglo_check);
			eliminarMuchos(arreglo_check);
		}
		function eliminarMuchos(arreglo_check){
		//Esto no esta bien hecho , las peticiones en jquery ya no tiene soporte asincrono
		/*	for(var i=0; i< arreglo_check.length; i++){
				quitarRow(arreglo_check[i]);
			}*/
		$.ajax({
			url:'form_User.php',
			type:'POST',
			data:{ids:arreglo_check,'multiple_delete_user':'true'},
			success:function(response){

				json_response=JSON.parse(response);
				console.log(json_response);
				if (json_response.success==0) {
					alert(json_response.message);
				}else{
					alert(json_response.message);
				}
			}
		})


		}
		/*
		LINK DE ENCUESTA :
			http://www.tecgurus.net/encuesta-intermedia-php-desde-cero-dr-5/
		*/
	</script>
</body>
</html>