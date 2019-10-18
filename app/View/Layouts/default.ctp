<?php

?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gamer Store</title>
	<link rel="icon" href="img/favicon.png" type="image/png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<?php
	echo $this->Html->css('fontello.css');
	echo $this->Html->css('estilo_principal.css');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>

<body>
	<header>
		<div class="contenedor">
			<?php echo $this->Html->link(
				$this->Html->image('gamer-store-logo.png', array('alt' => 'Logo Gamer Store')),
				'home', array('target' => '_blank', 'escape' => false)
			);
			?>
			<div id="busqueda">
				<input type="text" placeholder="Buscar producto">
				<a class="icon-buscar" href="#"></a>
			</div>
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>

			<a href="login">
				<p class="icon-usuario">
					<span id="login">Iniciar sesión</span>
				</p>
			</a>
			<a href="carrito">
				<span class="icon-carrito"></span>
			</a>

			<?php echo $this->element('menu_principal'); ?>

		</div>
	</header>

	<main>
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	</main>

	<?php echo $this->element('footer'); ?>

	<?php echo $this->element('redes_sociales'); ?>

	<?php echo $this->element('sql_dump'); ?>
</body>

</html>