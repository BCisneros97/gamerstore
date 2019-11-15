<?php
echo $this->Html->css('/plugins/toastr/toastr.min.css', array('inline' => false));
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));
?>

<section class="container" style="padding-top:120px">
    <div class="row">
        <div class="col-sm-3">
            <?php echo $this->element('menu_usuario'); ?>
        </div>
        <div class="col-sm-9">
            <h3>Agregar tarjeta</h3>
            <hr>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php echo $this->Form->create('Tarjeta', array('class' => 'form-horizontal')); ?>
                <div class="card-body">


                    <div class="form-group row">

                        <label for="nombretarj" class="col-sm-3 col-form-label">Titular</label>
                        <div class="col-sm-9">
                            <?php echo $this->Form->input('nombretarj', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NumTarj" class="col-sm-3 col-form-label">N° de Tarjeta</label>
                        <div class="col-sm-9">
                            <div class="input-group-append">
                            <?php echo $this->Form->input('numero', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>

                                <span class="input-group-text text-muted">
                                    <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>  
                                    <i class="fab fa-cc-mastercard"></i>
                                </span>
                            </div>
                        </div>


                    </div>

                    <div class="form-group row">
                        <label for="fechavencimiento" class="col-sm-3 col-form-label">Fecha Venc.</label>
                        <div class="col-sm-9">
                            <?php echo $this->Form->input('fechavencimiento', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Tarjetaccv" class="col-sm-3 col-form-label">CCV</label>
                        <div class="col-sm-9">
                            <?php echo $this->Form->input('ccv', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>
                </div>
                <!-- /.card-footer -->

                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>