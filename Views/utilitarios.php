<?php
include_once '../Controllers/AuthenticationController.php';

if(session_status() == PHP_SESSION_NONE)
{
  session_start();
} 

 
function MostrarMenu()
{
  if($_SESSION["correoElectronico"] == null)
  {
    header("Location: ../Views/login.php");
  }
  echo '
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="../../index3.html" class="btn">Inicio</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">

    <form action="" method="post">
      <input type="submit" class="btn" id="btnCerrarSesion" name="btnCerrarSesion" 
      value="Cerrar Sesion"/>
    </form>

    </li>
  </ul>
  </nav>
 
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="../../index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Sistema Web MN</span>
      </a>
 
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"> '.$_SESSION["correoElectronico"]. ' </a>
          </div>
        </div>
 
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Usuarios<i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="usuarios.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Información</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="../widgets.html" class="nav-link">
                <i class="nav-icon fas fa-info"></i>
                <p>Consultas</p>
              </a>
            </li>     
          </ul>
        </nav>
      </div>
    </aside>
  ';
}
 
function MostrarFooter()
{
  echo '
  <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0
      </div>
      <strong>&copy; 2023</strong>
    </footer>
  ';
}
 
?>