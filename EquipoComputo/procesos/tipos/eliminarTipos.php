<?php 

require_once "../../clases/tipos.php";

$idTipos = $_POST['idTipos'];

$Tipos = new Tipos();
echo $Tipos->eliminaTipos($idTipos);