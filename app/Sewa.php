<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Sewa extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_sewa";
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
        $id_sewa = $_POST['id_sewa'];
        $id_kar = $_POST['id_kar'];
        $id_cus = $_POST['id_cus'];
        $id_mobil = $_POST['id_mobil'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];

        $sql = "INSERT INTO tb_sewa (id_sewa, id_kar, id_cus, id_mobil, tgl_pinjam, tgl_kembali) VALUES (:id_sewa, :id_kar, :id_cus, :id_mobil, :tgl_pinjam, :tgl_kembali)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_sewa", $id_sewa);
        $stmt->bindParam(":id_kar", $id_kar);
        $stmt->bindParam(":id_cus", $id_cus);
        $stmt->bindParam(":id_mobil", $id_mobil);
        $stmt->bindParam(":tgl_pinjam", $tgl_pinjam);
        $stmt->bindParam(":tgl_kembali", $tgl_kembali);
        $stmt->execute();

    }

    public function edit($id)
    {


        $sql = "SELECT * FROM tb_sewa WHERE id_sewa=:id_sewa";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_sewa", $id);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
    
        $id_kar = $_POST['id_kar'];
        $id_cus = $_POST['id_cus'];
        $id_mobil = $_POST['id_mobil'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        $id_sewa = $_POST['id_sewa'];

        $sql = "UPDATE tb_sewa SET id_sewa=:id_sewa, id_kar=:id_kar, id_cus=:id_cus, id_mobil=:id_mobil, tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali  WHERE id_sewa=:id_sewa";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kar", $id_kar);
        $stmt->bindParam(":id_cus", $id_cus);
        $stmt->bindParam(":id_mobil", $id_mobil);
        $stmt->bindParam(":tgl_pinjam", $tgl_pinjam);
        $stmt->bindParam(":tgl_kembali", $tgl_kembali);
        $stmt->bindParam(":id_sewa", $id_sewa);

        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_sewa WHERE id_sewa=:id_sewa";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_sewa", $id);
        $stmt->execute();
    }

}