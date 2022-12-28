<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if (!$_SESSION['nama']) {
  header('Location: ../index.php?session=expired');
}
include('header.php'); ?>
<?php include('../conf/config.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php'); ?>

  <!-- Navbar -->

  <!-- /.navbar -->
  <?php include('navbar.php');  ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('conten_header.php'); ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='Dashboard'){
        include('dashboard.php');
      }else if($_GET['page']=='data-program'){
        include('data_mapel2.php'); 
      }
    }else {
      include('dashboard.php');
    }?>
     <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='extrakulikuler'){
        include('extra2.php');
      }
    }else {
      include('dashboard.php');
    }?>
    <?php 
    if (isset($_GET['page'])) {
       if($_GET['page']=='kajian'){
        include('kajian.php'); 
      }else if($_GET['page']=='edit-data-kajian'){
        include('edit/edit_datakajian.php'); 
      }
    }else {
      include('dashboard.php');
    }?>
    <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='tahsin'){
        include('tahsin.php');
      }else if($_GET['page']=='edit-tahsin'){
        include('edit/edit_datatahsin.php'); 
      }
    }else {
      include('dashboard.php');
    }?>
    <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='Dashboard'){
        include('data_anggota.php');
      }else if($_GET['page']=='tambah-extrakulikuler'){
        include('extra3.php'); 
      }
    }else {
      include('dashboard.php');
    }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
