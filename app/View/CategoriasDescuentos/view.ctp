<div class="categoriasDescuentos view">
<h2><?php echo __('Categorias Descuento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriasDescuento['CategoriasDescuento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoriasDescuento['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $categoriasDescuento['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descuento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoriasDescuento['Descuento']['id'], array('controller' => 'descuentos', 'action' => 'view', $categoriasDescuento['Descuento']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categorias Descuento'), array('action' => 'edit', $categoriasDescuento['CategoriasDescuento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categorias Descuento'), array('action' => 'delete', $categoriasDescuento['CategoriasDescuento']['id']), array(), __('Are you sure you want to delete # %s?', $categoriasDescuento['CategoriasDescuento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias Descuentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorias Descuento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('controller' => 'descuentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
