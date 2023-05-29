<?php

$id = $_GET['id'];

$kar = new App\Karyawan();
$rows = $kar->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=kar_tampil">Kembali</a>
</div>