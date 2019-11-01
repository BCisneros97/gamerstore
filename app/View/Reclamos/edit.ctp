<div class="reclamos form">
<?php echo $this->Form->create('Reclamo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reclamo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('prueba');
		echo $this->Form->input('tiporeclamo_id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('solucion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reclamo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Reclamo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reclamos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiporeclamos'), array('controller' => 'tiporeclamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiporeclamo'), array('controller' => 'tiporeclamos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios Ventas'), array('controller' => 'disenios_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenios Venta'), array('controller' => 'disenios_ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
