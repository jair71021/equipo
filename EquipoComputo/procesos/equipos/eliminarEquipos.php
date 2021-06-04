<?php 

	require_once "../../clases/Equipos.php";
	$Equipos = new Equipos();
	$idEquipos = $_POST['idEquipos'];

	echo $Equipos->eliminarEquipos($idEquipos);
?>