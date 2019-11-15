<?php
echo $this->Html->css('/plugins/toastr/toastr.min.css', array('inline' => false));
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));
?>

<section id="NuevoDisenio" class="container" style="padding-top:120px;min-height:500px">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-10">
            <?php echo $this->Form->create('Disenio', array('class' => 'form-horizontal', 'type' => 'file')); ?>
            <h2>Crear Diseño</h2>
            <input type="hidden" name="data[Disenio][producto_id]" value="<?= $producto_id ?>">
            <input type="hidden" name="data[Disenio][cliente_id]" value="<?= $cliente['Cliente']['id'] ?>">
            <div class="form-group row">
                <label for="DisenioImagen" class="col-sm-2 col-form-label">Imagen</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="DisenioImagen" name="imagen">
                </div>
            </div>
            <div class="form-group row">
                <label for="DisenioDescripcion" class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('descripcion', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</section>