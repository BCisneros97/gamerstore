<div class="calificacions view">
<h2><?php echo __('Calificacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($calificacion['Calificacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calificacion'); ?></dt>
		<dd>
			<?php echo h($calificacion['Calificacion']['calificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disenio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calificacion['Disenio']['id'], array('controller' => 'disenios', 'action' => 'view', $calificacion['Disenio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calificacion['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $calificacion['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Calificacion'), array('action' => 'edit', $calificacion['Calificacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Calificacion'), array('action' => 'delete', $calificacion['Calificacion']['id']), array(), __('Are you sure you want to delete # %s?', $calificacion['Calificacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disenios'), array('controller' => 'disenios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disenio'), array('controller' => 'disenios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
