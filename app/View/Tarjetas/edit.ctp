<?php
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));
?>
<div class="container" style="margin-top: 110px">
    
    <div class="row">
        <div class="col-sm-3">
            <?php echo $this->element('menu_usuario'); ?>
        </div>
        <div class="col-sm-9" >
            <h3>Editar Tarjeta</h3>

                <div class="card bg-red">
                    <div class="card-header"></div>
                        <div class="card-body">
                            <div class="direccions form">
                                <?php echo $this->Form->create('Tarjeta'); ?>
                                <fieldset>
                                    <div class="container ">
                                        <?php echo $this->Form->input('id'); ?>
                                            <div class="row">
                                                <?php
                                                    echo $this->Form->input('numero', array(
                                                        'label' => array(
                                                        'text'=>'Tarjeta :',
                                                        'class'=>'font-weight-bolder col-form-label col-sm-3',
                                                        'style'=>'margin-bottom: 10px'
                                                    ),
                                                        'class' => 'form-control col-sm-9',
                                                        'div'=>false,
                                                        'placeholder'=>'Numero de Tarjeta:'
                                                    ));
                                                    
                                                    echo $this->Form->input('fechavencimiento', array(
                                                        'label' => array(
                                                        'text'=>'Fecha de Vencimiento  :',
                                                        'class'=>'font-weight-bolder col-form-label col-sm-3',
                                                        'style'=>'margin-bottom: 10px',
                                                    ),
                                                        'class' => 'form-control col-sm-9',
                                                        'div'=>false,
                                                        'placeholder'=>'MM/YY'
                                                    ));
                            
                                                    echo $this->Form->input('ccv', array(
                                                        'label' => array(
                                                        'text'=>'CVV  :',
                                                        'class'=>'font-weight-bolder col-form-label col-sm-3',
                                                        'style'=>'margin-bottom: 10px',
                                                    ),
                                                        'class' => 'form-control col-sm-9',
                                                        'div'=>false,
                                                    ));
                            
                                                    echo $this->Form->input('nombretarj', array(
                                                        'label' => array(
                                                        'text'=>'Nombre de la Tarjeta :',
                                                        'class'=>'font-weight-bolder col-form-label col-sm-3',
                                                        'style'=>'margin-bottom: 10px',
                                                    ),
                                                        'class' => 'form-control col-sm-9',
                                                        'div'=>false,
                                                        'type'=>'text',
                                                        'maxlength'=>'60'
                                                    ));
                                                ?>
                                            </div>
                                    </div>
                                </fieldset>
                                <?php
                                    $options = array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-info',
                                    'label' => 'Guardar',
                                    'div' => array(
                                    'class'=>'card-footer'
                                    )
                                );
                                echo $this->Form->end($options); ?>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</div>