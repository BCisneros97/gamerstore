<div class="tiporeclamos form">
<?php echo $this->Form->create('Tiporeclamo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tiporeclamo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tiporeclamo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tiporeclamo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tiporeclamos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Reclamos'), array('controller' => 'reclamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reclamo'), array('controller' => 'reclamos', 'action' => 'add')); ?> </li>
	</ul>
</div>
