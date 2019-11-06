<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ventas</h1>
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
                    
                    <div class="form-group row">
                        <label for="VentaId" class="col-sm-2 col-form-label">Id:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="VentaId" value="<?= $venta['Venta']['id'] ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="VentaFechaCompra" class="col-sm-2 col-form-label">Fecha Compra:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="VentaFechaCompra" value="<?= $venta['Venta']['fechacompra'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="VentaFechaEntrega" class="col-sm-2 col-form-label">Fecha Entrega:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="VentaFechaEntrega" value="<?= $venta['Venta']['fechaentrega'] ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="VentaNumeroTarjeta" class="col-sm-2 col-form-label">Numero de Tarjeta:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="VentaNumeroTarjeta" value="<?= $venta['Venta']['numerotarjeta'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="VentaClienteId" class="col-sm-2 col-form-label">Cliente:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="VentaClienteId" value="<?= $venta['Venta']['cliente_id'] ?>">
                        </div>
                    </div>



                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
    </div>
</section>