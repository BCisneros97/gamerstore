<div class="categoriasDescuentos index">
	<h2><?php echo __('Categorias Descuentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descuento_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categoriasDescuentos as $categoriasDescuento): ?>
	<tr>
		<td><?php echo h($categoriasDescuento['CategoriasDescuento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($categoriasDescuento['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $categoriasDescuento['Categoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($categoriasDescuento['Descuento']['id'], array('controller' => 'descuentos', 'action' => 'view', $categoriasDescuento['Descuento']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoriasDescuento['CategoriasDescuento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoriasDescuento['CategoriasDescuento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoriasDescuento['CategoriasDescuento']['id']), array(), __('Are you sure you want to delete # %s?', $categoriasDescuento['CategoriasDescuento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Categorias Descuento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('controller' => 'descuentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
