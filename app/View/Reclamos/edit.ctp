<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar reclamo</h1>
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
                <!-- form start -->
                <?php echo $this->Form->create('Reclamo', array('class' => 'form-horizontal')); ?>
                <div class="card-body">
                    <?php echo $this->Form->input('id'); ?>
                    <div class="form-group row">
                        <label for="ReclamoFecha" class="col-sm-2 col-form-label">Fecha</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ReclamoFecha" value="<?= $this->request->data['Reclamo']['fecha'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoTipo" class="col-sm-2 col-form-label">Tipo</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ReclamoTiporeclamo" value="<?= $this->request->data['Tiporeclamo']['descripcion'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoCliente" class="col-sm-2 col-form-label">Cliente</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="ReclamoCliente" value="<?= $this->request->data['DiseniosVenta']['Venta']['Cliente']['User']['username'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoDescripcion" class="col-sm-2 col-form-label">Descripción</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="ReclamoDescripcion" readonly><?= $this->request->data['Reclamo']['descripcion'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoPrueba" class="col-sm-2 col-form-label">Prueba</label>
                        <div class="col-sm-10">
                            <?= $this->Html->image('p-1.png', array('width' => '50%', 'heigth' => 'auto')) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoEstado" class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-sm-10">
                            <select name="data[Reclamo][estado]" class="form-control" id="ReclamoEstado">
                                <option value="Pendiente" <?= $this->request->data['Reclamo']['estado'] == 'Pendiente' ? 'selected' : '' ?>>Pendiente</option>
                                <option value="Finalizado" <?= $this->request->data['Reclamo']['estado'] == 'Finalizado' ? 'selected' : '' ?>>Finalizado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ReclamoSolucion" class="col-sm-2 col-form-label">Solución</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="ReclamoSolucion" name="data[Reclamo][solucion]"><?= $this->request->data['Reclamo']['solucion'] ?></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
                <!-- /.card-footer -->
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>