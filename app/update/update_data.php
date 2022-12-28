<?php
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['Nama'];
$nim = $_GET['NIM'];
$smt = $_GET['Semester'];
$query = mysqli_query($koneksi, "UPDATE tb_mahasantri SET Nama = '$nama', NIM = '$nim', Semester = '$smt' WHERE id = '$id'");
header('Location: ../index.php?page=data-mahasantri');
?>