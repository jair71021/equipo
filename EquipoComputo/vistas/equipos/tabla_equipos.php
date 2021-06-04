
<?php 
	require_once "../../clases/Conexion.php";
	$con = new Conexion();
	$conexion = $con->conectar();

	$sql = "SELECT 
						equipos.nombreequipo AS nombreequipo,
						equipos.modelo       AS modelo      ,
						equipos.numserie     AS numserie    ,
						equipos.fecha        AS fecha       ,
						equipos.nampm    		 AS nampm       ,
						equipos.telefono     AS telefono    ,
						equipos.email        AS email       ,
						tipos.nombre AS tipos,
						equipos.id_equipos AS idEquipos
					FROM
						t_equipos AS equipos
						INNER JOIN
						t_tipos AS tipos
					ON equipos.id_tipos = equipos.id_equipos";
	$result = mysqli_query($conexion, $sql);
?>
<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover table-condensed" id="tablaEquipos">
				<thead>
					<tr>
						<th>Nombre de equipos</th>
						<th>Modelos</th>
						<th>Numero de serie</th>
						<th>Fecha agregada</th>
						<th>nombre y apellidos completos </th>
						<th></th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<?php 
						while($mostrar = mysqli_fetch_array($result)) {  
							$idEquipo = $mostrar['idEquipo'];
					?>
					<tr>
						<td><?php echo $mostrar['nombreequipo'] ?></td>
						<td><?php echo $mostrar['modelo      '] ?></td>
						<td><?php echo $mostrar['numserie    '] ?></td>
						<td><?php echo $mostrar['fecha       '] ?></td>
						<td><?php echo $mostrar['nampm       '] ?></td>
						<td><?php echo $mostrar['telefono    '] ?></td>
						<td><?php echo $mostrar['email       '] ?></td>
						<td><?php echo $mostrar['tipos       '] ?></td>
						<td>
							<span class="btn btn-secondary btn-sm" onclick="obtenerDatosEquipo('<?php echo $idEquipo ?>')" data-toggle="modal" data-target="#modalActualizarEquipos">
								<span class="fas fa-edit"></span>
							</span>
						</td>
						<td>
							<span class="btn btn-danger btn-sm" onclick="eliminarEquipo('<?php echo $idEquipo ?>')">
								<span class="far fa-trash-alt"></span>
							</span>
						</td>
					</tr>
					<?php } ?>		
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaEquiposDT').DataTable();
	});
</script>