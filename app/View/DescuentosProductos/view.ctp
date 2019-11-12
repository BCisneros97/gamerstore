<div class="descuentosProductos view">
<h2><?php echo __('Descuentos Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($descuentosProducto['DescuentosProducto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descuento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($descuentosProducto['Descuento']['id'], array('controller' => 'descuentos', 'action' => 'view', $descuentosProducto['Descuento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($descuentosProducto['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $descuentosProducto['Producto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Descuentos Producto'), array('action' => 'edit', $descuentosProducto['DescuentosProducto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Descuentos Producto'), array('action' => 'delete', $descuentosProducto['DescuentosProducto']['id']), array(), __('Are you sure you want to delete # %s?', $descuentosProducto['DescuentosProducto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuentos Producto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('controller' => 'descuentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
