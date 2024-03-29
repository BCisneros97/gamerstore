<div class="permisosUsers index">
	<h2><?php echo __('Permisos Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('permiso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($permisosUsers as $permisosUser): ?>
	<tr>
		<td><?php echo h($permisosUser['PermisosUser']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($permisosUser['Permiso']['id'], array('controller' => 'permisos', 'action' => 'view', $permisosUser['Permiso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($permisosUser['User']['id'], array('controller' => 'users', 'action' => 'view', $permisosUser['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $permisosUser['PermisosUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $permisosUser['PermisosUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $permisosUser['PermisosUser']['id']), array(), __('Are you sure you want to delete # %s?', $permisosUser['PermisosUser']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Permisos User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Permisos'), array('controller' => 'permisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permiso'), array('controller' => 'permisos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
