<?php echo $this->Html->css('categoria', array('inline' => false));
echo $this->element('categoria') ?>
<div class="productos">
    <section id="destacados">
        <div class="contenedor">
            <h3>Por Juegos</h3>

            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('t-4.jpg', array('alt' => 'imagen')); ?>

                </div>
                <a href="producto">
                    <h4>Stickers para Teclado</h4>
                </a>
                <p class="User">Francisco1997</p>

                <label class="icon-estrella"></label>4.8
                <p class="ventas">50 vendidos</p>
            </article>


            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('mouse-3.jpg', array('alt' => 'imagen')); ?>

                </div>
                <a href="producto">
                    <h4>Mouse Halo </h4>
                </a>
                <p class="User">Benny97</p>
                <label class="icon-estrella"></label>4.3
                <p class="ventas">62 vendidos</p>
            </article>


            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('mp-4.jpg', array('alt' => 'imagen')); ?>
                </div>
                <a href="producto">
                    <h4>Mouse Pad </h4>
                </a>

                <p class="User">Ruben97</p>

                <label class="icon-estrella"></label>3.8
                <p class="ventas">78 vendidos</p>
            </article>

        </div>
    </section>
</div>