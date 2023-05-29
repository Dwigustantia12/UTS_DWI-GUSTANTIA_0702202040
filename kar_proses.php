<?php

require_once "inc/Koneksi.php";
require_once "app/Karyawan.php";

$kar = new App\Karyawan();

if (isset($_POST['btn_simpan'])) {
    $kar->simpan();
    header("location:index.php?hal=kar_tampil");
}

if (isset($_POST['btn_update'])) {
    $kar->update();
    header("location:index.php?hal=kar_tampil");
}