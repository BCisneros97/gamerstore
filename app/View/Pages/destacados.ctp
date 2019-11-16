<?php echo $this->Html->css('destacados_responsive', array('inline' => false)); ?>
<?php echo $this->Html->css('estilo_responsive', array('inline' => false)); ?>

<section id="destacados">
    <div class="contenedor">
        <h3>Destacados</h3>

        <article class="producto">
            <div class="img-wrapper">
                <?php echo $this->Html->image('p-1.png', array('alt' => 'p-1')); ?>

            </div>
            <?php echo $this->Html->link(
				'<h4>Joystick</h4>',
				array('controller' => 'disenios', 'action' => 'show', 1),
				array('escape' => false)
			); ?>
            <p class="User">Francisco1997</p>
            <label class="icon-estrella"></label>4.8
            <p class="ventas">50 vendidos</p>
        </article>


        <article class="producto">
            <div class="img-wrapper">
                <?php echo $this->Html->image('p-2.jpg', array('alt' => 'p-2')); ?>
            </div>
            <?php echo $this->Html->link(
				'<h4>Mouse inalambrico</h4>',
				array('controller' => 'disenios', 'action' => 'show', 5),
				array('escape' => false)
			); ?>
            <p class="User">Benny97</p>
            <label class="icon-estrella"></label>4.3
            <p class="ventas">62 vendidos</p>
        </article>


        <article class="producto">
            <div class="img-wrapper">
                <?php echo $this->Html->image('p-3.png', array('alt' => 'p-3')); ?>

            </div>
            <?php echo $this->Html->link(
				'<h4>Teclado mecanico</h4>',
				array('controller' => 'disenios', 'action' => 'show', 7),
				array('escape' => false)
			); ?>
            <p class="User">Ruben97</p>

            <label class="icon-estrella"></label>3.8
            <p class="ventas">78 vendidos</p>
        </article>


        <!--  -->
        <article class="producto">
            <div class="img-wrapper">
                <?php echo $this->Html->image('p-4.jpg', array('alt' => 'p-4')); ?>

            </div>
            <?php echo $this->Html->link(
				'<h4>Joystick Fortnite</h4>',
				array('controller' => 'disenios', 'action' => 'show', 2),
				array('escape' => false)
			); ?>
            <p class="User">Diego98</p>

            <label class="icon-estrella"></label>3.7
            <p class="ventas">70 vendidos</p>
        </article>


        <article class="producto">
            <div class="img-wrapper">
                <?php echo $this->Html->image('p-5.jpg', array('alt' => 'p-5')); ?>

            </div>
            <?php echo $this->Html->link(
				'<h4>Mouse Cougar Revenge</h4>',
				array('controller' => 'disenios', 'action' => 'show', 6),
				array('escape' => false)
			); ?>
            <p class="User">Castañeda98</p>

            <label class="icon-estrella"></label>3.9
            <p class="ventas">79 vendidos</p>
        </article>


        <article class="producto">
            <div class="img-wrapper">
                <?php echo $this->Html->image('p-6.jpg', array('alt' => 'p-6')); ?>
            </div>
            <?php echo $this->Html->link(
				'<h4>Teclado inalambrico</h4>',
				array('controller' => 'disenios', 'action' => 'show', 3),
				array('escape' => false)
			); ?>
            <p class="User">Medina97</p>

            <label class="icon-estrella"></label>4.0
            <p class="ventas">80 vendidos</p>
        </article>


        <!--  -->
        <article class="producto">
            <div class="img-wrapper">
                <?php echo $this->Html->image('p-7.jpg', array('alt' => 'p-7')); ?>
            </div>
            <?php echo $this->Html->link(
				'<h4>Case gamer</h4>',
				array('controller' => 'disenios', 'action' => 'show', 8),
				array('escape' => false)
			); ?>
            <p class="User">DeivyRA</p>

            <label class="icon-estrella"></label>3.6
            <p class="ventas">71 vendidos</p>
        </article>


        <article class="producto">
            <div class="img-wrapper">
                <?php echo $this->Html->image('p-8.jpg', array('alt' => 'p-8')); ?>
            </div>
            <?php echo $this->Html->link(
				'<h4>Audifonos Logitech H390</h4>',
				array('controller' => 'disenios', 'action' => 'show', 4),
				array('escape' => false)
			); ?>
            <p class="User">ValverdeS8</p>

            <label class="icon-estrella"></label>3.9
            <p class="ventas">79 vendidos</p>
        </article>


        <article class="producto">
            <div class="img-wrapper">
                <?php echo $this->Html->image('p-9.jpg', array('alt' => 'p-9')); ?>
            </div>
            <?php echo $this->Html->link(
				'<h4>Mouse pad gamer</h4>',
				array('controller' => 'disenios', 'action' => 'show', 9),
				array('escape' => false)
			); ?>
            <p class="User">LaraJH</p>

            <label class="icon-estrella"></label>3.8
            <p class="ventas">75 vendidos</p>
        </article>
    </div>
</section>