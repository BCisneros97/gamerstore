<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ver Cliente</h1>
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
                <div class="card-body">
                    <?php
                    echo $this->Form->input('id',array(
                        'class'=>'form-control-plaintext col-sm-10',
                        'div'=>array( 'class'=>'form-group row'),
                        'readonly',
                        'label'=>array(
                            'text'=>'ID:',
                            'class'=>'col-sm-2 col-form-label'
                        ),
                        'value'=>$cliente['Cliente']['id'],

                    ));
                    echo $this->Form->input('tipo',array(
                            'class'=>'form-control-plaintext col-sm-10',
                            'div'=>array( 'class'=>'form-group row'),
                            'readonly',
                            'label'=>array(
                                    'text'=>'Tipo:',
                                    'class'=>'col-sm-2 col-form-label'
                            ),
                            'value'=>$cliente['Cliente']['tipo'],

                    ));
                    echo $this->Form->input('sexo',array(
                        'class'=>'form-control-plaintext col-sm-10',
                        'div'=>array( 'class'=>'form-group row'),
                        'readonly',
                        'label'=>array(
                            'text'=>'Sexo:',
                            'class'=>'col-sm-2 col-form-label'
                        ),
                        'value'=>$cliente['Cliente']['sexo'],

                    ));
                    echo $this->Form->input('username',array(
                        'class'=>'form-control-plaintext col-sm-10',
                        'div'=>array( 'class'=>'form-group row'),
                        'readonly',
                        'label'=>array(
                            'text'=>'Nombre:',
                            'class'=>'col-sm-2 col-form-label'
                        ),
                        'value'=>$cliente['User']['username'],

                    ));

                    ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
                <!-- /.card-footer -->
            </div>
        </div>
    </div>
</section>