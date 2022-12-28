<?php
include('../../conf/config.php');
$prg = $_GET['program'];
$kd = $_GET['kode'];
$gr = $_GET['guru'];
$query = mysqli_query($koneksi, "INSERT INTO tb_kajian (id, program, kode, guru) values ('', '$prg', '$kd', '$gr')");
header('Location: ../index2.php?page=kajian');
?>