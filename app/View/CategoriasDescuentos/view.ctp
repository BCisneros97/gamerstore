<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Ver descuento</h1>
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
				<div class="card-body">
					<div class="form-group row">
						<label for="DescuentoId" class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="DescuentoId" value="<?= $descuento['Descuento']['id'] ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="DescuentoCompraminima" class="col-sm-2 col-form-label">Compra mínima</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="DescuentoCompraminima" value="<?= $descuento['Descuento']['compraminima'] ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="DescuentoPorcentaje" class="col-sm-2 col-form-label">Porcentaje</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="DescuentoPorcentaje" value="<?= $descuento['Descuento']['porcentaje'] ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="DescuentoFechainicio" class="col-sm-2 col-form-label">Fecha de inicio</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="DescuentoFechainicio" value="<?= $descuento['Descuento']['fechainicio'] ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="DescuentoFechatermino" class="col-sm-2 col-form-label">Fecha de termino</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="DescuentoFechatermino" value="<?= $descuento['Descuento']['fechatermino'] ?>">
						</div>
					</div>

					<div class="form-group row">
						<label for="Categorias" class="col-sm-2 col-form-label">Categorías</label>
						<div class="col-sm-10">
							<ul>
								<?php foreach ($descuento['Categoria'] as $categoria) : ?>
									<div class="form-check">
										<li>
											<?= $categoria['nombre'] ?>
										</li>
									</div>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
				</div>
				<!-- /.card-footer -->
			</div>
		</div>
	</div>
</section>