<!-- Modal -->
<div class="modal fade" id="modalActualizarTipos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Tipos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarTipos">
          <input type="text" name="idTipos" id="idTipos" hidden="">
          <label for="nombreTiposU">Nombre</label>
          <input type="text" id="nombreTiposU" name="nombreTiposU" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnActualizarTipos">Actualizar</button>
      </div>
    </div>
  </div>
</div>