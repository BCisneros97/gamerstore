<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Editar descuento</h1>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title"></h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<?php echo $this->Form->create('Descuento', array(
					'url' => array('controller' => 'categorias_descuentos', 'action' => 'edit'),
					'class' => 'form-horizontal'
				)); ?>
				<div class="card-body">
					<?php echo $this->Form->input('id'); ?>
					<div class="form-group row">
						<label for="DescuentoCompraminima" class="col-sm-2 col-form-label">Compra mínima</label>
						<div class="col-sm-10">
							<?php echo $this->Form->input(
								'Descuento.compraminima',
								array(
									'div' => false,
									'label' => false,
									'class' => 'form-control',
									'min' => '1'
								)
							); ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="DescuentoPorcentaje" class="col-sm-2 col-form-label">Porcentaje</label>
						<div class="col-sm-10">
							<?php echo $this->Form->input(
								'Descuento.porcentaje',
								array(
									'div' => false,
									'label' => false,
									'class' => 'form-control',
									'min' => '0.01',
									'step' => '0.01',
									'max' => '1'
								)
							); ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="DescuentoFechainicio" class="col-sm-2 col-form-label">Fecha de inicio</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" value="<?= $this->request->data['Descuento']['fechainicio'] ?>" id="DescuentoFechainicio" name="data[Descuento][fechainicio]" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="DescuentoFechatermino" class="col-sm-2 col-form-label">Fecha de termino</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" value="<?= $this->request->data['Descuento']['fechatermino'] ?>" id="DescuentoFechatermino" name="data[Descuento][fechatermino]" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="Categorias" class="col-sm-2 col-form-label">Categorías</label>
						<div class="col-sm-10">
							<?php foreach ($categorias as $categoria) : ?>
								<?php $id = $categoria['Categoria']['id'] ?>
								<?php $categorias_descuento = array_column($this->request->data['Categoria'], 'id'); ?>

								<div class="form-check">
									<input class="form-check-input" type="checkbox" <?= in_array($id, $categorias_descuento) ? 'checked' : '' ?> name="data[Categoria][Categoria][]" value="<?= $id ?>" id="categoria<?= $id ?>">
									<label class="form-check-label" for="categoria<?= $id ?>">
										<?= $categoria['Categoria']['nombre'] ?>
									</label>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-info">Guardar</button>
				</div>
				<!-- /.card-footer -->
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</section>