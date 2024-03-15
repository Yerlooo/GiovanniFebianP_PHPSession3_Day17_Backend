<?php

include 'koneksi.php';

$nama=$_POST['nama_pasien'];
$alamat=$_POST['alamat_pasien'];
$notelp=$_POST['no_telp'];
$tgl_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$status_pasien=$_POST['status_pasien'];   

mysqli_query($koneksi,"insert into tb_rumahsakit value('', '$nama','$alamat','$notelp','$tgl_lahir','$jenis_kelamin','$status_pasien')");

header("location:index.php");

?>