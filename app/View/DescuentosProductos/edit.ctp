<div class="descuentosProductos form">
<?php echo $this->Form->create('DescuentosProducto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Descuentos Producto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descuento_id');
		echo $this->Form->input('producto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DescuentosProducto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DescuentosProducto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Descuentos Productos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('controller' => 'descuentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
