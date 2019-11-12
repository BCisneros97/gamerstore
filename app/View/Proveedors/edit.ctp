<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Proveedor</h1>
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
                <?php echo $this->Form->create('Proveedor', array('class' => 'form-horizontal')); ?>
                <div class="card-body">
                    <?php echo $this->Form->input('id'); ?>
                    
                    <div class="form-group row">
                        <label for="ProveedorRUC" class="col-sm-2 col-form-label">RUC</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('ruc', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <!-- -->

                    <div class="form-group row">
                        <label for="ProveedorRazonSocial" class="col-sm-2 col-form-label">Razon Social</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('razonsocial', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProveedorTelefono" class="col-sm-2 col-form-label">Telefono</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('telefono', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProveedorEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('email', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProveedorDireccion" class="col-sm-2 col-form-label">Direccion</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('direccion', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProveedorCuidadID" class="col-sm-2 col-form-label">Cuidad</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('ciudad_id', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
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