<?php
include('../../conf/config.php');
$nama = $_GET['Nama'];
$nip = $_GET['NIP'];
$mapel = $_GET['Program'];
$query = mysqli_query($koneksi, "INSERT INTO tb_guru (id,Nama,NIP,Program) values ('', '$nama', '$nip', '$mapel') ");
header('Location: ../index.php?page=data-guru');
?>