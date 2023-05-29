<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Mobil extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_mobil";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $no_plat = $_POST['no_plat'];
        $merk = $_POST['merk'];
        $warna = $_POST['warna'];
        
        $sql = "INSERT INTO tb_mobil (no_plat, merk, warna) VALUES (:no_plat, :merk, :warna)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":no_plat", $no_plat);
        $stmt->bindParam(":merk", $merk);
        $stmt->bindParam(":warna", $warna);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_mobil WHERE id_mobil=:id_mobil";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_mobil", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $no_plat = $_POST['no_plat'];
        $merk = $_POST['merk'];
        $warna = $_POST['warna'];
        $id_mobil = $_POST['id_mobil'];

        $sql = "UPDATE tb_mobil SET no_plat=:no_plat, merk=:merk, warna=:warna WHERE id_mobil=:id_mobil";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":no_plat", $no_plat);
        $stmt->bindParam(":merk", $merk);
        $stmt->bindParam(":warna", $warna);
        $stmt->bindParam(":id_mobil", $id_mobil);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_mobil WHERE id_mobil=:id_mobil";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_mobil", $id);
        $stmt->execute();

    }

}