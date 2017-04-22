<div class="container">
	<div class="row text-left">
		<a href="?controller=Usuarios&metodo=create" class="btn btn-default">Crear nuevo usuario</a>
	</div>
	<div class="row">
		<table class="table table-hover table-responsive">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Tipo Usuario</th>
				<th>Acciones</th>
			</thead>
			<tbody>
			<?php 
			foreach ($usuarios as $usuario) {	
			?>
				<tr>
					<td><?php echo $usuario['nombre'];?></td>
					<td><?php echo $usuario['correo'];?></td>
					<td><?php echo ($usuario['tipo_usuario']==1)?'Administrador':'Sin prvilegios';?></td>
					<td><button class="btn btn-info" onclick="javascript:window.location='?controller=Usuarios&metodo=edit&id=<?php echo $usuario["id"];?>'">Editar</button>
					<a class="btn btn-default" href='?controller=Usuarios&metodo=edit&id=<?php echo $usuario["id"];?>'>Editar 2</a>
					</td>
				</tr>
			<?php
			}
			?>
			</tbody>
		</table>
	</div>
</div>