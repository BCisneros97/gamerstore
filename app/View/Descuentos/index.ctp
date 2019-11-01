<div class="descuentos index">
	<h2><?php echo __('Descuentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('compraminima'); ?></th>
			<th><?php echo $this->Paginator->sort('porcentaje'); ?></th>
			<th><?php echo $this->Paginator->sort('fechainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fechatermino'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($descuentos as $descuento): ?>
	<tr>
		<td><?php echo h($descuento['Descuento']['id']); ?>&nbsp;</td>
		<td><?php echo h($descuento['Descuento']['compraminima']); ?>&nbsp;</td>
		<td><?php echo h($descuento['Descuento']['porcentaje']); ?>&nbsp;</td>
		<td><?php echo h($descuento['Descuento']['fechainicio']); ?>&nbsp;</td>
		<td><?php echo h($descuento['Descuento']['fechatermino']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $descuento['Descuento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $descuento['Descuento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $descuento['Descuento']['id']), array(), __('Are you sure you want to delete # %s?', $descuento['Descuento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Descuento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
