<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('sexo');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cliente.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificacions'), array('controller' => 'calificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacion'), array('controller' => 'calificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direccions'), array('controller' => 'direccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direccion'), array('controller' => 'direccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarjetas'), array('controller' => 'tarjetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
