<?php echo $this->element('banner'); ?>

<section id="bienvenida" class="contenedor">
	<h2>Bienvenido a Gamer Store!!</h2>
	<p>Un gamer es aquel que juega con gran dedicación e interés a videojuegos y tiene un conocimiento extenso
		sobre estos. Si eres un gamer, en esta comunidad podrás compartir los diseños de tus videojuegos
		favoritos y
		adquirir accesorios personalizados.
	</p>
</section>

<section id="destacados">
	<div class="contenedor">
		<h3>Los más vendidos</h3>

		<article class="producto">
			<div class="img-wrapper">
				<?php echo $this->Html->image('mouse-3.jpg', array('alt' => 'Mouse Microsoft')); ?>
			</div>
			<a href="producto">
				<h4>Microsoft Mouse Wireless...</h4>
			</a>
			<p class="precio">S/. 50.00</p>
			<label class="icon-estrella"></label>3.8
			<p class="ventas">78 vendidos</p>
		</article>
		<article class="producto">
			<div class="img-wrapper">
				<?php echo $this->Html->image('p-1.png', array('alt' => 'Joystick')); ?>
			</div>
			<a href="producto">
				<h4>Joystick</h4>
			</a>
			<p class="precio">S/. 50.00</p>
			<label class="icon-estrella"></label>4.8
			<p class="ventas">50 vendidos</p>
		</article>


		<article class="producto">
			<div class="img-wrapper">
				<?php echo $this->Html->image('p-2.jpg', array('alt' => 'Mouse inalámbrico')); ?>
			</div>
			<a href="producto">
				<h4>Mouse inalámbrico</h4>
			</a>
			<p class="precio">S/. 50.00</p>
			<label class="icon-estrella"></label>4.3
			<p class="ventas">62 vendidos</p>
		</article>
		<article class="producto">
			<div class="img-wrapper">
				<?php echo $this->Html->image('p-3.png', array('alt' => 'Teclado mecánico')); ?>
			</div>
			<a href="producto">
				<h4>Teclado mecánico</h4>
			</a>
			<p class="precio">S/. 50.00</p>
			<label class="icon-estrella"></label>3.8
			<p class="ventas">78 vendidos</p>
		</article>
	</div>
</section>