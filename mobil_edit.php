<?php

$id = $_GET['id'];
$mobil = new App\Mobil();

$row = $mobil->edit($id);
?>

<h2>Edit Mobil</h2>

<form action="mobil_proses.php" method="post">
    <input type="hidden" name="id_mobil" value="<?php echo $row['id_mobil']; ?>">
    <table>
    <tr>
            <td>ID MOBIL</td>
            <td><input type="text" name="id_kar"></td>
        </tr>
        <tr>
            <td>NO PLAT</td>
            <td><input type="text" name="no_plat"></td>
        </tr>
        <tr>
            <td>MERK</td>
            <td><input type="text" name="merk" value="<?php echo $row['merk']; ?>"></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><textarea name="warna" id="" cols="30" rows="10"><?php echo $row['warna']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>