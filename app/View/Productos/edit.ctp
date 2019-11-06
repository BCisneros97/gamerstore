<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Producto</h1>
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
                <?php echo $this->Form->create('Producto', array('class' => 'form-horizontal', 'type'=>'file')); ?>
                <div class="card-body">
                    <?php echo $this->Form->input('id'); ?>
                    
                    <div class="form-group row">
                        <label for="ProductoNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('nombre', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <!-- -->

                    <div class="form-group row">
                        <label for="ProductoImagen" class="col-sm-2 col-form-label">Imagen</label>
                        <div class="col-sm-10">
                            <img src="data:image/jpg;base64,<?= base64_encode($this->request->data['¨Producto']['imagen']) ?>" width="30%" height="auto">
                            <input type="file" class="form-control-file" id="ProductoImagen" name="imagen">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoCaracteristica" class="col-sm-2 col-form-label">Caracteristicas</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('caracteristica', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoPrecioUnitario" class="col-sm-2 col-form-label">Precio Unitario</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('preciounitario', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoPrecioenvioLocal" class="col-sm-2 col-form-label">Precio envio Local</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('precioenviolocal', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoPrecioenvioProvincia" class="col-sm-2 col-form-label">Precio envio Provincia</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('precioenvioprovincia', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoCategoriaID" class="col-sm-2 col-form-label">Categoria</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('categoria_id', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ProductoProveedorID" class="col-sm-2 col-form-label">Proveedor</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('proveedor_id', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
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