<nav class="menu">
    <?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'home')); ?>
    <?php echo $this->Html->link('Nosotros', array('controller' => 'pages', 'action' => 'nosotros')); ?>
    <?php echo $this->Html->link('Clientes', array('controller' => 'pages', 'action' => 'clientes')); ?>
    <?php echo $this->Html->link('Categorías', array('controller' => 'categorias', 'action' => 'index')); ?>
    <?php echo $this->Html->link('Destacados', array('controller' => 'pages', 'action' => 'destacados')); ?>
    <?php echo $this->Html->link('Ubícanos', array('controller' => 'pages', 'action' => 'ubicanos')); ?>
    <?php echo $this->Html->link('Modelo de negocio', array('controller' => 'pages', 'action' => 'canvas')); ?>
</nav>