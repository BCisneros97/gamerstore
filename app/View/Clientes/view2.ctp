<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['User']['id'], array('controller' => 'users', 'action' => 'view', $cliente['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificacions'), array('controller' => 'calificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacion'), array('controller' => 'calificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direccions'), array('controller' => 'direccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direccion'), array('controller' => 'direccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarjetas'), array('controller' => 'tarjetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Calificacions'); ?></h3>
	<?php if (!empty($cliente['Calificacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Calificacion'); ?></th>
		<th><?php echo __('Disenio Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Calificacion'] as $calificacion): ?>
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
	<h3><?php echo __('Related Direccions'); ?></h3>
	<?php if (!empty($cliente['Direccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Primeralinea'); ?></th>
		<th><?php echo __('Segundalinea'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th><?php echo __('Codigopostal'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Direccion'] as $direccion): ?>
		<tr>
			<td><?php echo $direccion['id']; ?></td>
			<td><?php echo $direccion['primeralinea']; ?></td>
			<td><?php echo $direccion['segundalinea']; ?></td>
			<td><?php echo $direccion['ciudad_id']; ?></td>
			<td><?php echo $direccion['codigopostal']; ?></td>
			<td><?php echo $direccion['telefono']; ?></td>
			<td><?php echo $direccion['cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'direccions', 'action' => 'view', $direccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'direccions', 'action' => 'edit', $direccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'direccions', 'action' => 'delete', $direccion['id']), array(), __('Are you sure you want to delete # %s?', $direccion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Direccion'), array('controller' => 'direccions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Disenios'); ?></h3>
	<?php if (!empty($cliente['Disenio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Disenio'] as $disenio): ?>
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
<div class="related">
	<h3><?php echo __('Related Tarjetas'); ?></h3>
	<?php if (!empty($cliente['Tarjeta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Fechavencimiento'); ?></th>
		<th><?php echo __('Ccv'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Tarjeta'] as $tarjeta): ?>
		<tr>
			<td><?php echo $tarjeta['id']; ?></td>
			<td><?php echo $tarjeta['numero']; ?></td>
			<td><?php echo $tarjeta['fechavencimiento']; ?></td>
			<td><?php echo $tarjeta['ccv']; ?></td>
			<td><?php echo $tarjeta['cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tarjetas', 'action' => 'view', $tarjeta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tarjetas', 'action' => 'edit', $tarjeta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tarjetas', 'action' => 'delete', $tarjeta['id']), array(), __('Are you sure you want to delete # %s?', $tarjeta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ventas'); ?></h3>
	<?php if (!empty($cliente['Venta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fechacompra'); ?></th>
		<th><?php echo __('Fechaentrega'); ?></th>
		<th><?php echo __('Numerotarjeta'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Venta'] as $venta): ?>
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
