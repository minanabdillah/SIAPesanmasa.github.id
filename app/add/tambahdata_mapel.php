<?php
include('../../conf/config.php');
$mpel = $_GET['Program'];
$kode = $_GET['Kode'];
$query = mysqli_query($koneksi, "INSERT INTO tb_mapel (id, Program, Kode) values ('', '$mpel', '$kode') ");
header('Location: ../index.php?page=data-program');
?>