<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title></title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Data Pasien Rumah Sakit</h2>
        <br>
        <a href="tambah.php" class="btn btn-primary">+ TAMBAH PASIEN</a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id_pasien</th>
                    <th>nama_pasien</th>
                    <th>alamat_pasien</th>
                    <th>no_telp</th>
                    <th>tanggal_lahir</th>
                    <th>jenis_kelamin</th>
                    <th>status_pasien</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $id_pasien = 1;
                $data = mysqli_query($koneksi, "select * from tb_rumahsakit");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td> <?php echo $id_pasien++;?> </td>
                        <td> <?php echo $d['nama_pasien']?> </td>
                        <td> <?php echo $d['alamat_pasien']?> </td>
                        <td> <?php echo $d['no_telp']?> </td>
                        <td> <?php echo $d['tanggal_lahir']?> </td>
                        <td> <?php echo $d['jenis_kelamin']?> </td>
                        <td> <?php echo $d['status_pasien']?> </td>
                        <td>
                            <a href="edit.php?id_pasien=<?php echo $d['id_pasien']?>" class="btn btn-warning">Edit</a>
                            <a href="hapus.php?id_pasien=<?php echo $d['id_pasien']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-betal/dist/js/bootstrap.min.js"></script>
</body>
</html>