<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Clientes</h1>
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
                <?php echo $this->Form->create('Cliente', array('class' => 'form-horizontal')); ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="ClienteTipo" class="col-sm-2 col-form-label">Tipo</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('tipo', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClienteSexo" class="col-sm-2 col-form-label">Sexo</label>
                        <div class="col-sm-10">
                            <?php
                            echo $this->Form->select('sexo',array(
                                    'M'=>'Masculino',
                                    'F'=>'Femenino'
                            ),array(
                                    'class'=>'form-control',
                                    'empty'=>false
                            ));
                            ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClienteUserId" class="col-sm-2 col-form-label">Tipo</label>
                        <div class="col-sm-10">
                            <select name="data[Cliente][user_id]" class="form-control" id="ClienteUserId">
                                <?php  foreach ($users as $user) :?>
                                    <option value="<?php echo $user['User']['id']?>"><?php echo $user['User']['nombre']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
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
</section>