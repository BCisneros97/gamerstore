<?php
echo $this->Html->css('/plugins/toastr/toastr.min.css', array('inline' => false));
echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css', array('inline' => false));
echo $this->Html->script('/plugins/jquery/jquery.min.js', array('inline' => false));
echo $this->Html->script('/plugins/bootstrap/js/bootstrap4.min.js', array('inline' => false));
?>

<section id="NuevoReclamo" class="container" style="padding-top:120px">
	<div class="row justify-content-center">
		<div class="col-sm-12 col-10">
			<?php echo $this->Form->create('Reclamo', array('class' => 'form-horizontal', 'type' => 'file')); ?>
			<h2>Enviar reclamo</h2>
			<input type="hidden" name="data[DiseniosVenta][id]" value="<?= $disenioventa_id ?>">
			<div class="form-group row">
				<label for="ReclamoTipo" class="col-sm-2 col-form-label">Motivo</label>
				<div class="col-sm-5">
					<select name="data[Reclamo][tiporeclamo_id]" class="form-control" id="ReclamoTipo">
						<?php foreach ($tiporeclamos as $tipo) : ?>
							<option value="<?= $tipo['Tiporeclamo']['id'] ?>"><?= $tipo['Tiporeclamo']['descripcion'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="ReclamoDescripcion">Cuentanos. ¿Cuál es el problema?</label>
				<?php echo $this->Form->input('descripcion', array('div' => false, 'label' => false, 'class' => 'form-control', 'rows' => '4')); ?>
			</div>
			<div class="form-group">
				<label for="ReclamoPrueba">Adjunta una foto como prueba</label>
				<input type="file" class="form-control-file" id="ReclamoPrueba" name="prueba">
			</div>
			<div class="row justify-content-center">
				<button type="submit" class="btn btn-success">Enviar</button>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</section>