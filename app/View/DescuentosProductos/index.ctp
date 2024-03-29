<div class="descuentosProductos index">
	<h2><?php echo __('Descuentos Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descuento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($descuentosProductos as $descuentosProducto): ?>
	<tr>
		<td><?php echo h($descuentosProducto['DescuentosProducto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($descuentosProducto['Descuento']['id'], array('controller' => 'descuentos', 'action' => 'view', $descuentosProducto['Descuento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($descuentosProducto['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $descuentosProducto['Producto']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $descuentosProducto['DescuentosProducto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $descuentosProducto['DescuentosProducto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $descuentosProducto['DescuentosProducto']['id']), array(), __('Are you sure you want to delete # %s?', $descuentosProducto['DescuentosProducto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Descuentos Producto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('controller' => 'descuentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
