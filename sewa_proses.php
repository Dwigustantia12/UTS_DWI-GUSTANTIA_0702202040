<?php

require_once "inc/Koneksi.php";
require_once "app/Sewa.php";

$sewa = new App\Sewa();

if (isset($_POST['btn_simpan'])) {
    $sewa->simpan();
    header("location:index.php?hal=sewa_tampil");
}

if (isset($_POST['btn_update'])) {
    $sewa->update();
    header("location:index.php?hal=sewa_tampil");
}