<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Siswa</title>
</head>
<body>
  <h3>Tambah Siswa</h3>
  <form action="proses_tambah_siswa.php" method="post">
    nama siswa :
    <input type="text" name="nama_siswa" value="" class="form-control">
    Tanggal lahir :
    <input type="date" name="tanggal_lahir" value="" class="form-control">
    Gender :
    <select name="gender" class="form-control">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>
    Alamat :
    <textarea name="alamat" rows="4" class="form-control"></textarea>
    Kelas :
    <select name="id_kelas" class="form-control">
      <option></option>
    
    <?php
    include "koneksi.php";
    $qry_kelas=mysqli_query($conn,"select * from kelas");
    while ($data_kelas=mysqli_fetch_array($qry_kelas)) {
      echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>'; 
    }
    ?>
    </select>
    Username :
    <input type="text" name="username" value="" class="form-control">
    Password :
    <input type="password" name="password" class="form-control">
    <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-outline-primary">
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"></script>
</body>
</html>