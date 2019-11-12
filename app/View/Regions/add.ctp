<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Regiones</h1>
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
                <?php echo $this->Form->create('Region', array('class' => 'form-horizontal')); ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="CategoriaNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('nombre', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
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