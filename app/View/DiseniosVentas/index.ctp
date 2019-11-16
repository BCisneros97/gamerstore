<?php
echo $this->Html->css('/plugins/toastr/toastr.min.css', array('inline' => false));
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));
?>

<section class="container" style="padding-top:120px">
	<div class="row">
		<div class="col-sm-3">
			<?php echo $this->element('menu_usuario'); ?>
		</div>
		<div class="col-sm-9">
			<h3>Mis pedidos</h3>
			<hr>
			<?php if (empty($diseniosVentas)) : ?>
				<div class="row justify-content-center">
					<p>Aun no tiene pedidos</p>
				</div>
			<?php else : ?>
				<table id="example2" class="table table-hover table-responsive">
					<thead>
						<tr>
							<th>Pedido</th>
							<th>Fecha</th>
							<th>Estado</th>
							<th>Total</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($diseniosVentas as $venta) : ?>
							<tr>
								<td>
									<div class="row">
										<div class="col-3 m-0">
											<img width="100%" src="data:image/jpg;base64,<?= base64_encode($venta['Disenio']['imagen']) ?>" alt="<?= $venta['Disenio']['descripcion'] ?>">
										</div>
										<div class="col-9">
											<?php echo $this->Html->link(
														'<span>' . $venta['Disenio']['descripcion'] . '</span>',
														array('controller' => 'disenios', 'action' => 'show', $venta['Disenio']['id']),
														array('escape' => false)
													); ?>
											<br>
											<span><?php echo 'S/. ' . $venta['DiseniosVenta']['preciounitario'] . '.00 x ' . $venta['DiseniosVenta']['cantidad'] ?></span>
										</div>
									</div>
								</td>
								<td><?php echo h($venta['Venta']['fechacompra']); ?></td>
								<td><?php echo h($venta['DiseniosVenta']['estado']); ?></td>
								<td>
									<p class="text-danger">
										<?php echo 'S/. ' . ($venta['DiseniosVenta']['preciounitario'] * $venta['DiseniosVenta']['cantidad'] + $venta['DiseniosVenta']['precioenvio']) . '.00' ?>
									</p>
								</td>
								<td>
									<?php if ($venta['DiseniosVenta']['reclamo_id'] == null) : ?>
										<?php echo $this->Html->link(
														'<button type="button" class="btn btn-secondary btn-sm">Reclamo</button>',
														array('controller' => 'reclamos', 'action' => 'add', $venta['DiseniosVenta']['id']),
														array('escape' => false)
													); ?>
									<?php else : ?>
										<p class="text-secondary">
											<?php echo 'Reclamo ' . $venta['Reclamo']['estado']; ?>
										</p>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; ?>
		</div>
	</div>
</section>