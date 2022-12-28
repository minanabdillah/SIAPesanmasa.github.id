<?php
include('../../conf/config.php');
$id = $_GET['id'];
$pr = $_GET['Program'];
$kd = $_GET['Kode'];
$query = mysqli_query($koneksi, "UPDATE tb_mapel SET Program = '$pr', Kode = '$kd 'WHERE id = '$id'");
header('Location: ../index.php?page=data-program');
?>