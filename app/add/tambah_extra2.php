<?php
include('../../conf/config.php');
$ex = $_GET['extra'];
$query = mysqli_query($koneksi, "INSERT INTO extra (id, extra) values ('', '$ex') ");
header('Location: ../index2.php?page=extrakulikuler');
?>