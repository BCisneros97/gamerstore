<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registrar usuario</h1>
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
                <?php echo $this->Form->create('User', array('class' => 'form-horizontal', 'type' => 'file')); ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="UserNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('nombre', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('email', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('password', array('div' => false, 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserPassword2" class="col-sm-2 col-form-label">Confirmar Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="UserPassword2" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserFoto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" id="UserFoto" name="foto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserTipo" class="col-sm-2 col-form-label">Tipo</label>
                        <div class="col-sm-10">
                            <select name="data[User][tipo]" class="form-control" id="UserTipo">
                                <option value="Admin">Administrador</option>
                                <option value="Vendedor">Atención al cliente</option>
                                <option value="Repartidor">Repartidor</option>
                                <option value="Cliente">Cliente</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserPermiso" class="col-sm-2 col-form-label">Permisos</label>
                        <div class="col-sm-10">
                            <?php foreach ($permisos as $permiso) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[Permiso][Permiso][]" value="<?= $permiso['Permiso']['id'] ?>" id="permiso<?= $permiso['Permiso']['id'] ?>">
                                    <label class="form-check-label" for="permiso<?= $permiso['Permiso']['id'] ?>">
                                        <?= $permiso['Permiso']['descripcion'] ?>
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