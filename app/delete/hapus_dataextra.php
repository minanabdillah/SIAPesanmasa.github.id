<?php
include('../../conf/config.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM extra WHERE id = '$id' ");
header('Location: ../index.php?page=extrakulikuler');
?>