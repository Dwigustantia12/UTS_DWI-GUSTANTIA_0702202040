<?php

$mobil = new App\Mobil;
$rows = $mobil->tampil();

?>

<h2>Mobil</h2>

<a href="index.php?hal=mobil_input" class="btn">Add Mobil</a>

<table>
    <tr>
        <th>ID MOBIL</th>
        <th>N0 PLAT</th>
        <th>MERK</th>
        <th>WARNA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_mobil']; ?></td>
        <td><?php echo $row['no_plat']; ?></td>
        <td><?php echo $row['merk']; ?></td>
        <td><?php echo $row['warna']; ?></td>
        <td><a href="index.php?hal=mobil_edit&id=<?php echo $row['id_mobil']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=mobil_delete&id=<?php echo $row['id_mobil']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
