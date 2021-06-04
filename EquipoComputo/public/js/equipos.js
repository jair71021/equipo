$(document).ready(function(){
	$('#cargaTablaEquipos').load('vistas/equipos/tabla_equipos.php');

	$('#btnAgregarEquipos').click(function(){

		
		if ($('#nombreequipo').val() == "") {
			swal("Debes agregar el nombre de tu equipo");
		}else if ($('#modelo').val() == "") {
			swal("Debes agregar el modelo ");
			return false;
		}else if ($('#numserie').val() == "") {
			swal("Debes agregar el numero de serie");
		}else if ($('#fecha').val() == "") {
			swal("Debes agregar una fecha  ");
			return false;
		}else if ($('#email').val() == "") {
			swal("Debes agregar un correo electronico ");
			return false;
		}
		else if ($('#telfono').val() == "") {
			swal("Debes agregar un telefono ");
			return false;
		}
	
		agregarEquipo();
	});

	$('#btnActualizarEquipo').click(function(){
		actualizarEquipos();
	});
});


function agregarEquipos(){
	$.ajax({
		type: "POST",
		url: "procesos/equipos/agregarEquipo.php",
		data: $('#frmAgregarEquipos').serialize(),
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#frmAgregarEquipos')[0].reset();
				$('#cargaTablaEquipos').load('vistas/equipos/tabla_equipos.php');
				swal("Se agrego con exito!","success");
			} else {
				swal("No se pudo agregar!","error");
			}
		}
	});
}

function actualizarEquipos() {
	$.ajax({
		type: "POST",
		url: "procesos/equipos/actualizarEquipos.php",
		data: $('#frmAgregarEquiposU').serialize(),
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#cargaTablaEquipos').load('vistas/equipos/tabla_equipos.php');
				$('#modalActualizarEquipos').modal("toggle");
				swal("Se actualizo con exito!","success");
			} else {
				swal("No se pudo actualizar!","error");
			}
		}
	});
}


function eliminarEquipos(idEquipos) {
	swal({
		title: "¿Esta seguro de eliminar este contacto?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"idEquipos=" + idEquipos,
				url:"procesos/equipos/eliminarequipos.php",
				success:function(respuesta){
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						$('#cargaTablaEquiposo').load('vistas/equipos/tabla_equipos.php');
						swal("Se elimino con exito!","success");
					} else {
						swal("No se pudo eliminar!","error");
					}
				}
			});
		} 
	});
}

function obtenerDatosEquipos(idEquipos) {
	$.ajax({
		type: "POST",
		data: "idEquipos=" + idEquipos,
		url: "procesos/equipos/obtenerDatosEquipos.php",
		success:function(respuesta) {
			respuesta = jQuery.parseJSON(respuesta);
			idEquipos = respuesta['id_equipos '];

			$('#nombreU').val(respuesta['nombre']);
			$('#apaternoU').val(respuesta['paterno']);
			$('#amaternoU').val(respuesta['materno']);
			$('#telefonoU').val(respuesta['telefono']);
			$('#emailU').val(respuesta['email']);
			$('#idContactoU').val(respuesta['id_contacto']);
			$('#categoriasIdU').load("vistas/contactos/select_categorias_update.php?id_categoria=" + idCategoria);
			
		}
	});
}


