$(document).ready(function(){

	$('#cargaTablaTipos').load('vistas/tipos/tabla_tipos.php');
	
	$('#btnGuardarTipos').click(function(){

		agregarTipos();
	});

	$('#btnActualizarTipos').click(function(){
		actualizarTipos();
	});
});


function agregarTipos() {
	$.ajax({
		type:"POST",
		data:$('#frmAgregarTipos').serialize(),
		url: "procesos/tipos/agregarTipos.php",
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#frmAgregarTipos')[0].reset();
				$('#cargaTablaTipos').load('vistas/tipos/tabla_tipos.php');
				swal("Se agrego con exito!","success");
			} else {
				swal("No se pudo agregar!","error");
			}
		}
	});
}

function eliminarTipos(idTipos) {
	swal({
		title: "¿Esta seguro de eliminar esta Tipos?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type: "POST",
				data: "idTipos=" + idTipos,
				url: "procesos/tipos/eliminarTipos.php",
				success:function(respuesta) {
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						$('#cargaTablaTipos').load('vistas/tipos/tabla_tipos.php');
						swal("Se elimino con exito!","success");
					} else {
						swal("No se pudo eliminar!","error");
					}
				}
			});
		} 
	});
}
function obtenerDatosTipos(idTipos) {
	$.ajax({
		type:"POST",
		data:"idTipos=" + idTipos,
		url:"procesos/tipos/obtenerDatosTipos.php",
		success:function(respuesta) {
			respuesta = jQuery.parseJSON(respuesta);

			$('#idTipos').val(respuesta['idTipos']);
			$('#nombreTiposU').val(respuesta['nombre']);
			$('#descripcionU').val(respuesta['descripcion']);
		}
	});
}

function actualizarTipos() {
	$.ajax({
		type:"POST",
		data:$('#frmActualizarTipos').serialize(),
		url: "procesos/tipos/actualizarTipos.php",
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#cargaTablaTipos').load('vistas/tipos/tabla_Tipos.php');
				$('#modalActualizarTipos').modal("toggle");
				swal("Se actualizo con exito!","success");
			} else {
				swal(":(","No se pudo actualizar!","error");
			}
		}
	});
}