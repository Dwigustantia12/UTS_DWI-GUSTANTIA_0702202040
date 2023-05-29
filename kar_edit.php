<?php

$id = $_GET['id'];
$kar = new App\Karyawan();

$row = $kar->edit($id);
?>

<h2>Edit Karyawan</h2>

<form action="kar_proses.php" method="post">
    <input type="hidden" name="id_kar" value="<?php echo $row['id_kar']; ?>">
    <table>
    <tr>
            <td>ID KARYAWAN</td>
            <td><input type="text" name="id_kar"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name_kar" value="<?php echo $row['name_kar']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="alamat" id="" cols="30" rows="10"><?php echo $row['alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>