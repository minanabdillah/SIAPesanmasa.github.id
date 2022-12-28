<?php
include('../../conf/config.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tb_tahsin WHERE id = '$id' ");
header('Location: ../index.php?page=tambah-data-tahsin');
?>