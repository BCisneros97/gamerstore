<div class="tarjetas view">
<h2><?php echo __('Tarjeta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tarjeta['Tarjeta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($tarjeta['Tarjeta']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechavencimiento'); ?></dt>
		<dd>
			<?php echo h($tarjeta['Tarjeta']['fechavencimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ccv'); ?></dt>
		<dd>
			<?php echo h($tarjeta['Tarjeta']['ccv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tarjeta['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $tarjeta['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tarjeta'), array('action' => 'edit', $tarjeta['Tarjeta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tarjeta'), array('action' => 'delete', $tarjeta['Tarjeta']['id']), array(), __('Are you sure you want to delete # %s?', $tarjeta['Tarjeta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarjetas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
