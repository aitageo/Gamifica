<?php
session_start();
?>               
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mi Proyecto | Administrador</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="./datatables/dataTables.bootstrap4.min.css">
 
<!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>-->

  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" type="text/css" href="dist/css/Estilos.css">
  <!-- AQUI INCLUYO ARCHIVO CON AJAX -->
  <script src="../Admin/build/js/myscript.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- <script>
  $(document).ready(function() {
    $('#example').DataTable();
} ); -->
</script>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #a2eff2;" >
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
     <center> <img src="../../../Vista/assets/img/logo.png"  class="brand-image " width="150px" height="150px">
      <span class="brand-text font-weight-light mt-5" style="color:#000;">MegaS</span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <?php 
                    if (empty($_SESSION['user'])) {
                       echo '<div class="info">
                        <a href="#" class="d-block">Nombre Administrador</a> </div>';
                                
                     }  else{
                          echo '<div class="info">
                          <a href="#" class="d-block" style="color:#000;">Bienvenido <bold
                          >'.$_SESSION['user'].'</bold
                          ></a></div>';  
                           }
               ?>


        
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
         <li class="nav-item has-treeview">
            <a href="Usuarios.php" class="nav-link">
              <i class="fas fa-users" style="color:#ff5c51;"></i>
              <p class="active" style="color:#000;">
                Usuarios
                <i class="fas fa-angle-left right"></i>
                              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="color:#ff5c51;">
                <a href="Usuarios.php" class="nav-link">
                 <i class="fas fa-user-astronaut" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;" >Perfil Usuario </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="DatosAcad.php" class="nav-link">
                  <i class="fas fa-user-graduate" style="color:#ff5c51;"></i>
                  <p style="color:#000;">Datos Académicos</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="InfoInsti.php" class="nav-link">
              <i class="fas fa-university" style="color:#ff5c51;"></i>
              <p class="active" style="color:#000;">
                Info. Institucional
                <i class="fas fa-angle-left right" ></i>
                              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Instituciones.php" class="nav-link">
                  <i class="fas fa-school" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;">Instituciones Educativas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Programas.php" class="nav-link">
                  <i class="fas fa-laptop-code" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;">Programas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Fichas.php" class="nav-link">
                  <i class="fas fa-graduation-cap" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;">Fichas</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="Infojuegos.php" class="nav-link">
              <i class="fas fa-gamepad" style="color:#ff5c51;"></i>
              <p class="active" style="color:#000;">
                Juegos
                <i class="fas fa-angle-left right"></i>
                              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="InfoJuegos.php" class="nav-link">
                  <i class="fas fa-chess" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;">Info. Juegos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="JuegoUsua.php" class="nav-link">
                  <i class="fab fa-teamspeak" style="color:#ff5c51;"></i>
                  <p style="color:#000;">Juegos por usuario</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy" style="color:#ff5c51;"></i>
              <p class="active" style="color:#000;">
                Configuración
                <i class="fas fa-angle-left right"></i>
                              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="TipoDoc.php" class="nav-link">
                  <i class="far fa-id-card" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;">Tipo Documento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="TipoUsuario.php" class="nav-link">
                  <i class="fas fa-users-cog" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;">Tipo Usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Nivel.php" class="nav-link">
                  <i class="fas fa-level-up-alt" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;">Nivel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Temario.php" class="nav-link">
                  <i class="fas fa-list-ol" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;">Temario</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table" style="color:#ff5c51;"></i>
              <p class="active" style="color:#000;">
                Reportes
                <i class="fas fa-angle-left right" ></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Reportes1.php" class="nav-link">
                  <i class="fas fa-child" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;" >Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Reporte2.php" class="nav-link">
                  <i class="fas fa-puzzle-piece" style="color:#ff5c51;"></i>
                  <p class="active" style="color:#000;">Juegos por usuario</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a href="../../../Controlador/logout.php" class="nav-link" style="color:#000">
              <i class="fas fa-sign-out-alt" style="color:#ff5c51;"></i>
              <p >Cerrar Sesión         
              </p>
            </a>
          </li>
            </ul>
               </nav>   
  
  <!-- /.control-sidebar -->
</div>
  </aside>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light justify-content-end" style="background-color: #eafafa;" >
       
      <li class="nav-item" style="color:#000; list-style: none; ">
        <a class="nav-link active"  href="../../../Controlador/logout.php" style="color:#000;">Cerrar Sesión
         <i class="fas fa-sign-out-alt"></i>
        </a>
    </ul>
  </nav>
    <!-- /.sidebar -->
  </aside>

    <script src="../Admin/build/js/myscript.js"></script>