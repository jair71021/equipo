<?php 
	require_once "Conexion.php";

	class Equipos extends Conexion {
		public function agregarEqupos($datos) {
			$conexion = Conexion::conectar();

			$sql = "INSERT INTO t_equipos (id_tipos,
											nombreequipo,
											modelo      ,
											numserie    ,
											fecha       ,
											nampm       ,
											telefono    ,
											email       ,
										
			VALUES (?, ?, ?, ?, ?, ?)";
			$query = $conexion->prepare($sql);
			$query->bind_param('isssss', $datos['idEquipos'],
																$datos['nombreequipo'],
																$datos['modelo      '],
																$datos['numserie    '],
																$datos['fecha       '],
																$datos['nampm       '],
																$datos['telefono    '],
																$datos['email       ']);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function eliminarEquipos($idEquipos) {
			$conexion = Conexion::conectar();

			$sql = "DELETE FROM t_equipos WHERE id_equipo = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idEquipo);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function obtenerDatosEquipos($idEquipo) {
			$conexion = Conexion::conectar();

			$sql = "SELECT id_tipos,
											nombreequipo,
											modelo      ,
											numserie    ,
											fecha       ,
											nampm       ,
											telefono    ,
											email       ,
							id_equipo
					FROM t_equipos  
					WHERE id_equipo = '$idEquipo'";
			$result = mysqli_query($conexion, $sql);

			$equipo = mysqli_fetch_array($result);

			$datos = array(
						"id_equipo" =>		  		 $equipo['id_equipo'],
						"id_tipo" => 		 			   $equipo['id_tipo'],
						"nombreequipo " =>       $equipo['nombreequipo'],
						"modelo       " =>       $equipo['modelo      '],
						"numserie     " =>       $equipo['numserie    '],
						"fecha        " =>       $equipo['fecha       '],
						"nampm        " =>       $equipo['nampm       '],
						"telefono     " =>       $equipo['telefono    '], 
						"email        "     =>   $equipo['email       '] 
							);
			return $datos;
		}

	
	
		public function actualizarEquipo($datos) {
			$conexion = Conexion::conectar();

			$sql = "UPDATE t_equipos SET id_tipo = ?, 
																			nombreequipo = ?,
																			modelo       = ?,
																			numserie     = ?,
																			fecha        = ?,
																			nampm        = ?,
																			telefono     = ?,
																			email        = ? 
					WHERE id_tipo = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('isssssi', $datos['idTipos'],
											$datos['nombreequipo'],
											$datos['modelo      '],
											$datos['numserie    '],
											$datos['fecha       '],
											$datos['nampm       '],
											$datos['telefono    '],
											$datos['email       '],
											$datos['idContacto']);
			$respuesta = $query->execute();
			return $respuesta;
		}
	}

?>