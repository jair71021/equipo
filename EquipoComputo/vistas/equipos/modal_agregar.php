<!-- Modal -->
<div class="modal fade" id="modalAgregarEquipos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo equipos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarEquipos">
          <div id="EquiposId"></div>
          <label for="nombreequipo">Nombre del Equipos</label>
          <input type="text" class="form-control" id="nombreequipo" name="nombreequipo">
          <label for="modelo">Modelos</label>
          <input type="text" class="form-control" id="modelo" name="modelo">
          <label for="numserie">Numero de serie</label>
          <input type="text" class="form-control" id="numserie" name="numserie">
          <label for="fecha">Fecha agregada </label>
          <input type="text" class="form-control" id="fecha" name="fecha">
          <label for="napam">Nombre y apellidos completo </label>
          <input type="text" class="form-control" id="napam" name="napam">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email">
          <label for="telefono">Telefono</label>
          <input type="text" class="form-control" id="telefono" name="telefono">
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAgregarEquipos">Guardar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $('#equiposId').load("vistas/equipos/select_categorias.php");
  });
</script>