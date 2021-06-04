<?php 

	require_once "../../clases/Equipos.php";
	$Equipos = new Equipos();

	$datos = array(
				"idEquipos" => $_POST['idEquiposU'],
				"nombreequipo" => $_POST['nombreequiposU'],
				"modelo" => $_POST['modeloU'],
				"numserire" => $_POST['numserieU'],
				"fecha" => $_POST['fechaU'],
				"napam" => $_POST['napamU'],
				"telefono" => $_POST['telefonoU'],
				"email" => $_POST['emailU'],
				"idTipos" => $_POST['idTiposSelectU']
					);

	echo $Equipos->actualizaEquipos($datos);
?>