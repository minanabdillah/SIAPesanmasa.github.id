<?php
include('../../conf/config.php');
$ex = $_GET['extra'];
$query = mysqli_query($koneksi, "INSERT INTO tb_extra (id, extra) values ('', '$ex') ");
header('Location: ../index.php?page=tambah-data-extrakulikuler');
?>