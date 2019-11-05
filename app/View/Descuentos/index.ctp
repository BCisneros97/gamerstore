<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Descuentos</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <?php echo $this->Html->link(
                            $this->Html->tag('button', 'Nuevo (Categoria)', array('class' => 'btn btn-info')),
                            array('controller' => 'categorias_descuentos', 'action' => 'add'),
                            array('escape' => false)
                        ); ?>
                        <?php echo $this->Html->link(
                            $this->Html->tag('button', 'Nuevo (Producto)', array('class' => 'btn btn-info')),
                            array('controller' => 'descuentos_productos', 'action' => 'add'),
                            array('escape' => false)
                        ); ?>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Inicio</th>
                                <th>Término</th>
                                <th>Tipo</th>
                                <th>Compra mínima</th>
                                <th>% descuento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($descuentos as $descuento) : ?>
                                <tr>
                                    <td><?php echo h($descuento['Descuento']['id']); ?></td>
                                    <td><?php echo h($descuento['Descuento']['fechainicio']); ?></td>
                                    <td><?php echo h($descuento['Descuento']['fechatermino']); ?></td>
                                    <td>
                                        <?php
                                            if (!empty($descuento['Categoria'])) {
                                                echo 'Categoría';
                                                $controller = 'categorias_descuentos';
                                            } else if (!empty($descuento['Producto'])) {
                                                echo 'Producto';
                                                $controller = 'descuentos_productos';
                                            }
                                            ?>
                                    </td>
                                    <td><?php echo h($descuento['Descuento']['compraminima']); ?></td>
                                    <td><?php echo h($descuento['Descuento']['porcentaje']); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <?php echo $this->Html->link(
                                                    $this->Html->tag(
                                                        'button',
                                                        $this->Html->tag('i', '', array('class' => "fas fa-eye")),
                                                        array('class' => "btn btn-default")
                                                    ),
                                                    array('controller' => $controller, 'action' => 'view', $descuento['Descuento']['id']),
                                                    array('escape' => false)
                                                ); ?>
                                            <?php echo $this->Html->link(
                                                    $this->Html->tag(
                                                        'button',
                                                        $this->Html->tag('i', '', array('class' => "fas fa-edit")),
                                                        array('class' => "btn btn-default")
                                                    ),
                                                    array('controller' => $controller, 'action' => 'edit', $descuento['Descuento']['id']),
                                                    array('escape' => false)
                                                ); ?>
                                            <?php echo $this->Form->postLink(
                                                    $this->Html->tag(
                                                        'button',
                                                        $this->Html->tag('i', '', array('class' => "fas fa-trash")),
                                                        array('class' => "btn btn-default")
                                                    ),
                                                    array('controller' => $controller, 'action' => 'delete', $descuento['Descuento']['id']),
                                                    array('escape' => false),
                                                    __('¿Está seguro de que quiere eliminar el descuento "%s"?', $descuento['Descuento']['id'])
                                                ); ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->