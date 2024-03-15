<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_rumahsakit");

if(mysqli_connect_errno()){
    echo "koneksi gagal". mysqli_connect_error();
}else{
    echo "koneksi terhubung";
}
?>