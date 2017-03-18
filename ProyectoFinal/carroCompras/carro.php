<?php

$titulo = "Carrito de Compra con Php y Mysql";

include("conecta.php"); //conexión con la base de datos
include("meta_tags.php"); //definimos el título, los metas y la hojas de estilo
include("cabecera.php"); //incluimos la cabecera
include("izquierda.php"); 
?>
	<div id="derecha">
		<h1>Carrito de compras</h1>
	
		<div class='text-border'>
		<?php
			
			/*MOSTRAR Carro*/
			echo "<table border=0 cellspacing=0 cellpadding=0 width='500'>";
				echo "<tr>";
					echo "<td align='left'>Diseño web (PSD) </td>";
					echo "<td align='left'>x 2</td>";
					echo "<td align='right'><a href='#'>aumentar</a></td>";
					echo "<td align='right'> = </td>";
					echo "<td align='right' style='margin-left:10px'>1000 €";
				echo "</tr>";
				
				echo "<tr>
					<td colspan='5'><hr></td>
				     </tr>";
				echo "<tr>";
					echo "<td align='right' colspan='4'><b><br>Total = 2000 €</b></td>";
					echo "<td align='right'><b><br> 2000 € </b> €</td>";
				echo "</tr>";
				
				//BOTON COMPRAR
				echo "<tr>";
				echo "<td align='right' colspan='5'>
						<a href='comprar.php'><input type='button' value='finalizar compra' /></a>
				</td>";
				echo "</tr>";
				
				echo "</table>";
			
			echo "<p>Volver a la <a href='productos.php' title='lista de productos'>lista de productos</a></p>";
		
		?>
		</div> <!-- Cierro text-border -->
	</div> <!-- Cierro derecha -->

<?php
include("pie.php");
include("cerrar_etiquetas.php");
?>