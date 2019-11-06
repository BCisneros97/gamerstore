<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['imagen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caracteristicas'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['caracteristicas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preciounitario'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['preciounitario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precioenviolocal'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['precioenviolocal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precioenvioprovincias'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['precioenvioprovincias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $producto['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proveedor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Proveedor']['id'], array('controller' => 'proveedors', 'action' => 'view', $producto['Proveedor']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('controller' => 'descuentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Disenios'); ?></h3>
	<?php if (!empty($producto['Disenio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Disenio'] as $disenio): ?>
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
	<h3><?php echo __('Related Descuentos'); ?></h3>
	<?php if (!empty($producto['Descuento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Compraminima'); ?></th>
		<th><?php echo __('Porcentaje'); ?></th>
		<th><?php echo __('Fechainicio'); ?></th>
		<th><?php echo __('Fechatermino'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Descuento'] as $descuento): ?>
		<tr>
			<td><?php echo $descuento['id']; ?></td>
			<td><?php echo $descuento['compraminima']; ?></td>
			<td><?php echo $descuento['porcentaje']; ?></td>
			<td><?php echo $descuento['fechainicio']; ?></td>
			<td><?php echo $descuento['fechatermino']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'descuentos', 'action' => 'view', $descuento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'descuentos', 'action' => 'edit', $descuento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'descuentos', 'action' => 'delete', $descuento['id']), array(), __('Are you sure you want to delete # %s?', $descuento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
