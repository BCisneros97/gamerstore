<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Regiones</h1>
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
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($regions as $region) : ?>
                            <tr>
                                <td><?php echo h($region['Region']['id']); ?></td>
                                <td><?php echo h($region['Region']['nombre']); ?></td>
                                <td>
                                    <div class="btn-group">
                                        <?php echo $this->Html->link(
                                            $this->Html->tag(
                                                'button',
                                                $this->Html->tag('i', '', array('class' => "fas fa-eye")),
                                                array('class' => "btn btn-default")
                                            ),
                                            array('action' => 'view', $region['Region']['id']),
                                            array('escape' => false)
                                        ); ?>
                                        <?php echo $this->Html->link(
                                            $this->Html->tag(
                                                'button',
                                                $this->Html->tag('i', '', array('class' => "fas fa-edit")),
                                                array('class' => "btn btn-default")
                                            ),
                                            array('action' => 'edit', $region['Region']['id']),
                                            array('escape' => false)
                                        ); ?>
                                        <?php echo $this->Form->postLink(
                                            $this->Html->tag(
                                                'button',
                                                $this->Html->tag('i', '', array('class' => "fas fa-trash")),
                                                array('class' => "btn btn-default")
                                            ),
                                            array('action' => 'delete', $region['Region']['id']),
                                            array('escape' => false),
                                            __('¿Está seguro de que quiere eliminar "%s"?', $region['Region']['nombre'])
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