<div class="direccions form">
<?php echo $this->Form->create('Direccion'); ?>
	<fieldset>
		<legend><?php echo __('Add Direccion'); ?></legend>
	<?php
		echo $this->Form->input('primeralinea');
		echo $this->Form->input('segundalinea');
		echo $this->Form->input('ciudad_id');
		echo $this->Form->input('codigopostal');
		echo $this->Form->input('telefono');
		echo $this->Form->input('cliente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Direccions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
