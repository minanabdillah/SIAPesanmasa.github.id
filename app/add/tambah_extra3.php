<?php
include('../../conf/config.php');
$ex = $_GET['extra'];
$query = mysqli_query($koneksi, "INSERT INTO tb_extra (id, extra) values ('', '$ex') ");
header('Location: ../index2.php?page=tambah-extrakulikuler');
?>