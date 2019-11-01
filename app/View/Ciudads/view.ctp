<div class="ciudads view">
<h2><?php echo __('Ciudad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ciudad['Ciudad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($ciudad['Ciudad']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ciudad['Region']['id'], array('controller' => 'regions', 'action' => 'view', $ciudad['Region']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ciudad'), array('action' => 'edit', $ciudad['Ciudad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ciudad'), array('action' => 'delete', $ciudad['Ciudad']['id']), array(), __('Are you sure you want to delete # %s?', $ciudad['Ciudad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direccions'), array('controller' => 'direccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direccion'), array('controller' => 'direccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Direccions'); ?></h3>
	<?php if (!empty($ciudad['Direccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Primeralinea'); ?></th>
		<th><?php echo __('Segundalinea'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th><?php echo __('Codigopostal'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ciudad['Direccion'] as $direccion): ?>
		<tr>
			<td><?php echo $direccion['id']; ?></td>
			<td><?php echo $direccion['primeralinea']; ?></td>
			<td><?php echo $direccion['segundalinea']; ?></td>
			<td><?php echo $direccion['ciudad_id']; ?></td>
			<td><?php echo $direccion['codigopostal']; ?></td>
			<td><?php echo $direccion['telefono']; ?></td>
			<td><?php echo $direccion['cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'direccions', 'action' => 'view', $direccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'direccions', 'action' => 'edit', $direccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'direccions', 'action' => 'delete', $direccion['id']), array(), __('Are you sure you want to delete # %s?', $direccion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Direccion'), array('controller' => 'direccions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Proveedors'); ?></h3>
	<?php if (!empty($ciudad['Proveedor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ruc'); ?></th>
		<th><?php echo __('Razonsocial'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ciudad['Proveedor'] as $proveedor): ?>
		<tr>
			<td><?php echo $proveedor['id']; ?></td>
			<td><?php echo $proveedor['ruc']; ?></td>
			<td><?php echo $proveedor['razonsocial']; ?></td>
			<td><?php echo $proveedor['telefono']; ?></td>
			<td><?php echo $proveedor['email']; ?></td>
			<td><?php echo $proveedor['direccion']; ?></td>
			<td><?php echo $proveedor['ciudad_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proveedors', 'action' => 'view', $proveedor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proveedors', 'action' => 'edit', $proveedor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proveedors', 'action' => 'delete', $proveedor['id']), array(), __('Are you sure you want to delete # %s?', $proveedor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
