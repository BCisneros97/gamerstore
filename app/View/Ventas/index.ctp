<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Ventas</h1>
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

          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>Fecha Compra</th>
                <th>Fecha Entrega</th>
                <th>Cliente</th>
                <th>Monto</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($ventas as $venta) : ?>
                <tr>
                  <td><?php echo h($venta['Venta']['id']); ?></td>
                  <td><?php echo h($venta['Venta']['fechacompra']); ?></td>
                  <td><?php echo h($venta['Venta']['fechaentrega']); ?></td>
                  <td><?php echo h($venta['Cliente']['User']['username']); ?></td>
                  <td>
                    <?php
                      $monto = 0;
                      foreach ($venta['DiseniosVenta'] as $disenio) {
                        $monto += $disenio['preciounitario'] * $disenio['cantidad'] + $disenio['precioenvio'];
                      }
                      echo h($monto.'.00');
                    ?>
                  </td>
                  <td>
                    <div class="btn-group">
                      <?php echo $this->Html->link(
                          $this->Html->tag(
                            'button',
                            $this->Html->tag('i', '', array('class' => "fas fa-eye")),
                            array('class' => "btn btn-default")
                          ),
                          array('action' => 'view', $venta['Venta']['id']),
                          array('escape' => false)
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