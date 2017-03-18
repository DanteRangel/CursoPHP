<?php

$titulo = "Carrito de Compra con Php y Mysql";
include("conecta.php");
include("meta_tags.php");
include("cabecera.php");
include("izquierda.php");
//Iniciamos sesión o continuamos la que ya exista
session_start();
$resultado = mysql_query("SELECT id, producto, precio FROM productos");

// comienza un bucle que leera todos los registros y ejecutara las ordenes que siguen
            while ($productos = mysql_fetch_array($resultado)) {
                echo "<tr class='borde_tabla'><td style='display:none'>" . $productos['id'] . "</td>";     // id del producto que no se verá por pantalla
                    echo "<td>" . $productos['producto'] . "</td>";     // imprime el nombre del producto
                    echo "<td style='text-align:right'>" . $productos['precio'] . " € </td>"; // imprime el precio
                    echo "<td style='text-align:right'>
                        <a href='carro.php?id=" . $productos['id'] . "&action=add' alt='Añadir al carro'>
                        <img src='img/add_carro.png' width='48' height='48' alt='Añadir al carrito' title='Añadir producto al carrito'>
                        </a>
                          </td>";
                echo "</tr>";
            } // fin del bucle de ordenes
?>
	<div id="derecha">
	<h1>Detalle de Productos</h1>
	
		<div class='text-border'>
		<?php
			//Desplegamos una tabla con los datos de los productos
			echo "<div class=verproductos>";
				echo "<table style=border:1px solid #333333>
					<tr class=titulo>
						<th style='display:none'>ID</th>
						<th class='desc_largo'>Producto</th>
						<th style='width:100px;text-align:right'>Precio</th>
						<th style='width:50px;text-align:right'>Acción</th>
					</tr>
					<tr class=titulo>
						<td style='display:none'>1</td>
						<td class='desc_largo'>Nombre del Producto 1</td>
						<td style='width:100px;text-align:right'>1000 €</td>
						<td style='width:50px;text-align:right'><a href='#'>Añadir</a></td>
				</tr>";

			echo "</table>"; //cerramos la tabla
			echo "</div>"; //cerramos el div verproductos
		?>
		</div> <!-- Cierro text-border -->
	</div> <!-- Cierro derecha -->

<?php
include("pie.php");
include("cerrar_etiquetas.php");
?>