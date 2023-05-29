<?php

$id = $_GET['id'];
$cus = new App\Customer();

$row = $cus->edit($id);
?>

<h2>Edit Customer</h2>

<form action="cus_proses.php" method="post">
    <input type="hidden" name="id_cus" value="<?php echo $row['id_cus']; ?>">
    <table>
    <tr>
            <td>ID CUSTOMER</td>
            <td><input type="text" name="id_cus" value="<?php echo $row['id_cus']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name_cus" value="<?php echo $row['name_cus']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" id="" cols="30" rows="10"><?php echo $row['alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>