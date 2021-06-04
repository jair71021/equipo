<?php 

require_once "../../clases/Tipos.php";

$idTipos = $_POST['idTipos'];
$Tipos = new Tipos();

echo json_encode($Tipos->obtenerDatosTipos($idTipos));
