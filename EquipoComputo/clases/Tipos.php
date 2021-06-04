<?php 

	require_once "Conexion.php";

	class Tipos extends Conexion {
		public function agregarTipo($datos) {
			$conexion = Conexion::conectar();
			$sql = "INSERT INTO t_tipos (nombre, descripcion) 
					VALUES (?, ?)";
			$query = $conexion->prepare($sql);
			$query->bind_param('ss', $datos['nombre'],
			$datos['descripcion']);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function eliminaTipo($idTipos) {
			$conexion = Conexion::conectar();
			$sql = "DELETE FROM t_tipos WHERE id_tipos = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idTipos);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function obtenerDatosTipos($idTipos) {
			$conexion = Conexion::conectar();
			$sql = "SELECT id_tipo,
							nombre,
							descripcion 
					FROM t_Tipos 
					WHERE id_tipo = '$idTipos'";
			$result = mysqli_query($conexion, $sql);
			$tipo = mysqli_fetch_array($result);

			$datos = array(
					"idTipos" => $tipo['id_tipo']
					"nombre" => $tipo['nombre']
					"descripcion" => $tipo['descripcion']
							);
			return $datos;
		}

		public function actualizarTipo($datos) {
			$conexion = Conexion::conectar();

			$sql = "UPDATE t_tipos SET nombre = ?, 
											descripcion = ? 
					WHERE id_tipo = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('ssi', $datos['nombre'],
									$datos['descripcion'],
									$datos['idTipos']);
			$respuesta = $query->execute();
			return $respuesta;
		}
	}
?>