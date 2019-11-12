<div class="diseniosVentas view">
<h2><?php echo __('Disenios Venta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($diseniosVenta['DiseniosVenta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preciounitario'); ?></dt>
		<dd>
			<?php echo h($diseniosVenta['DiseniosVenta']['preciounitario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($diseniosVenta['DiseniosVenta']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precioenvio'); ?></dt>
		<dd>
			<?php echo h($diseniosVenta['DiseniosVenta']['precioenvio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disenio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diseniosVenta['Disenio']['id'], array('controller' => 'disenios', 'action' => 'view', $diseniosVenta['Disenio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diseniosVenta['Venta']['id'], array('controller' => 'ventas', 'action' => 'view', $diseniosVenta['Venta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reclamo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diseniosVenta['Reclamo']['id'], array('controller' => 'reclamos', 'action' => 'view', $diseniosVenta['Reclamo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disenios Venta'), array('action' => 'edit', $diseniosVenta['DiseniosVenta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disenios Venta'), array('action' => 'delete', $diseniosVenta['DiseniosVenta']['id']), array(), __('Are you sure you want to delete # %s?', $diseniosVenta['DiseniosVenta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios Ventas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenios Venta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reclamos'), array('controller' => 'reclamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reclamo'), array('controller' => 'reclamos', 'action' => 'add')); ?> </li>
	</ul>
</div>
