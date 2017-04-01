<?php 
include (APP_View.'Layouts/Layout.php');

		$html='';

		foreach ($contenido as $rows) {
			foreach ($rows as  $valor) {
				$html.='<td>'.$valor.'</td>';
			}
			
		}
		echo $html;


?>