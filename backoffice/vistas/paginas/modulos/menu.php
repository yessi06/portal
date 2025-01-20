<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed">
  <!-- Brand Logo -->
  <a href="inicio" class="brand-link">
    <img src="vistas/img/plantilla/icono.png" alt="PersesHub Logo" class="brand-image " style="opacity: .8">
    <span class="brand-text font-weight-light">PersesHub</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">

        <?php if ($usuario["foto"] == ""): ?>

          <img src="vistas/img/usuarios/default/default.png" class="img-circle elevation-2" alt="User Image">

        <?php else: ?>

          <img src="<?php echo $usuario["foto"] ?>" class="img-circle elevation-2" alt="User Image">

        <?php endif ?>

      </div>
      <div class="info">
        <a href="perfil" class="d-block"><?php echo $usuario["nombre"] ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="perfil" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Mi perfil</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="inicio" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>


        <?php if ($usuario["perfil"] == "admin"): ?>
          <li class="nav-item">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Usuarios</p>
            </a>
          </li>
        <?php endif ?>

        <li class="nav-item">
          <a href="clientes" class="nav-link">
            <i class="nav-icon fas fa-address-card"></i>
            <p>Clientes</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="usuarios" class="nav-link">
            <i class="nav-icon fas fa-link"></i>
            <p>Integraciones</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="soporte" class="nav-link">
            <i class="nav-icon fas fa-tools"></i>
            <p>Soporte</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="salir" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Cerrar sesión</p>
          </a>
        </li>


      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>