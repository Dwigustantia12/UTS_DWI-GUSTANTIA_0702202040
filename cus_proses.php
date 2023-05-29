<?php

require_once "inc/Koneksi.php";
require_once "app/Customer.php";

$cus = new App\Customer();

if (isset($_POST['btn_simpan'])) {
    $cus->simpan();
    header("location:index.php?hal=cus_tampil");
}

if (isset($_POST['btn_update'])) {
    $cus->update();
    header("location:index.php?hal=cus_tampil");
}