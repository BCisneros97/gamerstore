<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Registrar descuento</h1>
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
				<?php echo $this->Form->create('CategoriasDescuento', array('class' => 'form-horizontal')); ?>
				<div class="card-body">
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
							<input type="date" class="form-control" id="DescuentoFechainicio" name="data[Descuento][fechainicio]" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="DescuentoFechatermino" class="col-sm-2 col-form-label">Fecha de termino</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" id="DescuentoFechatermino" name="data[Descuento][fechatermino]" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="Categorias" class="col-sm-2 col-form-label">Categorías</label>
						<div class="col-sm-10">
							<?php foreach ($categorias as $categoria) : ?>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="data[Categoria][Categoria][]" value="<?= $categoria['Categoria']['id'] ?>" id="categoria<?= $categoria['Categoria']['id'] ?>">
									<label class="form-check-label" for="categoria<?= $categoria['Categoria']['id'] ?>">
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