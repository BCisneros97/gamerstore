<!DOCTYPE html>
<html>

<head>
  <?php echo $this->Html->charset(); ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gamer Store - Admin</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <?php
  echo $this->Html->meta('icon', 'img/favicon.png', array('type' => 'image/png'));
  echo $this->Html->css('/plugins/fontawesome-free/css/all.min.css');
  echo $this->Html->css('/plugins/datatables-bs4/css/dataTables.bootstrap4.css');
  echo $this->Html->css('/plugins/toastr/toastr.min.css');
  echo $this->Html->css('/dist/css/adminlte.min.css');
  echo $this->fetch('meta');
  echo $this->fetch('css');
  ?>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php echo $this->Html->link(
        $this->Html->image(
          'favicon.png',
          array('alt' => "Gamer Store Logo", 'class' => "brand-image img-circle elevation-3")
        ) .
          $this->Html->tag('span', 'Gamer Store', array('class' => "brand-text font-weight-light")),
        'index',
        array('escape' => false, 'class' => 'brand-link')
      ); ?>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img class="img-circle elevation-2" src="data:image/jpg;base64,<?= base64_encode(AuthComponent::user('foto')) ?>">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= AuthComponent::user('username') ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-tachometer-alt")) .
                  $this->Html->tag('p', 'Categorías'),
                array('controller' => 'categorias', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-th")) .
                  $this->Html->tag('p', 'Ciudades'),
                array('controller' => 'ciudads', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-copy")) .
                  $this->Html->tag('p', 'Clientes'),
                array('controller' => 'clientes', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-chart-pie")) .
                  $this->Html->tag('p', 'Descuentos'),
                array('controller' => 'descuentos', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-tree")) .
                  $this->Html->tag('p', 'Diseños'),
                array('controller' => 'disenios/index', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-tree")) .
                  $this->Html->tag('p', 'Productos'),
                array('controller' => 'productos', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-edit")) .
                  $this->Html->tag('p', 'Proveedores'),
                array('controller' => 'proveedors', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-chart-pie")) .
                  $this->Html->tag('p', 'Reclamos'),
                array('controller' => 'reclamos', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>

            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-user")) .
                  $this->Html->tag('p', 'TipoReclamos'),
                array('controller' => 'Tiporeclamos', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>

            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-chart-pie")) .
                  $this->Html->tag('p', 'Regiones'),
                array('controller' => 'regions', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-user")) .
                  $this->Html->tag('p', 'Usuarios'),
                array('controller' => 'users', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
            <li class="nav-item">
              <?php echo $this->Html->link(
                $this->Html->tag('i', '', array('class' => "nav-icon fas fa-user")) .
                  $this->Html->tag('p', 'Ventas'),
                array('controller' => 'ventas', 'action' => 'index'),
                array('escape' => false, 'class' => 'nav-link')
              ); ?>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php echo $this->Session->flash('flash', array('element' => 'flash')); ?>

      <?php echo $this->fetch('content'); ?>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2019 Gamer Store.</strong> Derechos reservados.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php
  echo $this->element('sql_dump');
  echo $this->Html->script('/plugins/jquery/jquery.min.js');
  echo $this->Html->script('/plugins/bootstrap/js/bootstrap.bundle.min.js');
  echo $this->Html->script('/plugins/datatables/jquery.dataTables.js');
  echo $this->Html->script('/plugins/datatables-bs4/js/dataTables.bootstrap4.js');
  echo $this->Html->script('/plugins/toastr/toastr.min.js');
  echo $this->Html->script('/dist/js/adminlte.min.js');
  echo $this->Html->script('/dist/js/demo.js');
  ?>


  <?php echo $this->fetch('script'); ?>

  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>

</html>