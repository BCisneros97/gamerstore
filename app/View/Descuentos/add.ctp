<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registrar descuento</h1>
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
                <?php echo $this->Form->create('Descuento', array('class' => 'form-horizontal')); ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="DescuentoCompraminima" class="col-sm-2 col-form-label">Compra mínima</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('compraminima', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="DescuentoPorcentaje" class="col-sm-2 col-form-label">Porcentaje</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('porcentaje', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="DescuentoFechainicio" class="col-sm-2 col-form-label">Fecha de inicio</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('fechainicio', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="DescuentoFechatermino" class="col-sm-2 col-form-label">Fecha de termino</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('fechatermino', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="DescuentoTipo" class="col-sm-2 col-form-label">Tipo</label>
                        <div class="col-sm-10">
                            <select name="data[TipoDescuento]" class="form-control" id="DescuentoTipo">
                                <option value="Admin">Administrador</option>
                                <option value="Vendedor">Atención al cliente</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserPassword2" class="col-sm-2 col-form-label">Confirmar Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="UserPassword2" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserFoto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" id="UserFoto" name="data[foto]">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="UserPermiso" class="col-sm-2 col-form-label">Permisos</label>
                        <div class="col-sm-10">
                            <?php foreach ($permisos as $permiso) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[Permiso][Permiso][]" value="<?= $permiso['Permiso']['id'] ?>" id="permiso<?= $permiso['Permiso']['id'] ?>">
                                    <label class="form-check-label" for="permiso<?= $permiso['Permiso']['id'] ?>">
                                        <?= $permiso['Permiso']['descripcion'] ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
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