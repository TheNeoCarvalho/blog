  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Meu Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="?page=profile" class="d-block"><?= $_SESSION['user']?></a>
          <a href="http://localhost/blog/admin/functions/login.php?sair=sair">Sair</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?page=user" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuários
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=posts" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Posts
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="?page=profile" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Perfil
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="?page=profile" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Configurações
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
