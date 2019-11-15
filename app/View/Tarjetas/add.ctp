<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

 <?php
  echo $this->Html->meta('icon', 'img/favicon.png', array('type' => 'image/png'));
  echo $this->Html->css('/plugins/fontawesome-free/css/all.min.css');
  echo $this->Html->css('/plugins/datatables-bs4/css/dataTables.bootstrap4.css');
  echo $this->Html->css('/plugins/toastr/toastr.min.css');
  echo $this->Html->css('/dist/css/adminlte.min.css');
  echo $this->fetch('meta');
  echo $this->fetch('css');
  ?>

<?php echo $this->Html->css('credit_card', array('inline' => false)); ?>
<?php echo $this->Html->css('estilo_responsive', array('inline' => false)); ?>





<div class="contenedorT">

<div class="row">
  <aside class="col-sm-6">
    <h3> Agregar Forma de Pago </h3>
    
    <section class="content">
      
   
    <article class="card">
      <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php echo $this->Form->create('Tarjeta', array('class' => 'form-horizontal', 'type'=>'file')); ?>
                <div class="card-body">

                	
                    <div class="form-group row">
                        
                        <label for="nombretarj" class="col-sm-2 col-form-label">Nombre de la tarjeta</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('nombretarj', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NumTarj" class="col-sm-2 col-form-label">N° de Tarjeta</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('numero', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>

                            <div class="input-group-append">
                            	<span class="input-group-text text-muted">
                                	<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
                                	<i class="fab fa-cc-mastercard"></i> 
                            	</span>
                        	</div>
                        </div>

                        
                    </div>

                    <div class="form-group row">
                        <label for="fechavencimiento" class="col-sm-2 col-form-label">Fecha Venc.</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('fechavencimiento', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Tarjetaccv" class="col-sm-2 col-form-label">CCV</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('ccv', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
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
    </article> <!-- card.// -->
    </section>
  </aside> <!-- col.// -->
</div> <!-- row.// -->
</div> 
<!--container end.//-->
