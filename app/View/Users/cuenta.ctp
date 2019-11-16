<?php
echo $this->Html->css('/plugins/toastr/toastr.min.css', array('inline' => false));
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));
?>

<section class="container" style="padding-top:120px;min-height:500px">
    <div class="row">
        <div class="col-sm-3">
            <?php echo $this->element('menu_usuario'); ?>
        </div>
        <div class="col-sm-9">
            <h3>Mi cuenta</h3>
            <hr>
            <div class="form-group row">
                <label for="UserUsername" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="UserUsername" value="<?= $cliente['User']['username'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="UserEmail" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="UserEmail" value="<?= $cliente['User']['email'] ?>">
                </div>
            </div>
        </div>
    </div>
</section>