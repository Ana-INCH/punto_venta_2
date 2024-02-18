<div class="modal fade" id="crearproductoModal" tabindex="-1" aria-labelledby="crearproductoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearproductoModalLabel">Agregar Nuevo Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de creación del producto -->
                <form action="{{ route('productos.store') }}" method="POST">
                    @csrf


                    <!-- Campo: Nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <!-- Campo: Descripcion -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>

                     <!-- Campo: Precio Unitario -->
                     <div class="mb-3">
                        <label for="precio_unitario" class="form-label">Precio Unitario</label>
                        <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" required>
                    </div>

                    <!-- Campo: Imagen -->
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="text" class="form-control" id="imagen" name="imagen" required>
                    </div>

                    <!-- Campo: Estatus -->
                    <div class="mb-3">
                        <label for="estatus" class="form-label">Estatus</label>
                        <input type="text" class="form-control" id="estatus" name="estatus" required>
                    </div>

                    <!-- Campo: Existencia -->
                    <div class="mb-3">
                        <label for="existencia" class="form-label">Existencia</label>
                        <input type="text" class="form-control" id="existencia" name="existencia" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
