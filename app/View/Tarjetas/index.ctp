<div class="tarjetas index">
	<h2><?php echo __('Tarjetas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('fechavencimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('ccv'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tarjetas as $tarjeta): ?>
	<tr>
		<td><?php echo h($tarjeta['Tarjeta']['id']); ?>&nbsp;</td>
		<td><?php echo h($tarjeta['Tarjeta']['numero']); ?>&nbsp;</td>
		<td><?php echo h($tarjeta['Tarjeta']['fechavencimiento']); ?>&nbsp;</td>
		<td><?php echo h($tarjeta['Tarjeta']['ccv']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tarjeta['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $tarjeta['Cliente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tarjeta['Tarjeta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tarjeta['Tarjeta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tarjeta['Tarjeta']['id']), array(), __('Are you sure you want to delete # %s?', $tarjeta['Tarjeta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
