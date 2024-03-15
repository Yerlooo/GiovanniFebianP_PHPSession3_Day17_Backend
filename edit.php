<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center">CRUD DATA MAHASISWA</h2>
        <br>
        <a href="index.php" class="btn btn-primary">KEMBALI</a>
        <br>
        <br>
        <h3>EDIT DATA</h3>

        <?php
        include 'koneksi.php';
        $id_pasien = $_GET['id_pasien'];
        $data = mysqli_query($koneksi, "select * from tb_rumahsakit where id_pasien = '$id_pasien'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method='post' action="update.php">
                <table class="table">
                    <tr>
                        <td>Nama Pasien</td>
                        <td>
                            <input type="hidden" name="id_pasien" value="<?php echo $d['id_pasien']; ?>">
                            <input type="text" name="nama_pasien" value="<?php echo $d['nama_pasien']; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="alamat_pasien" value="<?php echo $d['alamat_pasien']; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td>
                            <input type="number" name="no_telp" value="<?php echo $d['no_telp']; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Pasien</td>
                        <td>
                            <select name="status_pasien" class="form-control">
                                <option value="">Pilih Status Pasie</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </form>
            <?php
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>