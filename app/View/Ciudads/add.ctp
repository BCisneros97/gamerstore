<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ciudades</h1>
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
                <?php echo $this->Form->create('Ciudad', array('class' => 'form-horizontal')); ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="CiudadNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('nombre', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="RegionNombre" class="col-sm-2 col-form-label">Región</label>
                        <div class="col-sm-10">
                            <?php
                            /*foreach ($regions as $region) :
                                $regiones[]=$region['Region']['nombre'];
                                $regionID[]=$region['Region']['id'];
                                $valores[]=array($region['Region']['id'] =>$region['Region']['nombre']);
                            endforeach;

                            echo $this->Form->input('region_id',array(
                                    'class'=>'form-control',
                                    'options'=> $regiones,
                                    'values' =>$regionID,
                                    'label' =>false
                            ));
                            echo $this->Form->select('region_id',$valores,array(
                                    'class'=>'form-control'

                            ));
                            */?>
                            <select name="data[Ciudad][region_id]" class="form-control" id="CiudadRegionId">
                                <?php  foreach ($regions as $region) :?>
                                <option value="<?php echo $region['Region']['id']?>"><?php echo $region['Region']['nombre']?></option>
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