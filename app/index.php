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
      }else if($_GET['page']=='data-mahasantri'){
        include('data_mahasantri.php'); 
      }else if($_GET['page']=='edit-data-mahasantri'){
        include('edit/edit_data.php'); 
      }
    }?>
    <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='data-guru'){
        include('data_guru.php'); 
      }else if($_GET['page']=='edit-data-guru'){
        include('edit/edit_dataguru.php'); 
      }
    }else {
      include('img1.html');
    }?>
    <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='Dashboard'){
        include('data_anggota.php');
      }else if($_GET['page']=='data-program'){
        include('data_mapel.php'); 
      }
      else if($_GET['page']=='edit-data-program'){
        include('edit/edit_dataprogram.php'); 
      }
    }else {
      include('img2.html');
    }?>
    <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='extrakulikuler'){
        include('extra.php');
      }
    }else {
      include('img3.html');
    }?>
    <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='tambah-data-extrakulikuler'){
        include('extra4.php');
      }
    }else {
      include('img4.html');
    }?>
    <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='tambah-data-kajian'){
        include('kajian2.php');
      }else if($_GET['page']=='edit-data-kajian'){
        include('edit/edit_datakajian2.php'); 
      }
    }else {
      include('img5.html');
    }?>
    <?php 
    if (isset($_GET['page'])) {
      if($_GET['page']=='tambah-data-tahsin'){
        include('tahsin2.php');
      }else if($_GET['page']=='edit-data-tahsin'){
        include('edit/edit_datatahsin2.php'); 
      }
    }else {
      include('img6.html');
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
