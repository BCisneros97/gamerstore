<div class="ventas view">
<h2><?php echo __('Venta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechacompra'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['fechacompra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechaentrega'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['fechaentrega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerotarjeta'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['numerotarjeta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venta['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $venta['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Venta'), array('action' => 'edit', $venta['Venta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Venta'), array('action' => 'delete', $venta['Venta']['id']), array(), __('Are you sure you want to delete # %s?', $venta['Venta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Disenios'); ?></h3>
	<?php if (!empty($venta['Disenio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($venta['Disenio'] as $disenio): ?>
		<tr>
			<td><?php echo $disenio['id']; ?></td>
			<td><?php echo $disenio['imagen']; ?></td>
			<td><?php echo $disenio['descripcion']; ?></td>
			<td><?php echo $disenio['producto_id']; ?></td>
			<td><?php echo $disenio['cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disenios', 'action' => 'view', $disenio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disenios', 'action' => 'edit', $disenio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disenios', 'action' => 'delete', $disenio['id']), array(), __('Are you sure you want to delete # %s?', $disenio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
