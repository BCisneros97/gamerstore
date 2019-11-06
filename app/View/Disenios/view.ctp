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
                    <?php echo $this->Form->input('id', array(
                        'class' => 'form-control-plaintext col-sm-10',
                        'div' => array('class' => 'form-group row'),
                        'readonly',
                        'label' => array(
                            'text' => 'Id:',
                            'class' => 'col-sm-2 col-form-label'
                        ),
                        'value' => $disenio['Disenio']['id'],));
                    echo $this->Form->input('descripcion', array(
                        'class' => 'form-control-plaintext col-sm-10',
                        'div' => array('class' => 'form-group row'),
                        'readonly',
                        'label' => array(
                            'text' => 'Descripción :',
                            'class' => 'col-sm-2 col-form-label'
                        ),
                        'value' => $disenio['Disenio']['descripcion'],));

                    ?>

                    <div class="form-group row">
                        <label for="DisenioImagen" class="col-sm-2 col-form-label">Imagen:</label>
                        <div class="col-sm-10">
                            <img src="data:image/jpg;base64,<?= base64_encode($disenio['Disenio']['imagen']) ?>" width="30%" height="auto">
                        </div>
                    </div>
                    <?php
                    echo $this->Form->input('producto_id', array(
                        'type' => 'text',
                        'class' => 'form-control-plaintext col-sm-10',
                        'div' => array('class' => 'form-group row'),
                        'readonly',
                        'label' => array(
                            'text' => 'Producto :',
                            'class' => 'col-sm-2 col-form-label'
                        ),
                        'value' => $disenio['Producto']['nombre'],));
                    echo $this->Form->input('cliente_id', array(
                        'type' => 'text',
                        'class' => 'form-control-plaintext col-sm-10',
                        'div' => array('class' => 'form-group row'),
                        'readonly',
                        'label' => array(
                            'text' => 'Cliente :',
                            'class' => 'col-sm-2 col-form-label'
                        ),
                        'value' => $disenio['User']['nombre'],));
                    ?>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
    </div>
</section>