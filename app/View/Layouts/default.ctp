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

			<?php if (AuthComponent::user('id') != null) : ?>
				<div class="dropdown">
					<p id="menu-user" class="icon-usuario">
						<span id="login" class="splogin"><?php echo AuthComponent::user('username'); ?></span>
					</p>
					<div id="myDropdown" class="dropdown-content">
						<?php echo $this->Html->link(
								'Mi cuenta',
								array('controller' => 'users', 'action' => 'cuenta')
							); ?>
						<?php echo $this->Html->link(
								'Cerrar sesión',
								array('controller' => 'users', 'action' => 'logout')
							); ?>
					</div>
				</div>
			<?php else : ?>
				<?php echo $this->Html->link(
						$this->Html->tag(
							'p',
							$this->Html->tag('span', 'Iniciar sesión', array('id' => 'login')),
							array('class' => 'icon-usuario', 'escape' => false)
						),
						array('controller' => 'users', 'action' => 'login'),
						array('escape' => false)
					);
					?>
			<?php endif; ?>
			
			<?php echo $this->Html->link(
				$this->Html->tag('span', '', array('class' => 'icon-carrito')),
				array('controller' => 'disenios', 'action' => 'carrito'),
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

	<?php //echo $this->element('sql_dump'); ?>

	<?php echo $this->fetch('script'); ?>

	<script>
		document.getElementById('menu-user').addEventListener('click', function() {
			document.getElementById("myDropdown").classList.toggle("show");
		});
		document.getElementById('login').addEventListener('click', function() {
			document.getElementById("myDropdown").classList.toggle("show");
		});

		window.onclick = function(event) {
			if (!event.target.matches('.icon-usuario') && !event.target.matches('.splogin')) {
				var dropdown = document.getElementById("myDropdown");
				if (dropdown.classList.contains('show')) {
					dropdown.classList.remove('show');
				}
			}
		}
	</script>
</body>

</html>