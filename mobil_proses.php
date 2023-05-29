<?php

require_once "inc/Koneksi.php";
require_once "app/Mobil.php";

$mobil = new App\Mobil();

if (isset($_POST['btn_simpan'])) {
    $mobil->simpan();
    header("location:index.php?hal=mobil_tampil");
}

if (isset($_POST['btn_update'])) {
    $mobil->update();
    header("location:index.php?hal=mobil_tampil");
}