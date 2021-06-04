<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/jpg" href="public/img/5.jpg">
  <title>Tipos</title>
  <?php require_once "dependencias.php"; ?>
</head>
<body>
  <div class="container">
		<?php require_once "menu.php"; ?>
      <div class="jumbotron">
        <h1 class="display-4">Tipos</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarTipos">
          <span class="fas fa-book"></span> Agregar Tipos</button>
        <hr class="my-4">
        <div id="cargaTablaTipos"></div>
      </div>
      <?php 
        require_once "vistas/tipos/modal_agregar.php";
        require_once "vistas/tipos/modal_actualizar.php";  
      ?>
	</div>

	<script src="public/js/tipos.js"></script>
</body>
</html>