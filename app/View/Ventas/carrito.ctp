<?php echo $this->Html->css('carrito', array('inline' => false)); ?>

<section id="carrito" class="contenedor">
    <h2>Carrito de compras</h2>
    <div>
        <div class="opciones">
            <input type="checkbox" id="seleccionar-todo">
            <span>Seleccionar todo</span>
            <label class="icon-eliminar"></label>
        </div>
        <?php foreach ($productos as $producto) : ?>
            <article class="item-compra">
                <span class="seleccionar">
                    <input type="checkbox">
                </span>
                <img src="data:image/jpg;base64,<?= base64_encode($producto['Producto']['imagen']) ?>">
                <div class="detalle">
                    <h4><?= $producto['Producto']['nombre'] ?></h4>
                    <p class="precio">S/.&nbsp;<?= $producto['Producto']['preciounitario'] ?>.00</p>
                    <p class="envio">Envío: S/.&nbsp;<?= $producto['Producto']['precioenviolocal'] ?>.00</p>
                    <div class="cantidad">
                        <button>-</button>
                        <input type="number" min="1" value="1">
                        <button>+</button>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
        <div class="resumen">
            <span class="total">Total:</span>
            <span class="monto">S/.&nbsp;73.00</span>
            <button class="btn-pagar">Pagar</button>
        </div>
    </div>
</section>