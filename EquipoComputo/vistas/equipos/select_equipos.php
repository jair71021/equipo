<?php 
	
	require_once "../../clases/conexion.php";
	$con = new Conexion();
	$conexion = $con->conectar();

	$sql = "SELECT id_tipos,
					nombre 
			FROM t_equipos
			ORDER BY nombre";
	$result = mysqli_query($conexion, $sql);
?>
	<label for="idEquipoSelect">Selecciona una Equipo</label>
	<select id="idEquipoSelect" name="idEquipoSelect" class="form-control">
		<option value="0">Selecciona una Equipo</option>
	<?php while($ver = mysqli_fetch_row($result)): ?>
		<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
	<?php endwhile; ?>
	</select>