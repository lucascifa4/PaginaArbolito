<div class="modal fade" id="ModalUsuario" tabindex="-1" aria-labelledby="exampleModalUsuario" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bienvenido</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('create.usuarios') }}">
            <label for="usuario" class="form-label"> Ingrese su Usuario</label>
            <input type="text" name="usuario" id="usuario" class="form-control" required>

            <label for="contraseña" class="form-label">Ingrese su Contraseña</label>
            <input type="password" name="contraseña" id="contraseña" class="form-control" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
        </div>
      </div>
    </div>
</div>