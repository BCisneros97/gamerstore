<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Clientes</h1>
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
                            $this->Html->tag('button', 'Nuevo', array('class'=>'btn btn-info')),
                            array('action' => 'add'),
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
                            <th>Tipo</th>
                            <th>Sexo</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($clientes as $cliente) : ?>
                            <tr>
                                <td><?php echo h($cliente['Cliente']['id']); ?></td>
                                <td><?php echo h($cliente['Cliente']['tipo']); ?></td>
                                <td><?php echo h($cliente['Cliente']['sexo']);?></td>
                                <td><?php echo h($cliente['User']['username']);?></td>
                                <td>
                                    <div class="btn-group">
                                        <?php echo $this->Html->link(
                                            $this->Html->tag(
                                                'button',
                                                $this->Html->tag('i', '', array('class' => "fas fa-eye")),
                                                array('class' => "btn btn-default")
                                            ),
                                            array('action' => 'view', $cliente['Cliente']['id']),
                                            array('escape' => false)
                                        ); ?>
                                        <?php echo $this->Html->link(
                                            $this->Html->tag(
                                                'button',
                                                $this->Html->tag('i', '', array('class' => "fas fa-edit")),
                                                array('class' => "btn btn-default")
                                            ),
                                            array('action' => 'edit', $cliente['Cliente']['id']),
                                            array('escape' => false)
                                        ); ?>
                                        <?php echo $this->Form->postLink(
                                            $this->Html->tag(
                                                'button',
                                                $this->Html->tag('i', '', array('class' => "fas fa-trash")),
                                                array('class' => "btn btn-default")
                                            ),
                                            array('action' => 'delete', $cliente['Cliente']['id']),
                                            array('escape' => false),
                                            __('¿Está seguro de que quiere eliminar "%s"?', $cliente['Cliente']['id'])
                                        ); ?>
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
