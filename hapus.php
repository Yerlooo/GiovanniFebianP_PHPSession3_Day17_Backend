<?php
include 'koneksi.php';

$id_pasien = $_GET['id_pasien'];

mysqli_query($koneksi, "Delete from tb_rumahsakit where id_pasien = '$id_pasien'");

header("location:index.php");

?>
