<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Customer extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_customer";
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
        $id_cus = $_POST['id_cus'];
        $name_cus = $_POST['name_cus'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO tb_customer (id_cus, name_cus, alamat) VALUES (:id_cus, :name_cus, :alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_cus", $id_cus);
        $stmt->bindParam(":name_cus", $name_cus);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_customer WHERE id_cus=:id_cus";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_cus", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $id_cus = $_POST['id_cus'];
        $name_cus = $_POST['name_cus'];
        $alamat = $_POST['alamat'];

        $sql = "UPDATE tb_customer SET id_cus=:id_cus, name_cus=:name_cus, alamat=:alamat WHERE id_cus=:id_cus";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_cus", $id_cus);
        $stmt->bindParam(":name_cus", $name_cus);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_customer WHERE id_cus=:id_cus";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_cus", $id_cus);
        $stmt->execute();

    }

}