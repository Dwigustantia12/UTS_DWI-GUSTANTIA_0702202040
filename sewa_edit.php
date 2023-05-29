<?php

$id = $_GET['id'];
$sewa = new App\Sewa();

$row = $sewa->edit($id);
?>

<h2>Edit Sewa</h2>

<form action="sewa_proses.php" method="post">
    <input type="hidden" name="id_sewa" value="<?php echo $row['id_sewa']; ?>">
    <table>
        <tr>
            <td>ID SEWA</td>
            <td><input type="text" name="id_sewa" value="<?php echo $row['id_sewa']; ?>"></td>
        </tr>
        <tr>
            <td>ID KARYAWAN</td>
            <td><input type="text" name="id_kar" value="<?php echo $row['id_kar']; ?>"></td>
        </tr>
        <tr>
            <td>ID CUSTOMER</td>
            <td><input type="text" name="id_cus" value="<?php echo $row['id_cus']; ?>"></td>
        </tr>
        <tr>
            <td>ID MOBIL</td>
            <td><input type="text" name="id_mobil" value="<?php echo $row['id_mobil']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL PINJAM</td>
            <td><input type="text" name="tgl_pinjam" value="<?php echo $row['tgl_pinjam']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL KEMBALI</td>
            <td><input type="text" name="tgl_kembali" value="<?php echo $row['tgl_kembali']; ?>"></td>
        </tr>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>