<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Proveedores</h1>
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
                        <label for="ProveedorId" class="col-sm-2 col-form-label">Id:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProveedorId" value="<?= $proveedor['Proveedor']['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ProveedorRUC" class="col-sm-2 col-form-label">RUC:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProveedorRUC" value="<?= $proveedor['Proveedor']['ruc'] ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="ProveedorRazonSocial" class="col-sm-2 col-form-label">Razon Social:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProveedorRazonSocial" value="<?= $proveedor['Proveedor']['razonsocial'] ?>">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="ProveedorTelefono" class="col-sm-2 col-form-label">Telefono:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProveedorTelefono" value="<?= $proveedor['Proveedor']['telefono'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProveedorEmail" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProveedorEmail" value="<?= $proveedor['Proveedor']['email'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProveedorDireccion" class="col-sm-2 col-form-label">Direccion:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProveedorDireccion" value="<?= $proveedor['Proveedor']['direccion'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProveedorCuidadID" class="col-sm-2 col-form-label">Cuidad:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ProveedorCuidadID" value="<?= $proveedor['Proveedor']['ciudad_id'] ?>">
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