<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ver usuario</h1>
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
                <div class="card-body">
                    <div class="form-group row">
                        <label for="UserId" class="col-sm-2 col-form-label">Id:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="UserId" value="<?= $user['User']['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserUsername" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="UserUsername" value="<?= $user['User']['username'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserFoto" class="col-sm-2 col-form-label">Foto:</label>
                        <div class="col-sm-10">
                            <img src="data:image/jpg;base64,<?= base64_encode($user['User']['foto']) ?>" width="30%" height="auto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserEmail" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="UserEmail" value="<?= $user['User']['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UserTipo" class="col-sm-2 col-form-label">Tipo:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="UserTipo" value="<?= $user['User']['tipo'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Permisos:</label>
                        <div class="col-sm-10">
                            <ul>
                            <?php foreach ($user['Permiso'] as $permiso) : ?>
                                <li><?= $permiso['descripcion'] ?></li>
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