<div class="permisosUsers view">
<h2><?php echo __('Permisos User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($permisosUser['PermisosUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permiso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($permisosUser['Permiso']['id'], array('controller' => 'permisos', 'action' => 'view', $permisosUser['Permiso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($permisosUser['User']['id'], array('controller' => 'users', 'action' => 'view', $permisosUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permisos User'), array('action' => 'edit', $permisosUser['PermisosUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Permisos User'), array('action' => 'delete', $permisosUser['PermisosUser']['id']), array(), __('Are you sure you want to delete # %s?', $permisosUser['PermisosUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Permisos Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permisos User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permisos'), array('controller' => 'permisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permiso'), array('controller' => 'permisos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
