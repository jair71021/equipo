<?php 

	require_once "../../clases/Tipos.php";

	$datos = array(
		"idTipos" => $_POST['idTipos'],
		"nombre" => $_POST['nombreequipos'],
					);
	$Tipo = new Tipos();
	echo $Tipo->agregarTipos($datos);
?>