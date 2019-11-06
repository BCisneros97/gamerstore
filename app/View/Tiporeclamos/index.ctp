<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tipo Reclamos</h1>
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
                <th>Descripcion</th>
               
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tiporeclamos as $tiporeclamo) : ?>
                <tr>
                  <td><?php echo h($tiporeclamo['Tiporeclamo']['id']); ?></td>
                  <td><?php echo h($tiporeclamo['Tiporeclamo']['descripcion']); ?></td>
                  
                  <td>
                    <div class="btn-group">
                      <?php echo $this->Html->link(
                          $this->Html->tag(
                            'button',
                            $this->Html->tag('i', '', array('class' => "fas fa-eye")),
                            array('class' => "btn btn-default")
                          ),
                          array('action' => 'view', $tiporeclamo['Tiporeclamo']['id']),
                          array('escape' => false)
                        ); ?>
                      <?php echo $this->Html->link(
                          $this->Html->tag(
                            'button',
                            $this->Html->tag('i', '', array('class' => "fas fa-edit")),
                            array('class' => "btn btn-default")
                          ),
                          array('action' => 'edit', $tiporeclamo['Tiporeclamo']['id']),
                          array('escape' => false)
                        ); ?>
                      <?php echo $this->Form->postLink(
                          $this->Html->tag(
                            'button',
                            $this->Html->tag('i', '', array('class' => "fas fa-trash")),
                            array('class' => "btn btn-default")
                          ),
                          array('action' => 'delete', $tiporeclamo['Tiporeclamo']['id']),
                          array('escape' => false),
                          __('¿Está seguro de que quiere eliminar "%s"?', $tiporeclamo['Tiporeclamo']['descripcion'])
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