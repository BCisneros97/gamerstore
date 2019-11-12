<div class="permisosUsers form">
<?php echo $this->Form->create('PermisosUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Permisos User'); ?></legend>
	<?php
		echo $this->Form->input('permiso_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Permisos Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Permisos'), array('controller' => 'permisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permiso'), array('controller' => 'permisos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
