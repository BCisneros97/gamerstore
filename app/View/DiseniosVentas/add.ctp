<div class="diseniosVentas form">
<?php echo $this->Form->create('DiseniosVenta'); ?>
	<fieldset>
		<legend><?php echo __('Add Disenios Venta'); ?></legend>
	<?php
		echo $this->Form->input('preciounitario');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('precioenvio');
		echo $this->Form->input('disenio_id');
		echo $this->Form->input('venta_id');
		echo $this->Form->input('reclamo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Disenios Ventas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reclamos'), array('controller' => 'reclamos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reclamo'), array('controller' => 'reclamos', 'action' => 'add')); ?> </li>
	</ul>
</div>
