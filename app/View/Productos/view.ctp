<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Productos</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group row">
                        <label for="ProductoId" class="col-sm-2 col-form-label">Id:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProductoId" value="<?= $producto['Producto']['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ProductoNombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProductoNombre" value="<?= $producto['Producto']['nombre'] ?>">
                        </div>
                    </div>

                   
                     <div class="form-group row">
                        <label for="ProductoImagen" class="col-sm-2 col-form-label">Imagen:</label>
                        <div class="col-sm-10">
                            <img src="data:image/jpg;base64,<?= base64_encode($producto['Producto']['imagen']) ?>" width="30%" height="auto">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="ProductoCaracteristica" class="col-sm-2 col-form-label">Caracteristicas:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProductoCaracteristica" value="<?= $producto['Producto']['caracteristica'] ?>">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="ProductoPrecioUnitario" class="col-sm-2 col-form-label">Precio Unitario:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProductoPrecioUnitario" value="<?= $producto['Producto']['preciounitario'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoPrecioenvioLocal" class="col-sm-2 col-form-label">Precio envio Local:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProductoPrecioenvioLocal" value="<?= $producto['Producto']['precioenviolocal'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoPrecioenvioProvincia" class="col-sm-2 col-form-label">Precio envio Local:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProductoPrecioenvioProvincia" value="<?= $producto['Producto']['precioenvioprovincia'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoCategoriaID" class="col-sm-2 col-form-label">Precio envio Local:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProductoCategoriaID" value="<?= $producto['Producto']['categoria_id'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoProveedorID" class="col-sm-2 col-form-label">Proveedor:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProductoProveedorID" value="<?= $producto['Producto']['proveedor_id'] ?>">
                        </div>
                    </div>



                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
    </div>
</section>