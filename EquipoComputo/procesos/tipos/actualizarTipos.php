<?php 

	require_once "../../clases/tipos.php";

	$datos = array(
				"idTiposU" => $_POST['idTiposU'],
				"nombre" => $_POST['nombrequipos'],
				
					);
	$Tipos = new Tipos();
	echo $Tipos->actualizarTipos($datos);
?>