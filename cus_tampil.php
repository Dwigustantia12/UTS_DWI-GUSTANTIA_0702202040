<?php

$cus = new App\Customer;
$rows = $cus->tampil();

?>

<h2>Customer</h2>

<a href="index.php?hal=cus_input" class="btn">Add Customer</a>

<table>
    <tr>
        <th>ID CUSTOMER</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_cus']; ?></td>
        <td><?php echo $row['name_cus']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><a href="index.php?hal=cus_edit&id=<?php echo $row['id_cus']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=cus_delete&id=<?php echo $row['id_cus']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
