<?php
echo $this->Html->css('/plugins/toastr/toastr.min.css', array('inline' => false));
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));
?>

<section class="container" style="padding-top:120px;min-height:500px">
	<div class="row">
		<div class="col-sm-3">
			<?php echo $this->element('menu_usuario'); ?>
		</div>
		<div class="col-sm-9">
			<h3>Mis pedidos</h3>
			<hr>
			<?php if (empty($cliente['Venta'])) : ?>
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
						<?php foreach ($cliente['Venta'] as $venta) : ?>
							<?php foreach ($venta['DiseniosVenta'] as $disenio) : ?>
								<tr>
									<td>
										<div class="row">
											<div class="col-3 m-0">
												<img width="100%" src="data:image/jpg;base64,<?= base64_encode($disenio['Disenio']['imagen']) ?>" alt="<?= $disenio['Disenio']['descripcion'] ?>">
											</div>
											<div class="col-9">
												<?php echo $this->Html->link(
																'<span>' . $disenio['Disenio']['descripcion'] . '</span>',
																array('controller' => 'disenios', 'action' => 'show', $disenio['Disenio']['id']),
																array('escape' => false)
															); ?>
												<br>
												<span><?php echo 'S/. ' . $disenio['preciounitario'] . '.00 x ' . $disenio['cantidad'] ?></span>
											</div>
										</div>
									</td>
									<td><?php echo h($venta['fechacompra']); ?></td>
									<td><?php echo h($disenio['estado']); ?></td>
									<td>
										<p class="text-danger">
											<?php echo 'S/. ' . ($disenio['preciounitario'] * $disenio['cantidad'] + $disenio['precioenvio']) . '.00' ?>
										</p>
									</td>
									<td>
										<?php if ($disenio['reclamo_id'] == null) : ?>
											<?php echo $this->Html->link(
																'<button type="button" class="btn btn-secondary btn-sm">Reclamar</button>',
																array('controller' => 'reclamos', 'action' => 'add', $disenio['id']),
																array('escape' => false)
															); ?>
										<?php else : ?>
											<p class="text-secondary">
												<?php echo 'Reclamo ' . $disenio['Reclamo']['estado'].' '.
												$this->Html->link(
													'(Ver)',
													array('controller' => 'reclamos', 'action' => 'show', $disenio['Reclamo']['id'])
												); ?>
											</p>
										<?php endif; ?>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; ?>
		</div>
	</div>
</section>