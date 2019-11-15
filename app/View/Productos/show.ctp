<?php echo $this->Html->css('post_articulo.css', array('inline' => false)); ?>

<section id="detalle-producto" class="contenedor">
    <article class="post-producto">
        <div class="titulo">
            <h3><?= $producto['Producto']['nombre'] ?></h3>
            <label class="icon-estrella calificacion"></label>3.8
            <p class="ventas">(78 vendidos)</p>
        </div>
        <div class="img-wrapper">
            <img src="data:image/jpg;base64,<?= base64_encode($producto['Producto']['imagen']) ?>" alt="<?= $producto['Producto']['nombre'] ?>">
        </div>
        <h4>Características</h4>
        <ul class="caracteristicas">
            <?php foreach (explode('.', $producto['Producto']['caracteristica']) as $item) : ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
        <h4>¿Qué te parece el diseño?</h4>
        <div class="calificar">
            <label for="estrella1" class="icon-estrella" id="i-estrella1">
            </label>
            <input type="radio" id="estrella1" name="estrellas">
            <label for="estrella2" class="icon-estrella" id="i-estrella2">
            </label>
            <input type="radio" id="estrella2" name="estrellas">
            <label for="estrella3" class="icon-estrella" id="i-estrella3">
            </label>
            <input type="radio" id="estrella3" name="estrellas">
            <label for="estrella4" class="icon-estrella" id="i-estrella4">
            </label>
            <input type="radio" id="estrella4" name="estrellas">
            <label for="estrella5" class="icon-estrella" id="i-estrella5">
            </label>
            <input type="radio" id="estrella5" name="estrellas">
        </div>
        <?php echo $this->Html->link(
            $this->Html->tag(
                'button',
                '<span>Personalizar</span>'
            ),
            array('controller' => 'disenios', 'action' => 'create', $producto['Producto']['id']),
            array('escape' => false)
        ); ?>
        <div class="envio">
            <h3>OPCIONES DE ENVIO</h3>
            <div>
                <?php echo $this->Html->image('icono-envio-chimbote.png', array('alt' => 'Envío a Chimbote')); ?>
                <p>Envío en Chimbote<br><?php echo $producto['Producto']['preciounitario'] ?></p>
            </div>
            <div>
                <?php echo $this->Html->image('icono-envio-ciudades.png', array('alt' => 'Envío a otras ciudades')); ?>
                <p>Envío a otras ciudades</p>
            </div>
            <div>
                <?php echo $this->Html->image('icono-envio-tienda.png', array('alt' => 'Recepción en tienda')); ?>
                <p>Recepción en tienda</p>
            </div>
        </div>
        <div id="caja-compra">
            <div id="caja-precio">
                <span class="precio">S/.&nbsp;<?= $producto['Producto']['preciounitario'] ?>.00</span>
                <span class="igv">Incluye IGV</span>
            </div>
            <div id="caja-cantidad">
                <span class="cantidad">Cantidad:</span>
                <input id="input-cantidad" type="number" value="1" min="1">
            </div>
            <?php echo $this->Form->postLink(
                $this->Html->tag(
                    'button',
                    '<label class="icon-carrito"></label><span>COMPRAR AHORA</span>',
                    array('class' => "btn-comprar")
                ),
                array('action' => 'comprar', $producto['Producto']['id']),
                array('escape' => false)
            ); ?>
        </div>
    </article>
</section>

<?php echo $this->Html->script(array('jquery-3.2.1.min.js', 'calificacion.js'), array('inline' => false)); ?>