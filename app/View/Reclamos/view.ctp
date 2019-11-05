<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ver reclamo</h1>
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
                        <label for="ReclamoId" class="col-sm-2 col-form-label">Id:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ReclamoId" value="<?= $reclamo['Reclamo']['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoFecha" class="col-sm-2 col-form-label">Fecha:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ReclamoFecha" value="<?= $reclamo['Reclamo']['fecha'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoTiporeclamo" class="col-sm-2 col-form-label">Tipo:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ReclamoTiporeclamo" value="<?= $reclamo['Tiporeclamo']['descripcion'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoEstado" class="col-sm-2 col-form-label">Estado:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ReclamoEstado" value="<?= $reclamo['Reclamo']['estado'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoCliente" class="col-sm-2 col-form-label">Cliente:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ReclamoCliente" value="<?= $reclamo['DiseniosVenta']['Venta']['Cliente']['User']['nombre'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoDescripcion" class="col-sm-2 col-form-label">Descripción:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control-plaintext" id="ReclamoDescripcion" readonly><?= $reclamo['Reclamo']['descripcion'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoPrueba" class="col-sm-2 col-form-label">Prueba:</label>
                        <div class="col-sm-10">
                            <?= $this->Html->image('p-1.png', array('width' => '50%', 'heigth' => 'auto')) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoSolucion" class="col-sm-2 col-form-label">Solución:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control-plaintext" id="ReclamoSolucion"><?= $reclamo['Reclamo']['solucion'] ?></textarea>
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