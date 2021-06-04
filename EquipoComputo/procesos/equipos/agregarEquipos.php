<?php 

	require_once "../../clases/Equipos.php";
	$Contactos = new Contactos();

	$datos = array(
				"idTipos" => $_POST['idTiposSelect'],
				"nombreequipo" => $_POST['nombreequipos'],
				"modelo" => $_POST['modelo'],
				"numserire" => $_POST['numserie'],
				"fecha" => $_POST['fecha'],
				"napam" => $_POST['napam'],
				"telefono" => $_POST['telefono'],
				"email" => $_POST['email'],
				
					);

	echo $Contactos->agregarEquipos($datos);
?>