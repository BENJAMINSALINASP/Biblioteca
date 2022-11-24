<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Biblioteca</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/dist/css/adminlte.min.css">
  <!-- jQuery -->
  <script src="<?php echo $URL;?>/public/plugins/jquery/jquery.min.js"></script>
  <!-- datatable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>/public/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo $URL;?>/admin/usuarios/peticiones.php" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>/public/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>/public/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>/admin" class="brand-link">
      <img src="data:image/jpeg;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BIBLIOTECA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $sesion_nombres.' '.$sesion_apellidos; ?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/admin/usuarios/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/admin/usuarios/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo usuario</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Libros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/admin/libros/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de libros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/admin/libros/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo libro</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>