<div class="diseniosVentas index">
	<h2><?php echo __('Disenios Ventas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('preciounitario'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('precioenvio'); ?></th>
			<th><?php echo $this->Paginator->sort('disenio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('venta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reclamo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($diseniosVentas as $diseniosVenta): ?>
	<tr>
		<td><?php echo h($diseniosVenta['DiseniosVenta']['id']); ?>&nbsp;</td>
		<td><?php echo h($diseniosVenta['DiseniosVenta']['preciounitario']); ?>&nbsp;</td>
		<td><?php echo h($diseniosVenta['DiseniosVenta']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($diseniosVenta['DiseniosVenta']['precioenvio']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($diseniosVenta['Disenio']['id'], array('controller' => 'disenios', 'action' => 'view', $diseniosVenta['Disenio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($diseniosVenta['Venta']['id'], array('controller' => 'ventas', 'action' => 'view', $diseniosVenta['Venta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($diseniosVenta['Reclamo']['id'], array('controller' => 'reclamos', 'action' => 'view', $diseniosVenta['Reclamo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $diseniosVenta['DiseniosVenta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $diseniosVenta['DiseniosVenta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diseniosVenta['DiseniosVenta']['id']), array(), __('Are you sure you want to delete # %s?', $diseniosVenta['DiseniosVenta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Disenios Venta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reclamos'), array('controller' => 'reclamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reclamo'), array('controller' => 'reclamos', 'action' => 'add')); ?> </li>
	</ul>
</div>
