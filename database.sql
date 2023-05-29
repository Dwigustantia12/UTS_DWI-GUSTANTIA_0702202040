CREATE TABLE tb_karyawan (
      id_kar INT(11) NOT NULL AUTO_INCREMENT,
      name_kar VARCHAR(100) NOT NULL,
      alamat VARCHAR(100) NOT NULL,
      PRIMARY KEY(id_kar),
      UNIQUE KEY(name_kar)
);

CREATE TABLE tb_sewa (
      id_sewa INT(11) NOT NULL AUTO_INCREMENT,
      id_kar INT(11) NOT NULL,
      id_cus INT(11) NOT NULL,
      id_mobil INT(11) NOT NULL,
      tgl_pinjam timestamp,
      tgl_kembali date,
      PRIMARY KEY(id_sewa),
      UNIQUE KEY(id_kar)
);

CREATE TABLE tb_customer (
      id_cus INT(11) NOT NULL AUTO_INCREMENT,
      name_cus VARCHAR(100) NOT NULL,
      alamat VARCHAR(100) NOT NULL,
      PRIMARY KEY(id_cus),
      UNIQUE KEY(name_cus)
);

CREATE TABLE tb_mobil (
      id_mobil INT(11) NOT NULL AUTO_INCREMENT,
      no_plat VARCHAR(100) NOT NULL,
      merk VARCHAR(50) NOT NULL,
      warna VARCHAR(50) NOT NULL,
      PRIMARY KEY(id_mobil),
      UNIQUE KEY(no_plat)
);

