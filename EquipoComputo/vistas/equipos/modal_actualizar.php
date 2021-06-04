<!-- Modal -->
<div class="modal fade" id="modalActualizarEquipos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Equipos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarEquiposU">
          <div id="EquiposIdU"></div>
          <label for="nombreequipoU">Nombre del Equipos</label>
          <input type="text" class="form-control" id="nombreequipoU" name="nombreequipoU">
          <label for="modeloU">Modelos</label>
          <input type="text" class="form-control" id="modeloU" name="modeloU">
          <label for="numserieU">Numero de serie</label>
          <input type="text" class="form-control" id="numserieU" name="numserieU">
          <label for="fechaU">Fecha agregada </label>
          <input type="text" class="form-control" id="fechaU" name="fechaU">
          <label for="napamU">Nombre y apellidos completo </label>
          <input type="text" class="form-control" id="napamU" name="napamU">
          <label for="emailU">Email</label>
          <input type="text" class="form-control" id="emailU" name="emailU">
          <label for="telefonoU">Telefono</label>
          <input type="text" class="form-control" id="telefonoU" name="telefonoU">
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnActualizarEquipos">Actualizar</button>
      </div>
    </div>
  </div>
</div>