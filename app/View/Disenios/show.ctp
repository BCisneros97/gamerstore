<?php echo $this->Html->css('post_articulo.css', array('inline' => false)); ?>

<section id="detalle-producto" class="contenedor">
    <article class="post-producto">
        <div class="titulo">
            <h3><?php echo $disenio['Disenio']['descripcion'] ?></h3>
            <label class="icon-estrella calificacion"></label>3.8
            <p class="ventas">(<?php echo $disenio['Cliente']['User']['username'] ?>)</p>
        </div>
        <div class="img-wrapper">
            <img src="data:image/jpg;base64,<?php echo base64_encode($disenio['Disenio']['imagen']) ?>" alt="<?php echo $disenio['Producto']['nombre'] ?>">
        </div>
        <h4>Características</h4>
        <ul class="caracteristicas">
            <?php foreach (explode('.', $disenio['Producto']['caracteristica']) as $item) : ?>
                <li><?php echo $item ?></li>
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
        <?php if (AuthComponent::user('id') != $disenio['Cliente']['User']['id']) {
            echo $this->Html->link(
                '<button class="btn-personalizar"><span>Personalizar</span></button>',
                array('controller' => 'disenios', 'action' => 'create', $disenio['Producto']['id']),
                array('escape' => false)
            );
        } ?>
        <form action="<?php echo $this->Html->url(array('action' => 'comprar', $disenio['Disenio']['id'])) ?>" method="post">
            <div class="envio">
                <h3>OPCIONES DE ENVIO</h3>
                <input type="radio" name="data[envio]" value="local" id="local" required>
                <label for="local">
                    <div id="cajita-local">
                        <?php echo $this->Html->image('icono-envio-chimbote.png', array('alt' => 'Envío a Chimbote')); ?>
                        <p>Envío en Chimbote <br><?php echo 'S/. ' . $disenio['Producto']['precioenviolocal'] . '.00' ?></p>
                    </div>
                </label>
                <input type="radio" name="data[envio]" value="provincia" id="provincia" required>
                <label for="provincia">
                    <div id="cajita-provincia">
                        <?php echo $this->Html->image('icono-envio-ciudades.png', array('alt' => 'Envío a otras ciudades')); ?>
                        <p>Envío a otras ciudades <br><?php echo 'S/. ' . $disenio['Producto']['precioenvioprovincia'] . '.00' ?></p>
                    </div>
                </label>
                <input type="radio" name="data[envio]" value="tienda" id="tienda" required>
                <label for="tienda">
                    <div id="cajita-tienda">
                        <?php echo $this->Html->image('icono-envio-tienda.png', array('alt' => 'Recepción en tienda')); ?>
                        <p>Recepción en tienda <br>S/. 0.00</p>
                    </div>
                </label>
            </div>
            <div id="caja-compra">
                <div id="caja-precio">
                    <span class="precio">S/.&nbsp;<?php echo $disenio['Producto']['preciounitario'] ?>.00</span>
                    <span class="igv">Incluye IGV</span>
                </div>
                <div id="caja-cantidad">
                    <span class="cantidad">Cantidad:</span>
                    <input id="input-cantidad" type="number" value="1" min="1" name="data[cantidad]" required>
                </div>
                <button type="submit" class="btn-comprar">
                    <label class="icon-carrito"></label><span>COMPRAR AHORA</span>
                </button>
            </div>
        </form>
    </article>
</section>

<?php echo $this->Html->script(array('jquery-3.2.1.min.js', 'calificacion.js'), array('inline' => false)); ?>