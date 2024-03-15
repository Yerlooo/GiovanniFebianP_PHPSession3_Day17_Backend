<?php

include 'koneksi.php';

$id = $_POST['id_pasien'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_pasien = $_POST['status_pasien'];

mysqli_query($koneksi, "update tb_rumahsakit set nama='$nama', alamat='$alamat', notelp='$notelp', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin, status_pasien='$status_pasien'");

header("location:index.php");
?>