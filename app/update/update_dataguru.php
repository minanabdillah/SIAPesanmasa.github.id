<?php
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['Nama'];
$nip = $_GET['NIP'];
$pr = $_GET['Program'];
$query = mysqli_query($koneksi, "UPDATE tb_guru SET Nama = '$nama', NIP = '$nip',  Program = '$pr' WHERE id = '$id'");
header('Location: ../index.php?page=data-guru');
?>