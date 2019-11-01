<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categorías</h1>
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
                        <label for="CategoriaId" class="col-sm-2 col-form-label">Id:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="CategoriaId" value="<?= $categoria['Categoria']['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CategoriaNombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="CategoriaNombre" value="<?= $categoria['Categoria']['nombre'] ?>">
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