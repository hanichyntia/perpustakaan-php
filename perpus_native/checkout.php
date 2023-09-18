<?php 
session_start();
include "koneksi.php";
$cart=@$_SESSION['cart'];
if (count($cart)>0) {
  $lama_pinjam=5;
  $tgl_harus_kembali=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_pinjam),date('Y')));
  mysqli_query($conn, "insert into peminjaman_buku(id_siswa, tanggal_pinjam, tanggal_kembali) value('".$_SESSION['id_siswa']."', '".date('Y-m-d')."', '".$tgl_harus_kembali."')");
  $id=mysqli_insert_id($conn);
  foreach ($cart as $key_product => $val_product) {
    mysqli_query($conn, "insert into detail_peminjaman_buku(id_peminjaman_buku, id_buku, qty) value ('".$id."', '".$val_product['id_buku']."', '".$val_product['qty']."')");
  }
  unset($_SESSION['cart']);
  echo '<script>alert("Anda berhasil meminjam buku");location.href="history_peminjaman.php"</script>';
}
?>