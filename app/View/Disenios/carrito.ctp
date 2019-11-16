<?php
echo $this->Html->css('/plugins/toastr/toastr.min.css', array('inline' => false));
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->css('carrito.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));
?>
<section id="carrito" class="container">
    <?php echo $this->Form->create('Venta', array('controller' => 'ventas', 'action' => 'add')); ?>
    <div class="row">
        <div class="col-sm-12 col-10">
            <h2>Carrito de compras</h2>
            <?php if ($disenios != null) : ?>
                <?php $total = 0;
                    $index = 0 ?>
                <input type="hidden" name="data[Venta][cliente_id]" value="<?php echo $cliente['Cliente']['id'] ?>">
                <?php foreach ($disenios as $id => $disenio) : ?>
                    <div class="row mb-4">
                        <div class="col-3 col-sm-2">
                            <img class="img-item" src="data:image/jpg;base64,<?php echo base64_encode($disenio['disenio']['Disenio']['imagen']) ?>">
                        </div>
                        <div class="col">
                            <div class="detalle">
                                <input type="hidden" name="data[DiseniosVenta][<?php echo $index; ?>][disenio_id]" value="<?php echo $disenio['disenio']['Disenio']['id'] ?>">
                                <?php $total += $disenio['disenio']['Producto']['preciounitario'] * $disenio['cantidad'] ?>

                                <h4><?php echo $disenio['disenio']['Producto']['nombre'] ?></h4>

                                <p class="precio">S/.&nbsp;<?php echo $disenio['disenio']['Producto']['preciounitario'] ?>.00</p>
                                <input type="hidden" class="preciounitario" name="data[DiseniosVenta][<?php echo $index; ?>][preciounitario]" value="<?php echo $disenio['disenio']['Producto']['preciounitario'] ?>">

                                <?php if ($disenio['envio'] == 'local') : ?>
                                    <?php $total += $disenio['disenio']['Producto']['precioenviolocal'] ?>
                                    <p class="envio">Envío: S/.&nbsp;<?php echo $disenio['disenio']['Producto']['precioenviolocal'] ?>.00</p>
                                    <input type="hidden" class="p_envio" name="data[DiseniosVenta][<?php echo $index; ?>][precioenvio]" value="<?php echo $disenio['disenio']['Producto']['precioenviolocal'] ?>">
                                <?php elseif ($disenio['envio'] == 'provincia') : ?>
                                    <?php $total += $disenio['disenio']['Producto']['precioenvioprovincia'] ?>
                                    <p class="envio">Envío: S/.&nbsp;<?php echo $disenio['disenio']['Producto']['precioenvioprovincia'] ?>.00</p>
                                    <input type="hidden" class="p_envio" name="data[DiseniosVenta][<?php echo $index; ?>][precioenvio]" value="<?php echo $disenio['disenio']['Producto']['precioenvioprovincia'] ?>">
                                <?php else : ?>
                                    <p class="envio">Envío: S/.&nbsp;0.00</p>
                                    <input type="hidden" class="p_envio" name="data[DiseniosVenta][<?php echo $index; ?>][precioenvio]" value="0">
                                <?php endif; ?>

                                <div class="cantidad">
                                    <button type="button" class="menos">-</button>
                                    <input type="text" class="p_cantidad" name="data[DiseniosVenta][<?php echo $index; ?>][cantidad]" value="<?php echo $disenio['cantidad'] ?>">
                                    <button type="button" class="mas">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 eliminar">
                            <?php echo $this->Html->link(
                                        '<label class="icon-eliminar"></label>',
                                        array('controller' => 'disenios', 'action' => 'removeCarrito', $id),
                                        array('escape' => false),
                                        __('¿Está seguro de que quiere quitar el producto del carrito?')
                                    ); ?>
                        </div>
                    </div>
                    <?php $index++; ?>
                <?php endforeach; ?>
                <div class="row">
                    <div class="col-12 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Dirección de envío</h6>
                                <?php if (empty($cliente['Direccion'])) : ?>
                                    <p class="card-text">No tiene direcciones de envío.</p>
                                    <input type="hidden" name="direcciones" required>
                                <?php else : ?>
                                    <?php foreach ($cliente['Direccion'] as $direccion) : ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="data[Venta][direccion_id]" id="direccion<?php echo $direccion['id'] ?>" value="<?php echo $direccion['id'] ?>" required checked>
                                            <label class="form-check-label" for="direccion<?php echo $direccion['id'] ?>">
                                                <div class="item-direccion">
                                                    <p class="card-text"><?php echo $direccion['primeralinea'] ?></p>
                                                    <p class="card-text"><?php echo $direccion['segundalinea'] ?></p>
                                                    <p class="card-text"><?php echo $direccion['Ciudad']['nombre'] . ', ' . $direccion['Ciudad']['Region']['nombre'] ?></p>
                                                </div>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <?php echo $this->Html->link(
                                        'Agregar dirección',
                                        array('controller' => 'direccions', 'action' => 'add'),
                                        array('class' => 'card-link')
                                    ) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Tarjetas</h6>
                                <?php if (empty($cliente['Tarjeta'])) : ?>
                                    <p class="card-text">No tiene tarjetas.</p>
                                    <input type="hidden" name="tarjetas" required>
                                <?php else : ?>
                                    <?php foreach ($cliente['Tarjeta'] as $tarjeta) : ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="data[Venta][numerotarjeta]" id="tarjeta<?php echo $tarjeta['id'] ?>" value="<?php echo $tarjeta['numero'] ?>" required checked>
                                            <label class="form-check-label" for="tarjeta<?php echo $tarjeta['id'] ?>">
                                                <div class="item-direccion">
                                                    <p class="card-text"><?php echo '**** **** ****' . substr($tarjeta['numero'], -4, 4) ?></p>
                                                </div>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <?php echo $this->Html->link(
                                        'Agregar tarjeta',
                                        array('controller' => 'tarjetas', 'action' => 'add'),
                                        array('class' => 'card-link')
                                    ) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col resumen">
                        <span class="total">Total:</span>
                        <span class="monto">S/.&nbsp;<?php echo $total ?>.00</span>
                        <button type="submit" class="btn-pagar" <?php echo (empty($cliente['Tarjeta'])||empty($cliente['Direccion']))? 'disabled' : ''; ?>>Pagar</button>
                    </div>
                </div>
            <?php else : ?>
                <div class="row justify-content-center">
                    <p>No hay productos en su carrito de compras.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</section>

<?php echo $this->Html->script('btn_cantidad.js', array('inline' => false)); ?>