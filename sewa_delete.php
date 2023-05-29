<?php

$id = $_GET['id'];

$sewa = new App\Sewa();
$rows = $sewa->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=sewa_tampil">Kembali</a>
</div>