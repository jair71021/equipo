
<?php 
	require_once "../../clases/Conexion.php";
	$objCon = new Conexion();
	$conexion = $objCon->conectar();

	$sql = "SELECT nombre, id_tipos
			FROM t_tipos";
	$result = mysqli_query($conexion, $sql); 
?>

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover table-condensed" id="tablaTipos">
				<thead>
					<tr>
						<th>Nombre</th>
						
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>

				<?php
					while($mostrar = mysqli_fetch_array($result)) {  
						$idTipos = $mostrar['id_tipos']; 
				?>
					<tr>
						<td><?php echo $mostrar['nombre'] ?></td>
						
						<td>
							<span onclick="obtenerTipos('<?php echo $idTipos ?>')" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalActualizarTipos">
								<span class="fas fa-edit"></span>
							</span>
						</td>
						<td>
							<span class7="btn btn-danger btn-sm" onclick="eliminarTipos('<?php echo $idTipos?>')">
								<span class="far fa-trash-alt"></span>
							</span>
						</td>
					</tr>
				<?php 
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaTipos').DataTable();
	});
</script>