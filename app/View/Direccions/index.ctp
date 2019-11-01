<div class="direccions index">
	<h2><?php echo __('Direccions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('primeralinea'); ?></th>
			<th><?php echo $this->Paginator->sort('segundalinea'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigopostal'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($direccions as $direccion): ?>
	<tr>
		<td><?php echo h($direccion['Direccion']['id']); ?>&nbsp;</td>
		<td><?php echo h($direccion['Direccion']['primeralinea']); ?>&nbsp;</td>
		<td><?php echo h($direccion['Direccion']['segundalinea']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($direccion['Ciudad']['id'], array('controller' => 'ciudads', 'action' => 'view', $direccion['Ciudad']['id'])); ?>
		</td>
		<td><?php echo h($direccion['Direccion']['codigopostal']); ?>&nbsp;</td>
		<td><?php echo h($direccion['Direccion']['telefono']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($direccion['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $direccion['Cliente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $direccion['Direccion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $direccion['Direccion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $direccion['Direccion']['id']), array(), __('Are you sure you want to delete # %s?', $direccion['Direccion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Direccion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
