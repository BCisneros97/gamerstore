<?php
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));

echo $this->Html->css('credit_card', array('inline' => false));

?>
<div class="container" style="margin-top: 150px">
    
    <div class="row">
        <div class="col-sm-3">
            <?php echo $this->element('menu_usuario'); ?>
        </div>
        <div class="col-sm-9" >

            <h3>Mis Tarjetas</h3>

                <div class="card bg-red">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                            <?php echo $this->Html->link(
                            $this->Html->tag('button', 'Añadir Tarjeta', array('class' => 'btn btn-info')),
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
                                    foreach ($tarjetas as $tarjeta):
                                    ?>
                                    <div class="col-sm-4">
                                        <div class="card"  style="min-height: 200px; max-height: 250px">
                                            <div class="card-header">

                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-1">
                                                        <i class="fa fa-credit-card"></i>
                                                    </div>
                                                    
                                                    <div class="col-sm-10">
                                                        <p class="text-left"> <?php echo h($tarjeta['Tarjeta']['numero'])."<br>".h($tarjeta['Tarjeta']['nombretarj'])."<br> ".h($tarjeta['Tarjeta']['fechavencimiento'])  ?></p>
                                                    </div>
                                                </div>
                                        
                                            </div>

                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-sm">

                                                        <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tarjeta['Tarjeta']['id'])); ?>
                                                    </div>
                                                    <div class="col-sm">
                                                        <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tarjeta['Tarjeta']['id']), array(), __('Está seguro de eliminar  # %s?', $tarjeta['Tarjeta']['id'])); ?>
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
    </div>
</div>