<?php 
if ($_POST) {
    $id_siswa= $_POST['id_siswa'];
    $nama_siswa= $_POST['nama_siswa'];
    $tanggal_lahir= $_POST['tanggal_lahir'];
    $alamat= $_POST['alamat'];
    $gender= $_POST['gender'];
    $username= $_POST['username'];
    $password= md5($_POST['password']);
    $id_kelas= $_POST['id_kelas'];
    
    if (empty($nama_siswa)) {
        echo "<script>alert ('username tidak boleh kosong')'locationn.href='tambah_siswa.php.;</script>";
    }else {
        include "koneksi.php";
        if (empty($password)) {
            
            $update_siswa = mysqli_query($conn, "update siswa set 
            nama_siswa='" . $_POST['nama_siswa'] . "',
            tanggal_lahir='" . $_POST['tanggal_lahir'] . "',
            gender='" . $_POST['gender'] . "', 
            alamat='" . $_POST['alamat'] . "', 
            id_kelas='" . $_POST['id_kelas'] . "', 
            username='" . $_POST['username'] . "', 
            password='" . $password . "' 
            where id_siswa='" . $_POST['id_siswa'] . "'");
            
            if ($update) {
                echo "<script>alert ('Sukses update siswa')'locationn.href='tambah_siswa.php.;</script>";
            }else {
                "<script>alert ('Gagal update siswa')'locationn.href='tambah_siswa.php.;</script>";
            }
        }else {
            $update= mysqli_query($conn, "UPDATE siswa set 
            nama_siswa='" . $_POST['nama_siswa'] . "',
            tanggal_lahir='" . $_POST['tanggal_lahir'] . "',
            gender='" . $_POST['gender'] . "', 
            alamat='" . $_POST['alamat'] . "', 
            id_kelas='" . $_POST['id_kelas'] . "', 
            username='" . $_POST['username'] . "', 
            password='" . $password . "' 
            where id_siswa='" . $_POST['id_siswa'] . "'");
        
        }if ($update) {
            echo "<script>alert ('Sukses update siswa'); location.href='ubah_siswa.php';</script>";
        }else {
            echo "<script>alert ('Gagal update siswa'); location.href='ubah_siswa.php';</script>"; 
        }
    }
}
?>