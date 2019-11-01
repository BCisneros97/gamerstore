<div class="direccions view">
<h2><?php echo __('Direccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primeralinea'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['primeralinea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundalinea'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['segundalinea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($direccion['Ciudad']['id'], array('controller' => 'ciudads', 'action' => 'view', $direccion['Ciudad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigopostal'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['codigopostal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($direccion['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $direccion['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Direccion'), array('action' => 'edit', $direccion['Direccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Direccion'), array('action' => 'delete', $direccion['Direccion']['id']), array(), __('Are you sure you want to delete # %s?', $direccion['Direccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Direccions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
