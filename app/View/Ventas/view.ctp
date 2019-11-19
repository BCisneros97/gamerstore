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
                        <label for="VentaClienteId" class="col-sm-2 col-form-label">Cliente:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="VentaClienteId" value="<?= $venta['Cliente']['User']['username'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="VentaDireccion" class="col-sm-2 col-form-label">Dirección de envío:</label>
                        <div class="col-sm-10">
                            <textarea readonly class="form-control-plaintext" id="VentaDireccion"><?php
                                                                                                    echo $venta['Direccion']['primeralinea'] . ' ' . $venta['Direccion']['segundalinea'] . ' ' .
                                                                                                        $venta['Direccion']['Ciudad']['nombre'] . ', ' . $venta['Direccion']['Ciudad']['Region']['nombre'] . ' - ' .
                                                                                                        $venta['Direccion']['codigopostal'] . ' ' . $venta['Direccion']['telefono']
                                                                                                    ?></textarea>
                        </div>
                    </div>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                                <th>Precio Envio</th>
                                <th>Subtotal</th>
                                <th>Estado</th>
                                <th>Reclamo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($venta['DiseniosVenta'] as $disenio) : ?>
                                <tr>
                                    <td><?php echo $disenio['id'] ?></td>
                                    <td><?php echo $disenio['Disenio']['descripcion'] ?></td>
                                    <td><?php echo $disenio['cantidad'] ?></td>
                                    <td><?php echo $disenio['preciounitario'] . '.00' ?></td>
                                    <td><?php echo $disenio['precioenvio'] . '.00' ?></td>
                                    <td><?php echo ($disenio['cantidad'] * $disenio['preciounitario'] + $disenio['precioenvio']) . '.00' ?></td>
                                    <td><?php echo $disenio['estado'] ?></td>
                                    <td>
                                        <?php if ($disenio['reclamo_id']) {
                                                if ($disenio['Reclamo']['estado'] == 'Pendiente') {
                                                    echo $disenio['Reclamo']['estado'] . ' ' .
                                                        $this->Html->link(
                                                            '(Ver)',
                                                            array('controller' => 'reclamos', 'action' => 'edit', $disenio['reclamo_id'])
                                                        );
                                                } else {
                                                    echo $disenio['Reclamo']['estado'] . ' ' .
                                                        $this->Html->link(
                                                            '(Ver)',
                                                            array('controller' => 'reclamos', 'action' => 'show', $disenio['reclamo_id'])
                                                        );
                                                }
                                            }
                                            ?>
                                    </td>
                                    <td>
                                        <?php if ($disenio['estado'] == 'Pendiente') {
                                                echo $this->Form->postLink(
                                                    $this->Html->tag(
                                                        'button',
                                                        'Finalizar',
                                                        array('class' => "btn btn-info")
                                                    ),
                                                    array('controller' => 'diseniosVentas', 'action' => 'finalizar', $disenio['id']),
                                                    array('escape' => false),
                                                    __('¿Está seguro de que quiere finalizar el item "%s"?', $disenio['id'])
                                                );
                                            } ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
                <!-- /.card-footer -->
            </div>
        </div>
    </div>
</section>