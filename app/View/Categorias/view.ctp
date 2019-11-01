<div class="categorias view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), array(), __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('controller' => 'descuentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($categoria['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th><?php echo __('Caracteristicas'); ?></th>
		<th><?php echo __('Preciounitario'); ?></th>
		<th><?php echo __('Precioenviolocal'); ?></th>
		<th><?php echo __('Precioenvioprovincias'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Proveedor Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['nombre']; ?></td>
			<td><?php echo $producto['imagen']; ?></td>
			<td><?php echo $producto['caracteristicas']; ?></td>
			<td><?php echo $producto['preciounitario']; ?></td>
			<td><?php echo $producto['precioenviolocal']; ?></td>
			<td><?php echo $producto['precioenvioprovincias']; ?></td>
			<td><?php echo $producto['categoria_id']; ?></td>
			<td><?php echo $producto['proveedor_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), array(), __('Are you sure you want to delete # %s?', $producto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Descuentos'); ?></h3>
	<?php if (!empty($categoria['Descuento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Compraminima'); ?></th>
		<th><?php echo __('Porcentaje'); ?></th>
		<th><?php echo __('Fechainicio'); ?></th>
		<th><?php echo __('Fechatermino'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Descuento'] as $descuento): ?>
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
