<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/jpg" href="public/img/4.jpg">
  <title>Agregar Equipos</title>
  <?php require_once "dependencias.php"; ?>
</head>
<body>
  <div class="container">
		<?php require_once "menu.php"; ?>
      <div class="jumbotron">
        <h1 class="display-4">Equipos</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEquipos">
          <span class="fas fa-user-plus"></span> Agregar Equipos
        </button>
        <hr class="my-4">
        <div id="cargaTablaEquipos"></div>
        
      </div>
      <?php
        require_once "vistas/equipos/modal_agregar.php";
        require_once "vistas/equipos/modal_actualizar.php";
      ?>
	</div>

	<script src="public/js/equipos.js"></script>
</body>
</html>