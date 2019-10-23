<?php echo $this->Html->css('nosotros_responsive', array('inline' => false)); ?>
<?php echo $this->Html->css('estilo_responsive', array('inline' => false)); ?>

<section id="Nosotros" class="contenedor">
    <h2>Nosotros</h2>
    <div class="caja-1">
        <div>
            <h3>¿Quienes Somos?</h3>
            <p>"En Gamer Store somos tan gamer como tú, por eso sabemos lo que necesitas para jugar a otro nivel. Por si no lo sabias somos una empresa dedicada a la venta de articulos Gamer con unaamplia variedad de diseños propuestos por nuestra comunidad. </p>

            <p>Contamos con artículos de calidad y precios accesibles a todo el mundo. ¿Qué esperas para formar parte de esta gran comunidad?".</p>
        </div>

        <div>
            <?php echo $this->Html->image('banner.jpg', array('alt' => 'banner')); ?>

        </div>
    </div>

    <div class="caja-1">
        <div>
            <h3>Vision</h3>
            <p>"Ser una empresa de prestigio a nivel nacional con el mejor servicio a clientes, con los juegos y artículos más nuevos y actualizados y principalmente con la mejor comodidad y seguridad del mundo.".</p>
        </div>
        <div>
            <?php echo $this->Html->image('banner2.jpg', array('alt' => 'banner2')); ?>
        </div>
    </div>

    <div class="caja-1">
        <div>
            <h3>Mision</h3>
            <p>"Satisfacer las necesidades de las personas interesadas en los videojuegos y articulos de novedad, prestandoles el mejor servicio por parte de todo el personal de la empresa, y manteniendo siempre actualizado nuestro catálogo de juegos y articulos para las diferentes plataformas.".</p>
        </div>

        <div>
            <?php echo $this->Html->image('banner3.jpg', array('alt' => 'banner3')); ?>
        </div>
    </div>

</section>