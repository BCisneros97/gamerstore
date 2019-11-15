<?php
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
            <h3>Añadir otra Dirección de Envío</h3>
            <hr>

            <div class="card bg-red">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="direccions form">
                        <?php echo $this->Form->create('Direccion'); ?>
                        <fieldset>
                            <div class="container ">
                                <div class="row">
                                    <?php
                                    echo $this->Form->input('primeralinea', array(
                                        'label' => array(
                                            'text' => 'Dirección :',
                                            'class' => 'font-weight-bolder col-form-label col-sm-3',
                                            'style' => 'margin-bottom: 10px'
                                        ),
                                        'class' => 'form-control col-sm-9',
                                        'div' => false,
                                        'placeholder' => 'Dirección de la calle'
                                    ));
                                    echo $this->Form->input('segundalinea', array(
                                        'label' => array(
                                            'text' => 'Referencia  :',
                                            'class' => 'font-weight-bolder col-form-label col-sm-3',
                                            'style' => 'margin-bottom: 10px',
                                        ),
                                        'class' => 'form-control col-sm-9',
                                        'div' => false,
                                        'placeholder' => 'Apartamento, suite, unidad, etc. (opcional)'
                                    ));
                                    echo $this->Form->input('ciudad_id', array(
                                        'label' => array(
                                            'text' => 'Ciudad  :',
                                            'class' => 'font-weight-bolder col-form-label col-sm-3',
                                            'style' => 'margin-bottom: 10px',
                                        ),
                                        'class' => 'form-control col-sm-9',
                                        'div' => false,
                                    ));
                                    echo $this->Form->input('codigopostal', array(
                                        'label' => array(
                                            'text' => 'Codigo Postal  :',
                                            'class' => 'font-weight-bolder col-form-label col-sm-3',
                                            'style' => 'margin-bottom: 10px',
                                        ),
                                        'class' => 'form-control col-sm-9',
                                        'div' => false,
                                        'type' => 'text',
                                        'maxlength' => '4'
                                    ));
                                    echo $this->Form->input('telefono', array(
                                        'label' => array(
                                            'text' => 'Telefono  :',
                                            'class' => 'font-weight-bolder col-form-label col-sm-3',
                                            'style' => 'margin-bottom: 10px',
                                        ),
                                        'class' => 'form-control col-sm-9',
                                        'div' => false,
                                        'type' => 'text',
                                        'maxlength' => '9'
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
                                'class' => 'card-footer'
                            )
                        );
                        echo $this->Form->end($options); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>