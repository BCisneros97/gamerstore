<div class="reclamos index">
	<h2><?php echo __('Reclamos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('prueba'); ?></th>
			<th><?php echo $this->Paginator->sort('tiporeclamo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('solucion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($reclamos as $reclamo): ?>
	<tr>
		<td><?php echo h($reclamo['Reclamo']['id']); ?>&nbsp;</td>
		<td><?php echo h($reclamo['Reclamo']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($reclamo['Reclamo']['prueba']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reclamo['Tiporeclamo']['id'], array('controller' => 'tiporeclamos', 'action' => 'view', $reclamo['Tiporeclamo']['id'])); ?>
		</td>
		<td><?php echo h($reclamo['Reclamo']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($reclamo['Reclamo']['solucion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reclamo['Reclamo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reclamo['Reclamo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reclamo['Reclamo']['id']), array(), __('Are you sure you want to delete # %s?', $reclamo['Reclamo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reclamo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiporeclamos'), array('controller' => 'tiporeclamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiporeclamo'), array('controller' => 'tiporeclamos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios Ventas'), array('controller' => 'disenios_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenios Venta'), array('controller' => 'disenios_ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
