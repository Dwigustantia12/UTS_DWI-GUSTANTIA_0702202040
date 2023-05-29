<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Karyawan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_karyawan";
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
        $name_kar = $_POST['name_kar'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO tb_karyawan (name_kar, alamat) VALUES (:name_kar, :alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":name_kar", $name_kar);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_karyawan WHERE id_kar=:id_kar";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kar", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $name_kar = $_POST['name_kar'];
        $alamat = $_POST['alamat'];
        $id_kar = $_POST['id_kar'];

        $sql = "UPDATE tb_karyawan SET name_kar=:name_kar, alamat=:alamat WHERE id_kar=:id_kar";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":name_kar", $name_kar);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":id_kar", $id_kar);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_karyawan WHERE id_kar=:id_kar";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kar", $id);
        $stmt->execute();

    }

}