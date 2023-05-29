<h2>Add SEWA</h2>

<form action="sewa_proses.php" method="post">
    <table>
    <tr>
            <td>ID SEWA</td>
            <td><input type="text" name="id_sewa"></td>
        </tr>
        <tr>
            <td>ID KARYAWAN</td>
            <td><input type="text" name="id_kar"></td>
        </tr>
        <tr>
            <td>ID CUSTOMER</td>
            <td><input type="text" name="id_cus"></td>
        </tr>
        <tr>
            <td>ID MOBIL</td>
            <td><input type="text" name="id_mobil"></td>
        </tr>
        <tr>
            <td>TANGGAL PINJAM</td>
            <td><input type="datetime-local" name="tgl_pinjam"></td>
        </tr>
        <tr>
            <td>TANGGAL KEMBALI</td>
            <td><input type="datetime-local" name="tgl_kembali"></td>
        </tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>