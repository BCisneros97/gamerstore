<div class="tarjetas form">
<?php echo $this->Form->create('Tarjeta'); ?>
	<fieldset>
		<legend><?php echo __('Add Tarjeta'); ?></legend>
	<?php
		echo $this->Form->input('numero');
		echo $this->Form->input('fechavencimiento');
		echo $this->Form->input('ccv');
		echo $this->Form->input('cliente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tarjetas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>