<?php
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));
?>
<div class="container" style="margin-top: 110px">
    <h3>Mi Dirección de Envío</h3>

    <div class="card bg-red">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <?php echo $this->Html->link(
                        $this->Html->tag('button', 'Añadir Direccion', array('class' => 'btn btn-info')),
                        array('action' => 'add'),
                        array('escape' => false)
                    );
                    ?>
                </h3>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <?php
                        foreach ($direccions as $direccion):
                            ?>
                            <div class="col-sm-3">
                                <div class="card" style="min-height: 250px;max-height: 250px ">
                                    <div class="card-header">

                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <i class="fas fa-map-marker"></i>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="text-left"> <?php echo h($direccion['Direccion']['primeralinea'])."<br>".h($direccion['Direccion']['segundalinea'])."<br>".h($direccion['Ciudad']['nombre']).", ".h($direccion['Direccion']['codigopostal'])  ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <i class="fas fa-mobile-alt"></i>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="text-left"> <?php echo h($direccion['Direccion']['telefono']) ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-sm">

                                                <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $direccion['Direccion']['id'])); ?>
                                            </div>
                                            <div class="col-sm">
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $direccion['Direccion']['id']), array(), __('Está seguro de eliminar  # %s?', $direccion['Direccion']['id'])); ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>


            </div>
        </div>
    </div>

</div>