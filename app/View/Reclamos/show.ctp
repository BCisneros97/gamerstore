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
            <h3>Reclamo</h3>
            <hr>
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
                    <input type="text" readonly class="form-control-plaintext" id="ReclamoCliente" value="<?= $reclamo['DiseniosVenta']['Venta']['Cliente']['User']['username'] ?>">
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
                    <?php if (!empty($reclamo['Reclamo']['prueba'])) : ?>
                        <img id="ReclamoPrueba" src="data:image/jpg;base64,<?= base64_encode($reclamo['Reclamo']['prueba']) ?>" width="50%" height="auto">
                    <?php else : ?>
                        <input type="text" id="ReclamoPrueba" readonly class="form-control-plaintext" value="(Sin pruebas)">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="ReclamoSolucion" class="col-sm-2 col-form-label">Solución:</label>
                <div class="col-sm-10">
                    <textarea class="form-control-plaintext" id="ReclamoSolucion"><?= $reclamo['Reclamo']['solucion'] ?></textarea>
                </div>
            </div>
        </div>
    </div>
</section>