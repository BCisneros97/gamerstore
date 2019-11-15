<div class="list-group mb-2">
    <?php echo $this->Html->link(
        'Mi cuenta',
        array('controller' => 'users', 'action' => 'cuenta'),
        array('class' => 'list-group-item list-group-item-action list-group-item-warning')
    ) ?>
    <?php echo $this->Html->link(
        'Mis pedidos',
        array('controller' => 'users', 'action' => 'cuenta'),
        array('class' => 'list-group-item list-group-item-action list-group-item-warning')
    ) ?>
    <?php echo $this->Html->link(
        'Direcciones',
        array('controller' => 'direccions'),
        array('class' => 'list-group-item list-group-item-action list-group-item-warning')
    ) ?>
    <?php echo $this->Html->link(
        'Tarjetas',
        array('controller' => 'tarjetas'),
        array('class' => 'list-group-item list-group-item-action list-group-item-warning')
    ) ?>
</div>