<div class="calificacions form">
<?php echo $this->Form->create('Calificacion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Calificacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('calificacion');
		echo $this->Form->input('disenio_id');
		echo $this->Form->input('cliente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Calificacion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Calificacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Calificacions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
