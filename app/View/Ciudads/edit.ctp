<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Ciudad</h1>
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
                <?php echo $this->Form->create('Ciudad', array('class' => 'form-horizontal')); ?>
                <div class="card-body">
                    <?php echo $this->Form->input('id'); ?>
                    <div class="form-group row">
                        <label for="CategoriaNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('nombre', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="RegionNombre" class="col-sm-2 col-form-label">Región</label>
                        <div class="col-sm-10">
                            <select name="data[Ciudad][region_id]" class="form-control" id="CiudadRegionId">
                                <?php foreach ($regions as $region) : ?>
                                    <option value="<?php echo $region['Region']['id'] ?>"><?php echo $region['Region']['nombre'] ?></option>
                                <?php endforeach; ?>
                            </select>
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