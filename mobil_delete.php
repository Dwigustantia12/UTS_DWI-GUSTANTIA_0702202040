<?php

$id = $_GET['id'];

$mobil = new App\Mobil();
$rows = $mobil->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=mobil_tampil">Kembali</a>
</div>