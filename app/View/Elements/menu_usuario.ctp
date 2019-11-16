<div class="list-group mb-2">
    <?php echo $this->Html->link(
        'Mi cuenta',
        array('controller' => 'users', 'action' => 'cuenta'),
        array('class' => 'list-group-item list-group-item-action list-group-item-warning')
    ) ?>
    <?php echo $this->Html->link(
        'Mis pedidos',
        array('controller' => 'diseniosVentas', 'action' => 'index'),
        array('class' => 'list-group-item list-group-item-action list-group-item-warning')
    ) ?>
    <?php echo $this->Html->link(
        'Direcciones',
        array('controller' => 'direccions', 'action' => 'index'),
        array('class' => 'list-group-item list-group-item-action list-group-item-warning')
    ) ?>
    <?php echo $this->Html->link(
        'Tarjetas',
        array('controller' => 'tarjetas', 'action' => 'index'),
        array('class' => 'list-group-item list-group-item-action list-group-item-warning')
    ) ?>
</div>