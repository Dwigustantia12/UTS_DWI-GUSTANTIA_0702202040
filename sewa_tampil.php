<?php

$sewa = new App\Sewa;
$rows = $sewa->tampil();

?>

<h2>SEWA</h2>

<a href="index.php?hal=sewa_input" class="btn">Add Sewa</a>

<table>
    <tr>
        <th>ID SEWA</th>
        <th>ID KARYAWAN</th>
        <th>ID CUSTOMER</th>
        <th>ID MOBIL</th>
        <th>TANGGAL PINJAM</th>
        <th>TANGGAL KEMBALI</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_sewa']; ?></td>
        <td><?php echo $row['id_kar']; ?></td>
        <td><?php echo $row['id_cus']; ?></td>
        <td><?php echo $row['id_mobil']; ?></td>
        <td><?php echo $row['tgl_pinjam']; ?></td>
        <td><?php echo $row['tgl_kembali']; ?></td>
        <td><a href="index.php?hal=sewa_edit&id=<?php echo $row['id_sewa']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=sewa_delete&id=<?php echo $row['id_sewa']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
