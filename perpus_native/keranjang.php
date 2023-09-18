<?php
include "header.php";
?>
<h2>Daftar Buku di Keranjang</h2>
<table class="table table-hover striped">
  <thead>
    <tr>
      <th>NO</th><th>Nama Buku</th><th>Jumlah</th><th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key_product => $val_product):
    ?>
        <tr>
          <td><?=($key_product+1)?></td>
          <td><?=$val_product['nama_buku']?></td>
          <td><?=$val_product['qty']?></td>
          <td><a href="hapus_cart.php?id=<?=$key_product?>" class="btn btn-danger"><strong>X</strong></a></td>
        </tr>
    <?php
        endforeach;
    } else {
        echo "<tr><td colspan='4'>Keranjang belanja kosong.</td></tr>";
    }
    ?>
  </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php
include "footer.php";
?>
