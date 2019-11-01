<div class="categoriasDescuentos form">
<?php echo $this->Form->create('CategoriasDescuento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categorias Descuento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('descuento_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoriasDescuento.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CategoriasDescuento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias Descuentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('controller' => 'descuentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
