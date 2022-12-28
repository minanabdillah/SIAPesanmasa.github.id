<?php
include('../../conf/config.php');
$nama = $_GET['Nama'];
$nim = $_GET['NIM'];
$smt = $_GET['Semester'];
$query = mysqli_query($koneksi, "INSERT INTO tb_mahasantri (id, Nama, NIM, Semester) values ('', '$nama', '$nim', '$smt') ");
header('Location: ../index.php?page=data-mahasantri');
?>