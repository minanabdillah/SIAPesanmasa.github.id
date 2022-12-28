<?php
include('../../conf/config.php');
$id = $_GET['id'];
$pr = $_GET['Program'];
$kd = $_GET['Kode'];
$gr = $_GET['guru'];
$query = mysqli_query($koneksi, "UPDATE tb_kajian SET Program = '$pr', Kode ='$kd', guru = '$gr' WHERE id = '$id'");
header('Location: ../index2.php?page=kajian');
?>