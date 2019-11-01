<div class="disenios form">
<?php echo $this->Form->create('Disenio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Disenio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('imagen');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('producto_id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('Venta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Disenio.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Disenio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificacions'), array('controller' => 'calificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacion'), array('controller' => 'calificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
