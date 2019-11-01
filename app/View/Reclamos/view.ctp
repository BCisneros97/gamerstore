<div class="reclamos view">
<h2><?php echo __('Reclamo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reclamo['Reclamo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($reclamo['Reclamo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prueba'); ?></dt>
		<dd>
			<?php echo h($reclamo['Reclamo']['prueba']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiporeclamo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reclamo['Tiporeclamo']['id'], array('controller' => 'tiporeclamos', 'action' => 'view', $reclamo['Tiporeclamo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($reclamo['Reclamo']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solucion'); ?></dt>
		<dd>
			<?php echo h($reclamo['Reclamo']['solucion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reclamo'), array('action' => 'edit', $reclamo['Reclamo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reclamo'), array('action' => 'delete', $reclamo['Reclamo']['id']), array(), __('Are you sure you want to delete # %s?', $reclamo['Reclamo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reclamos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reclamo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiporeclamos'), array('controller' => 'tiporeclamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiporeclamo'), array('controller' => 'tiporeclamos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios Ventas'), array('controller' => 'disenios_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenios Venta'), array('controller' => 'disenios_ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Disenios Ventas'); ?></h3>
	<?php if (!empty($reclamo['DiseniosVenta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Preciounitario'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Precioenvio'); ?></th>
		<th><?php echo __('Disenio Id'); ?></th>
		<th><?php echo __('Venta Id'); ?></th>
		<th><?php echo __('Reclamo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reclamo['DiseniosVenta'] as $diseniosVenta): ?>
		<tr>
			<td><?php echo $diseniosVenta['id']; ?></td>
			<td><?php echo $diseniosVenta['preciounitario']; ?></td>
			<td><?php echo $diseniosVenta['cantidad']; ?></td>
			<td><?php echo $diseniosVenta['precioenvio']; ?></td>
			<td><?php echo $diseniosVenta['disenio_id']; ?></td>
			<td><?php echo $diseniosVenta['venta_id']; ?></td>
			<td><?php echo $diseniosVenta['reclamo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disenios_ventas', 'action' => 'view', $diseniosVenta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disenios_ventas', 'action' => 'edit', $diseniosVenta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disenios_ventas', 'action' => 'delete', $diseniosVenta['id']), array(), __('Are you sure you want to delete # %s?', $diseniosVenta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disenios Venta'), array('controller' => 'disenios_ventas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
