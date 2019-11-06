<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Venta</h1>
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
                <?php echo $this->Form->create('Venta', array('class' => 'form-horizontal')); ?>
                <div class="card-body">
                    <?php echo $this->Form->input('id'); ?>
                    
                    <div class="form-group row">
                        <label for="VentaFechaCompra" class="col-sm-2 col-form-label">Fecha compra</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="VentaFechaCompra" name="data[Venta][fechacompra]" required>
                        </div>
                    </div>

                    <!-- -->

                    <div class="form-group row">
                        <label for="VentaFechaEntrega" class="col-sm-2 col-form-label">Fecha Entrega</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="VentaFechaEntrega" name="data[Venta][fechaentrega]" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="VentaNumeroTarjeta" class="col-sm-2 col-form-label">Numero Tarjeta</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('numerotarjeta', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="VentaClienteId" class="col-sm-2 col-form-label">Cliente</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('cliente_id', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
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