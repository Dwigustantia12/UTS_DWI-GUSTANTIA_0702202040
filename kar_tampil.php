<?php

$kar = new App\Karyawan;
$rows = $kar->tampil();

?>

<h2>Karyawan</h2>

<a href="index.php?hal=kar_input" class="btn">Add Karyawan</a>

<table>
    <tr>
        <th>ID KARYAWAN</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_kar']; ?></td>
        <td><?php echo $row['name_kar']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><a href="index.php?hal=kar_edit&id=<?php echo $row['id_kar']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=kar_delete&id=<?php echo $row['id_kar']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
