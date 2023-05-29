<?php

$id = $_GET['id'];

$cus = new App\Customer();
$rows = $cus->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=cus_tampil">Kembali</a>
</div>