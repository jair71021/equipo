<?php 
	
	require_once "../../clases/Conexion.php";
	$con = new Conexion();
	$conexion = $con->conectar();

	$idCategoria = $_GET['id_equipo'];

	$sql = "SELECT id_equipo,
					nombre 
			FROM t_equipos
			ORDER BY nombre";
	$result = mysqli_query($conexion, $sql);
?>
	<label for="idEquipoSelectU">Selecciona una Equipo</label>
		<select id="idEquipoSelectU" name="idEquipoSelectU" class="form-control">
			<?php 
				while($ver = mysqli_fetch_row($result)): 
					if ($ver[0] == $idCategoria) {
			?>
			<option selected="" value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
			<?php  
			} else {
	?>
			<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
	<?php  
			}
	?>	
	<?php endwhile; ?>
	</select>