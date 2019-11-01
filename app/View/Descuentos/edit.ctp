<div class="descuentos form">
<?php echo $this->Form->create('Descuento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Descuento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('compraminima');
		echo $this->Form->input('porcentaje');
		echo $this->Form->input('fechainicio');
		echo $this->Form->input('fechatermino');
		echo $this->Form->input('Categoria');
		echo $this->Form->input('Producto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Descuento.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Descuento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
