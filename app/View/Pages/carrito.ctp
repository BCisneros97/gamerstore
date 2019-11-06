<?php echo $this->Html->css('carrito', array('inline' => false)); ?>

<section id="carrito" class="contenedor">
    <h2>Carrito de compras</h2>
    <div>
        <div class="opciones">
            <input type="checkbox" id="seleccionar-todo">
            <span>Seleccionar todo</span>
            <label class="icon-eliminar"></label>
        </div>
        <article class="item-compra">
            <span class="seleccionar">
                <input type="checkbox">
            </span>
            <?php echo $this->Html->image('mouse-3.jpg', array('alt' => 'Mouse Halo')); ?>
            <div class="detalle">
                <h4>Microsoft Mouse Wireless Mobile 3500 Halo Limited Edition: The Master Chief Inalámbrico</h4>
                <p class="precio">S/.&nbsp;30.00</p>
                <p class="envio">Envío: S/.&nbsp;10.00</p>
                <div class="cantidad">
                    <button>-</button>
                    <input type="number" min="1" value="1">
                    <button>+</button>
                </div>
            </div>
        </article>
        <article class="item-compra">
            <span class="seleccionar">
                <input type="checkbox">
            </span>
            <?php echo $this->Html->image('p-4.jpg', array('alt' => 'Joystick Fornite')); ?>
            <div class="detalle">
                <h4><?= CakeSession::read('Config.time') ?></h4>
                <p class="precio">S/.&nbsp;25.00</p>
                <p class="envio">Envío: S/.&nbsp;8.00</p>
                <div class="cantidad">
                    <button>-</button>
                    <input type="number" min="1" value="1">
                    <button>+</button>
                </div>
            </div>
        </article>
        <div class="resumen">
            <span class="total">Total:</span>
            <span class="monto">S/.&nbsp;73.00</span>
            <button class="btn-pagar">Pagar</button>
        </div>
    </div>
</section>