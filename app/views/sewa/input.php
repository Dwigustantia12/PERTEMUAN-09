<h2>Input Sewa</h2>

<form action="<?php echo URL; ?>/sewa/simpan" method="post">
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
            <td><input type="text" name="tgl_pinjam"></td>
        </tr>
        <tr>
            <td>TANGGAL KEMBALI</td>
            <td><textarea name="tgl_kembali" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>