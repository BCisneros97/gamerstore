<div class="disenios index">
	<h2><?php echo __('Disenios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('imagen'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($disenios as $disenio): ?>
	<tr>
		<td><?php echo h($disenio['Disenio']['id']); ?>&nbsp;</td>
		<td><?php echo h($disenio['Disenio']['imagen']); ?>&nbsp;</td>
		<td><?php echo h($disenio['Disenio']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($disenio['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $disenio['Producto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($disenio['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $disenio['Cliente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $disenio['Disenio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $disenio['Disenio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $disenio['Disenio']['id']), array(), __('Are you sure you want to delete # %s?', $disenio['Disenio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Disenio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificacions'), array('controller' => 'calificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacion'), array('controller' => 'calificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
