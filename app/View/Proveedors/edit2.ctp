<div class="proveedors form">
<?php echo $this->Form->create('Proveedor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ruc');
		echo $this->Form->input('razonsocial');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('direccion');
		echo $this->Form->input('ciudad_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proveedor.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Proveedor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
