<?php

?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gamer Store</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<?php
	echo $this->Html->meta('icon', 'img/favicon.png', array('type' => 'image/png'));
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->Html->css('fontello.css');
	echo $this->Html->css('estilo_principal.css');
	?>
</head>

<body>
	<header>
		<div class="contenedor">
			<?php echo $this->Html->link(
				$this->Html->image('gamer-store-logo.png', array('alt' => 'Logo Gamer Store')),
				array('controller' => 'pages', 'action' => 'home'),
				array('escape' => false)
			);
			?>
			<div id="busqueda">
				<input type="text" placeholder="Buscar producto">
				<a class="icon-buscar" href="#"></a>
			</div>
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>

			<?php
			if (AuthComponent::user('id') != null) {
				echo $this->Html->link(
					$this->Html->tag(
						'p',
						$this->Html->tag('span', AuthComponent::user('username'), array('id' => 'login')),
						array('class' => 'icon-usuario', 'escape' => false)
					),
					array('controller' => 'users', 'action' => 'logout'),
					array('escape' => false)
				);
			} else {
				echo $this->Html->link(
					$this->Html->tag(
						'p',
						$this->Html->tag('span', 'Iniciar sesión', array('id' => 'login')),
						array('class' => 'icon-usuario', 'escape' => false)
					),
					array('controller' => 'users', 'action' => 'login'),
					array('escape' => false)
				);
			}
			?>

			<?php echo $this->Html->link(
				$this->Html->tag('span', '', array('class' => 'icon-carrito')),
				array('controller' => 'pages', 'action' => 'carrito'),
				array('escape' => false)
			); ?>

			<?php echo $this->element('menu_principal'); ?>

		</div>
	</header>

	<main>
		<?php echo $this->fetch('content'); ?>
	</main>

	<?php echo $this->element('footer'); ?>

	<?php echo $this->element('redes_sociales'); ?>

	<?php echo $this->element('sql_dump'); ?>

	<?php echo $this->fetch('script'); ?>
</body>

</html>