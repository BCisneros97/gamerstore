<div class="descuentos view">
<h2><?php echo __('Descuento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compraminima'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['compraminima']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentaje'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['porcentaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechainicio'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['fechainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechatermino'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['fechatermino']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Descuento'), array('action' => 'edit', $descuento['Descuento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Descuento'), array('action' => 'delete', $descuento['Descuento']['id']), array(), __('Are you sure you want to delete # %s?', $descuento['Descuento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Categorias'); ?></h3>
	<?php if (!empty($descuento['Categoria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($descuento['Categoria'] as $categoria): ?>
		<tr>
			<td><?php echo $categoria['id']; ?></td>
			<td><?php echo $categoria['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categorias', 'action' => 'view', $categoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categorias', 'action' => 'edit', $categoria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categorias', 'action' => 'delete', $categoria['id']), array(), __('Are you sure you want to delete # %s?', $categoria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($descuento['Producto'])): ?>
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
	<?php foreach ($descuento['Producto'] as $producto): ?>
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
