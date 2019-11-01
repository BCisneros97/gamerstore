<div class="ventas form">
<?php echo $this->Form->create('Venta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Venta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fechacompra');
		echo $this->Form->input('fechaentrega');
		echo $this->Form->input('numerotarjeta');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('Disenio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Venta.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Venta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
	</ul>
</div>
