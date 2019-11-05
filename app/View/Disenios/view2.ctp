<div class="disenios view">
<h2><?php echo __('Disenio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($disenio['Disenio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen'); ?></dt>
		<dd>
			<?php echo h($disenio['Disenio']['imagen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($disenio['Disenio']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disenio['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $disenio['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disenio['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $disenio['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disenio'), array('action' => 'edit', $disenio['Disenio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disenio'), array('action' => 'delete', $disenio['Disenio']['id']), array(), __('Are you sure you want to delete # %s?', $disenio['Disenio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Calificacions'); ?></h3>
	<?php if (!empty($disenio['Calificacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Calificacion'); ?></th>
		<th><?php echo __('Disenio Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($disenio['Calificacion'] as $calificacion): ?>
		<tr>
			<td><?php echo $calificacion['id']; ?></td>
			<td><?php echo $calificacion['calificacion']; ?></td>
			<td><?php echo $calificacion['disenio_id']; ?></td>
			<td><?php echo $calificacion['cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'calificacions', 'action' => 'view', $calificacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'calificacions', 'action' => 'edit', $calificacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'calificacions', 'action' => 'delete', $calificacion['id']), array(), __('Are you sure you want to delete # %s?', $calificacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Calificacion'), array('controller' => 'calificacions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ventas'); ?></h3>
	<?php if (!empty($disenio['Venta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fechacompra'); ?></th>
		<th><?php echo __('Fechaentrega'); ?></th>
		<th><?php echo __('Numerotarjeta'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($disenio['Venta'] as $venta): ?>
		<tr>
			<td><?php echo $venta['id']; ?></td>
			<td><?php echo $venta['fechacompra']; ?></td>
			<td><?php echo $venta['fechaentrega']; ?></td>
			<td><?php echo $venta['numerotarjeta']; ?></td>
			<td><?php echo $venta['cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ventas', 'action' => 'view', $venta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ventas', 'action' => 'edit', $venta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ventas', 'action' => 'delete', $venta['id']), array(), __('Are you sure you want to delete # %s?', $venta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
