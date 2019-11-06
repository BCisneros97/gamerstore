<div class="tiporeclamos view">
<h2><?php echo __('Tiporeclamo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tiporeclamo['Tiporeclamo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($tiporeclamo['Tiporeclamo']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tiporeclamo'), array('action' => 'edit', $tiporeclamo['Tiporeclamo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tiporeclamo'), array('action' => 'delete', $tiporeclamo['Tiporeclamo']['id']), array(), __('Are you sure you want to delete # %s?', $tiporeclamo['Tiporeclamo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiporeclamos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiporeclamo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reclamos'), array('controller' => 'reclamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reclamo'), array('controller' => 'reclamos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reclamos'); ?></h3>
	<?php if (!empty($tiporeclamo['Reclamo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Prueba'); ?></th>
		<th><?php echo __('Tiporeclamo Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Solucion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tiporeclamo['Reclamo'] as $reclamo): ?>
		<tr>
			<td><?php echo $reclamo['id']; ?></td>
			<td><?php echo $reclamo['descripcion']; ?></td>
			<td><?php echo $reclamo['prueba']; ?></td>
			<td><?php echo $reclamo['tiporeclamo_id']; ?></td>
			<td><?php echo $reclamo['fecha']; ?></td>
			<td><?php echo $reclamo['solucion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reclamos', 'action' => 'view', $reclamo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reclamos', 'action' => 'edit', $reclamo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reclamos', 'action' => 'delete', $reclamo['id']), array(), __('Are you sure you want to delete # %s?', $reclamo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reclamo'), array('controller' => 'reclamos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
