<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Cliente</h1>
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
                    <?php echo $this->Form->input('id'); ?>
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
                        <label for="UserUsername" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                            <select name="data[User][user_id]" class="form-control" id="UserUsername">
                                <?php foreach ($users as $user) : ?>
                                    <option value="<?php echo $user['User']['id'] ?>"><?php echo $user['User']['username'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
                <!-- /.card-footer -->
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>