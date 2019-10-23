<?php echo $this->Html->css('categoria', array('inline' => false));
echo $this->element('categoria') ?>
<div class="productos">
    <section id="destacados">
        <div class="contenedor">
            <h3>Teclados</h3>

            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('t-1.jpg', array('alt' => 't-1')); ?>
                </div>
                <a href="producto">
                    <h4>Teclado</h4>
                </a>
                <p class="User">Francisco1997</p>

                <label class="icon-estrella"></label>4.8
                <p class="ventas">50 vendidos</p>
            </article>


            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('t-2.jpg', array('alt' => 't-2')); ?>
                </div>
                <a href="producto">
                    <h4>Teclado </h4>
                </a>
                <p class="User">Benny97</p>
                <label class="icon-estrella"></label>4.3
                <p class="ventas">62 vendidos</p>
            </article>


            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('t-3.jpg', array('alt' => 't-3')); ?>
                </div>
                <a href="producto">
                    <h4>Teclado mecánico</h4>
                </a>
                <p class="User">Ruben97</p>

                <label class="icon-estrella"></label>3.8
                <p class="ventas">78 vendidos</p>
            </article>


            <!--  -->
            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('t-4.jpg', array('alt' => 't-4')); ?>
                </div>
                <a href="producto">
                    <h4>Teclado League of Leguends</h4>
                </a>
                <p class="User">Diego98</p>

                <label class="icon-estrella"></label>3.7
                <p class="ventas">70 vendidos</p>
            </article>


            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('t-5.jpg', array('alt' => 't-5')); ?>
                </div>
                <a href="producto">
                    <h4>Stickers para Teclado</h4>
                </a>
                <p class="User">Castañeda98</p>

                <label class="icon-estrella"></label>3.9
                <p class="ventas">79 vendidos</p>
            </article>


            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('p-6.jpg', array('alt' => 'p-6')); ?>
                </div>
                <a href="producto">
                    <h4>Teclado Inhalambrico</h4>
                </a>
                <p class="User">Medina97</p>

                <label class="icon-estrella"></label>4.0
                <p class="ventas">80 vendidos</p>
            </article>


            <!--  -->
            <article class="producto">
                <div class="img-wrapper">
                    <?php echo  $this->Html->image('t-6.jpg', array('alt' => 't-6')); ?>
                </div>
                <a href="producto">
                    <h4>Stickers para Teclado</h4>
                </a>
                <p class="User">DeivyRA</p>

                <label class="icon-estrella"></label>3.6
                <p class="ventas">71 vendidos</p>
            </article>
        </div>
    </section>
</div>
