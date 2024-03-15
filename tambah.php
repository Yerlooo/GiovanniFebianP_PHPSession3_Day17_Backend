<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pasien - CRUD Pasien</title>  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="text-center">
      <h1>CRUD Pasien - Tambah Data</h1>  </div>
    <br>
    <a href="index.php" class="btn btn-primary">KEMBALI</a>
    <br>
    <br>

    <form method="post" action="tambah_aksi.php">
      <table class="table table-bordered">  <tr>
          <th>Nama Pasien</th>
          <td><input type="text" name="nama_pasien" class="form-control" required></td>  </tr>
        <tr>
          <th>Alamat</th>
          <td><input type="text" name="alamat_pasien" class="form-control" required></td>
        </tr>
        <tr>
          <th>No Telp</th>
          <td><input type="number" name="no_telp" class="form-control" required></td>  </tr>
        <tr>
          <th>Tanggal Lahir</th>
          <td><input type="date" name="tanggal_lahir" class="form-control" required></td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td>
            <select name="jenis_kelamin" class="form-control" required>  
                <option value="">Pilih Jenis Kelamin</option>  
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Status Pasien</th>
          <td>
            <select name="status_pasien" class="form-control" required>
              <option value="">Pilih Status Pasien</option>
              <option value="Aktif">Aktif</option>
              <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
          </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>  </tr>
      </table>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html>